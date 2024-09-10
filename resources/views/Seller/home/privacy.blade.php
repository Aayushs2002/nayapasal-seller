<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $pages->title }} | NauloPasal</title>
    @include("links.commonscript")
    @include("links.commonstyle")
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}


</head>


<body class="max-w-screen-2xl mx-auto bg-gray-100">
    <div class="sticky top-0 z-[999]">

        @include('Seller.registerlayout.navbar')
    </div>

    <div class="bg-gray-100 font-sans">

        <div class="container mx-auto py-8">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h1 class="text-3xl font-semibold">{{ $pages->title }}</h1>

                <hr class="my-4">

                <p class="text-gray-700">{!! $pages->description !!}</p>

            </div>
        </div>

    </div>

    @include('Seller.home.footer')

</body>

</html>
