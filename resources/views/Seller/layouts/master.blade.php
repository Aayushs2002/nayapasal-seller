<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('links.admin.adminscript')
    @include('links.admin.adminstyle')

</head>
<body>

    <div x-cloak x-data="{ sidebarOpen: true }" class="font-roboto flex min-h-screen">
        <div class="fixed w-full top-0 z-[999] bg-white">
        @include('Seller.layouts.navbar')
        </div>
        @include('Seller.layouts.sidebar')
        <main :class="sidebarOpen ? 'ml-64' : 'ml-0'"
            class="flex-1 overflow-x-hidden overflow-y-auto mt-10 mb-2 w-full bg-slate-50">
            <div class=" px-6 w-full max-sm:px-4 py-8  mt-7">
                @yield('body')
            </div>
        </main>
    </div>
    @include('links.seller.script')


</body>
</html>
