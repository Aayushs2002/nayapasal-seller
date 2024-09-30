@extends('Seller.layouts.master')
@section('body')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.0/dropzone.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.2/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.0/dropzone.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>

    <div class="container p-4">
        @include('message.index')

        <div class="flex gap-4 items-center">
            <a href="{{ route('seller.product.index') }}">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                    <path
                        d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                </svg>
            </a>
            <div class="text-xl font-bold">Add Product Images</div>
        </div>
        <div class="p-2 mt-10 rounded-md">
            @if (count($productImages) < 5)
                <form method="post" action="{{ route('seller.productImage', $product->id) }}" class="dropzone"
                    id="myDropzone">
                    @csrf
                </form>
            @else
                <div class="alert alert-warning">You have reached the maximum number of images (5). Please delete some
                    images to upload new ones.</div>
            @endif
        </div>
        <br>

        <div class="flex flex-wrap gap-3 p-4" id="image-gallery">
            @foreach ($productImages as $key => $img)
                <blockquote class="w-32 h-auto flex-wrap">
                    <img alt="productimage" src="{{ baseUrl() . 'uploads/' . $img->images }}"
                        class="aspect-square border w-full hover:text-black rounded-t-xl object-contain" />
                    <form action="{{ route('seller.deleteImage', $img->id) }}" method="POST"
                        id="delete-form-{{ $img->id }}">
                        @csrf
                        @method('delete')
                        <button type="button" onclick="deleteSingleImage({{ $img->id }})"
                            class="border bg-red-600 cursor-pointer openModal hover:bg-red-500 text-white text-center w-full">
                            Delete
                        </button>
                    </form>
                </blockquote>
            @endforeach
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.openModal').on('click', function(e) {
                $('#interestModal').removeClass('invisible');
            });
            $('.closeModal').on('click', function(e) {
                $('#interestModal').addClass('invisible');
            });
        });

        @if (count($productImages) < 5)
            Dropzone.options.myDropzone = {
                maxFilesize: 0.5, // in MB
                acceptedFiles: '.jpeg,.jpg,.png,.gif,.webp ',
                maxFiles: 5 - {{ count($productImages) }},
                init: function() {
                    this.on("maxfilesexceeded", function(file) {
                        this.removeFile(file);
                        Swal.fire({
                            icon: 'error',
                            title: 'Upload limit reached',
                            text: 'You can only upload up to 5 images.'
                        });
                    });
                    this.on("error", function(file, message) {
                        if (file.size > this.options.maxFilesize * 1024 * 1024) {
                            this.removeFile(file);
                            Swal.fire({
                                icon: 'error',
                                title: 'File too large',
                                text: 'The file size should not exceed 500KB.'
                            });
                        }
                    });
                    this.on("success", function(file, response) {
                        console.log(response)
                        const imgPath = response.images;
                        console.log(imgPath)
                        const imgId = response.id;
                        const newImage = `
                        <blockquote class="w-32 h-auto flex-wrap" id="image-${imgId}">
                            <img alt="productimage" src="{{ baseUrl() . 'uploads/' }}/${imgPath}" class="aspect-square border w-full hover:text-black rounded-t-xl object-contain" />
                            <form action="{{ route('seller.deleteImage', '') }}/${imgId}" method="POST" id="delete-form-${imgId}">
                                @csrf
                                @method('delete')
                                <button type="button" onclick="deleteSingleImage(${imgId})" class="border bg-red-600 cursor-pointer openModal hover:bg-red-500 text-white text-center w-full">
                                    Delete
                                </button>
                            </form>
                        </blockquote>`;
                        $('#image-gallery').append(newImage);
                    });
                }
            };
        @endif

        function deleteSingleImage(imageId) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'You will not be able to recover this image!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + imageId).submit();
                }
            });
        }
    </script>
@endsection
