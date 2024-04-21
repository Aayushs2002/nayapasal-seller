<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">
<style>
    .colored-toast.swal2-icon-success {

        background-color: #55ac23 !important;
    }

    .colored-toast.swal2-icon-error {

        background-color: #f27474 !important;
    }

    .colored-toast.swal2-icon-warning {
        background-color: #f8bb86 !important;
    }

    .colored-toast.swal2-icon-info {
        background-color: #3fc3ee !important;
    }

    .colored-toast.swal2-icon-question {
        background-color: #87adbd !important;
    }

    .colored-toast .swal2-title {
        color: white;
    }

    .colored-toast .swal2-close {
        color: white;
    }

    .colored-toast .swal2-html-container {
        color: white;
    }
</style>
<style>
    .animation-container {
        position: relative;
        animation: slideInFromRight 3s ease-in-out forwards;
    }

    @keyframes slideInFromRight {
        0% {
            opacity: 0;
            transform: translateX(100%);
        }

        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }
</style>
