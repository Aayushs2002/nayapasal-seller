<nav class="bg-white border-gray-200 as:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse text-3xl font-semibold ">
            <img src="{{ asset('logos/newlogo.svg') }}" class="w-28" />
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 as:text-gray-400 as:hover:bg-gray-700 as:focus:ring-gray-600"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        {{-- <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <form class="" action="{{route('seller.loginpost')}}" method="POST">
                @csrf
                @include('message.index')
                <div class="flex gap-x-2">
                    <div class="flex-col flex">
                        <label for="email" class="text-primary font-semibold text-sm pb-1">Email</label>
                        <input type="text" name="email" id="email" placeholder="Email"
                            class="border border-gray-300 p-1 rounded-md focus:outline-none focus:ring-2 focus:ring-primary transition duration-200 p-1 rounded-md " />
                    </div>
                    <div class="flex-col flex">
                        <label for="password" class="text-primary font-semibold text-sm pb-1">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password"
                            class="border border-gray-300 p-1 rounded-md focus:outline-none focus:ring-2 focus:ring-primary transition duration-200 p-1 rounded-md" />
                    </div>
                    <div class="flex items-center mt-5">

                        <button
                        class="bg-[#ff2953] text-white  px-6 py-1 rounded-md  hover:bg-[#e02447] transition duration-200">Login</button>
                    </div>
                </div>
            </form>
        </div> --}}
    </div>
</nav>
