
@include('links.commonstyle')

<style>
    li>ul {
        transform: translatex(100%) scale(0);
    }

    ul {
       /* height: 70vh; */
        z-index: 10;
    }

    li:hover>ul {
        transform: translatex(100%) scale(1);
    }

    .group:hover>ul {
        transform-origin: top right;
        transform: translatex(100%) scale(1);
    }


</style>

