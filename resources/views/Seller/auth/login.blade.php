<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body x-data="{ showPassword: false }">
    <section class="font-poppins">
        <div class=" z-10 flex items-center h-screen py-16 overflow-hidden 2xl:py-44 object-cover w-full "
            style="background-image: url('{{ asset('images/backimage.avif') }}') ">
            <div class=" max-w-6xl px-4 mx-auto">
                <div class="flex">
                    <div class="w-full px-4 ">
                        <div class="z-10 w-full p-5 shadow-md bg-gray-50  rounded-lg ">
                            <h2 class="text-xl font-bold leading-tight mb-7 md:text-2xl ">
                                Login to your seller account</h2>
                            <form action="{{route('seller.loginpost')}}" class="mt-4" method="POST">
                                @csrf
                                @include('message.index')
                                <div>
                                    <label for="" class="block text-gray-700 ">Email:</label>
                                    <input type="email" class="w-full px-4 py-3 mt-2 bg-gray-200 rounded-lg  "
                                        name="email" placeholder="Enter your email">
                                </div>
                                <div class="mt-4">
                                    <div>
                                        <label for="" class="text-gray-700  ">Password:</label>
                                        <div class="relative flex items-center mt-2">
                                            <input type="password" x-bind:type="showPassword ? 'text' : 'password'"
                                                class="w-full px-4 py-3 bg-gray-200 rounded-lg   " name="password"
                                                placeholder="Enter password">
                                            <button @click="showPassword = !showPassword" type="button"
                                                class="absolute right-0 mr-3  focus:outline-none">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-eye" width="20"
                                                    height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                                    <path
                                                        d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 text-right">
                                    <a href="{{ route('seller.resetpassword') }}" class="text-sm font-semibold text-sky-700 hover:underline">forgot
                                        password?</a>
                                </div>
                                <button
                                    class="w-full px-4 py-3 mt-4 font-semibold text-gray-700 bg-yellow-400 rounded-lg hover:text-gray-700 hover:bg-sky-200 "
                                    type="submit">LOGIN</button>
                                <div class="mt-4 text-gray-700  ">
                                    Need
                                    an account?
                                    <a href="{{route('seller.register')}}"
                                        class="font-semibold text-sky-700 hover:underline">
                                        Create an account </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
