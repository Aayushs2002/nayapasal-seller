@include("message.links")
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var closeButton = document.querySelector('.close-button');
        var alertBox = document.querySelector('.alert');

        if (closeButton) {
            closeButton.addEventListener('click', function() {
                hideAlert();
            });
        }

        // setTimeout(function() {
        //     hideAlert();
        // }, 2000);

        function hideAlert() {
            alertBox.remove();
        }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>

<script>
    const Toast = Swal.mixin({
        toast: true,
        position: "bottom-end",
        iconColor: 'white',
        customClass: {
            popup: 'colored-toast',
        },
        showConfirmButton: false,
        timer: 4000,
        timerProgressBar: true,
    })
</script>
