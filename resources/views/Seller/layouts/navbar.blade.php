<section class="flex items-center px-6 py-4 justify-between  border-b-2 border-gray-200">
    <div class="flex items-center max-sm:space-x-0 space-x-3 justify-between ">
        <div class="">
            <button @click="sidebarOpen = !sidebarOpen" class="text-primary focus:outline-none lg:block w-8">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
        </div>
        <div class=" md:col-span-1 lg:col-span-2">
            <div class="flex items-center max-sm:w-24 w-32">
                <img class="w-full" src="{{ asset('logos/newlogo.svg') }}" alt="banner_image">
            </div>
        </div>
    </div>
    <div x-data="{ dropdownOpen: false }" {{-- class="relative shadow-[0_3px_10px_rgb(0,0,0,0.2)] h-9 w-9 rounded-full mr-3" --}}>
        <button @click="dropdownOpen = ! dropdownOpen" class="" {{-- class="relative block overflow-hidden rounded-full h-9 w-9 focus:outline-none" --}}>
            <div class="flex items-center max-sm:gap-0 gap-2 group">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                    fill="none">
                    <path d="M12 2C17.5237 2 22 6.47778 22 12C22 17.5222 17.5237 22 12 22" stroke="currentColor"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M9 21.5C7.81163 21.0953 6.69532 20.5107 5.72302 19.7462M5.72302 4.25385C6.69532 3.50059 7.81163 2.90473 9 2.5M2 10.2461C2.21607 9.08813 2.66019 7.96386 3.29638 6.94078M2 13.7539C2.21607 14.9119 2.66019 16.0361 3.29638 17.0592"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M8 16.5C10.0726 14.302 13.9051 14.1986 16 16.5M14.2179 9.75C14.2179 10.9926 13.2215 12 11.9925 12C10.7634 12 9.76708 10.9926 9.76708 9.75C9.76708 8.50736 10.7634 7.5 11.9925 7.5C13.2215 7.5 14.2179 8.50736 14.2179 9.75Z"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                </svg>
                <span class="group-hover:hover:text-primary text-secondary max-sm:text-xs text-md font-semibold">

                    {{ Auth::guard('seller')->user()->firstname ?? ' ' }}
                    {{ Auth::guard('seller')->user()->lastname ?? ' ' }}
                </span>

                <div class="group-hover:hover:text-primary max-sm:hidden ">

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                        fill="none">
                        <path
                            d="M3.00012 14L3.23397 14.6626C4.14412 17.2413 4.5992 18.5307 5.63754 19.2654C6.67588 20 8.04322 20 10.7779 20H13.2224C15.957 20 17.3244 20 18.3627 19.2654C19.401 18.5307 19.8561 17.2413 20.7663 14.6626L21.0001 14"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                        <path
                            d="M12.0001 14V4M12.0001 14C11.2999 14 9.99165 12.0057 9.50012 11.5M12.0001 14C12.7003 14 14.0086 12.0057 14.5001 11.5"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>

        </button>

        <div x-cloak x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 z-10 w-full h-full">
        </div>

        <div x-cloak x-show="dropdownOpen"
            class="absolute right-0 z-10 w-48 mt-2 overflow-hidden bg-white rounded-md shadow-xl">
            <a href="{{ route('seller.seller-profile.index') }}"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary  hover:text-white">Profile</a>
            <a href="
            {{ route('seller.sellerchangepassword') }}
            "
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary  hover:text-white">Change
                Password</a>

            <form action="{{ route('seller.logout') }}" method="POST" class="">
                @csrf
                <button class="w-full flex justify-start">
                    <div
                        class="block px-4 py-2 text-left text-sm w-full text-gray-700 hover:bg-primary  hover:text-white">
                        Logout
                    </div>
                </button>
            </form>

        </div>
    </div>
</section>
