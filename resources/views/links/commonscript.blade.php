{{-- tailwind script  --}}
<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {

                colors: {
                    primary: '#023047',
                    oldprimary: '#f3ab23',
                    secondary: '#3939ac',
                }
            },
            screens: {
                'xs': '320px',
                'sm': '640px',
                'md': '768px',
                'lg': '1024px',
                'xl': '1280px',
                '2xl': '1536px',
                '1299px': '1299px',
            },
        }
    }
</script>
{{-- alpine script  --}}
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
{{-- sweet alert script   --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
{{-- sweetalert popup --}}
<script>
    function deleteImage(imageId) {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You will not be able to recover this !',
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
