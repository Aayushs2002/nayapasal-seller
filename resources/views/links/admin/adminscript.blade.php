@include("links.commonscript")
{{-- showimage --}}
<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        var old = document.getElementsByClassName('oldimage')[0];
        old.classList.add("hidden");
    };
</script>
{{-- tinymce --}}
<script src="{{ asset('tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">
    tinymce.init({
        selector: '.tinymce',
        maxContentSize: 157286400,
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table paste codesample"
        ],
        toolbar: "fullscreen code preview | undo redo | fontselect styleselect fontsizeselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | codesample action section button",
        toolbar: 'fullscreen code preview | undo redo | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | numlist bullist | forecolor backcolor removeformat | image media link',
        font_formats: "Segoe UI=Segoe UI;",
        plugins: 'advlist autolink lists link image charmap preview searchreplace visualblocks code codesample fullscreen insertdatetime media table',
        fontsize_formats: "8px 9px 10px 11px 12px 14px 16px 18px 20px 22px 24px 26px 28px 30px 32px 34px 36px 38px 40px 42px 44px 46px 48px 50px 52px 54px 56px 58px 60px 62px 64px 66px 68px 70px 72px 74px 76px 78px 80px 82px 84px 86px 88px 90px 92px 94px 96px",
        height: 300,
        remove_script_host: false,


        paste_data_images: true,
        file_picker_types: 'file image video media',
        file_picker_callback: function(cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');

            // input.setAttribute('accept', 'image/*');
            input.setAttribute('accept', 'image/*,video/*');
            input.onchange = function() {
                var file = this.files[0];

                if (file) {

                    var reader = new FileReader();
                    reader.onload = function() {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);

                        cb(blobInfo.blobUri(), {
                            title: file.name
                        });
                    };
                    reader.readAsDataURL(file);
                };
            }

            input.click();
        },
        setup: function(editor) {
            editor.on('paste', function(e) {
                var clipboardData = e.clipboardData || window.clipboardData;
                var pastedData = clipboardData.getData('text/plain');

                // Check if the pasted content is a video URL
                if (isVideoURL(pastedData)) {
                    // Handle the video URL as needed
                    console.log('Pasted Video URL:', pastedData);
                }
            });
        }
    });
</script>
{{-- discount in product create --}}
<script>
    function discountCheck() {
        let disc = document.querySelector('#discount')
        let showdisc = document.querySelector('#showdisc')
        if (disc.checked) {
            showdisc.classList.remove('hidden')
        } else {
            showdisc.classList.add('hidden')

        }
    }
</script>

