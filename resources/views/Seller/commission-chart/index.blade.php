<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NauloPasal | Seller</title>
    <link rel="shortcut icon" href="{{ asset('logos/fav.png') }}">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
</head>

<body x-data="{ page: 'home', 'darkMode': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
$watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" :class="{ 'b eh': darkMode === true }">
    <!-- ===== Header Start ===== -->
    <header class="g s r vd ya cj border-b-2 border-b-[#ff2953]" :class="{ 'hh sm _k dj bl ll': stickyMenu }"
        @scroll.window="stickyMenu = (window.pageYOffset > 20) ? true : false">
        @php
            $link = getOtherSetting();

        @endphp
        <div class="bb ze ki xn 2xl:ud-px-0 oo wf yf i ">
            <div class="vd to/4 tc wf yf">
                <a href="/seller/seller">
                    <img style="height:50px ; width: 160px" class=" om" src="{{ asset('logos/newlogo.svg') }}"
                        alt="Logo Light" />
                    <img style="height:50px ; width: 160px" class="xc nm" src="{{ asset('logos/newlogo.svg') }}"
                        alt="Logo Dark" />
                </a>

                <!-- Hamburger Toggle BTN -->
                <button class="po rc" @click="navigationOpen = !navigationOpen">
                    <span class="rc i pf re pd">
                        <span class="du-block h q vd yc">
                            <span class="rc i r s eh um tg te rd eb ml jl dl"
                                :class="{ 'ue el': !navigationOpen }"></span>
                            <span class="rc i r s eh um tg te rd eb ml jl fl"
                                :class="{ 'ue qr': !navigationOpen }"></span>
                            <span class="rc i r s eh um tg te rd eb ml jl gl"
                                :class="{ 'ue hl': !navigationOpen }"></span>
                        </span>
                        <span class="du-block h q vd yc lf">
                            <span class="rc eh um tg ml jl el h na r ve yc"
                                :class="{ 'sd dl': !navigationOpen }"></span>
                            <span class="rc eh um tg ml jl qr h s pa vd rd"
                                :class="{ 'sd rr': !navigationOpen }"></span>
                        </span>
                    </span>
                </button>
                <!-- Hamburger Toggle BTN -->
            </div>

            <div class="vd wo/4 sd qo f ho oo wf yf" :class="{ 'd hh rm sr td ud qg ug jc yh': navigationOpen }">
                {{-- <nav>
                    <ul class="tc _o sf yo cg ep text-[#023047] font-semibold ">
                        <li>
                            <a href="#home" class="xl hover:text-[#ff2953]" :class="">Home</a>
                        </li>
                        <li><a href="#features" class="xl hover:text-[#ff2953]">Why Us </a></li>

                        <li><a href="#service" class="xl hover:text-[#ff2953]">Services</a></li>

                        <li><a href="#advertising" class="xl hover:text-[#ff2953]">Advertise</a></li>

                    </ul>
                </nav> --}}
                <nav>
                    <ul class="flex space-x-6 text-[#023047] font-semibold">
                        <li>
                            <a href="#home" class="hover:text-[#ff2953]">Home</a>
                        </li>
                        <li>
                            <a href="#features" class="hover:text-[#ff2953]">Why Us</a>
                        </li>
                        <li>
                            <a href="#service" class="hover:text-[#ff2953]">Services</a>
                        </li>
                        <li>
                            <a href="#advertising" class="hover:text-[#ff2953]">Advertise</a>
                        </li>
                    </ul>
                </nav>

                <style>
                    html {
                        scroll-behavior: smooth;
                    }
                </style>
                <div class="tc wf ig pb no">
                    <a style="background-color:#ff2953" target="_blank" href="{{ route('seller.login') }}"
                        :class="{ 'hh/[0.15]': page === 'home', 'sh': page === 'home' && stickyMenu }"
                        class="lk gh dk rg tc wf xf _l gi hi">Sign In</a>

                    <a style="background-color:#ff2953" target="_blank" href="{{ route('seller.register') }}"
                        :class="{ 'hh/[0.15]': page === 'home', 'sh': page === 'home' && stickyMenu }"
                        class="lk gh dk rg tc wf xf _l gi hi">Sign Up</a>
                </div>
            </div>
        </div>
    </header>

    <!-- ===== Header End ===== -->
    <script>
        window.addEventListener('load', function() {
            // Add the fade-in class to the main content once the page is fully loaded
            document.getElementById('main-content').classList.add('fade-in');
        });
    </script>

    <style>
        /* Initially hide the main content */
        .main-section {
            opacity: 0;
        }

        /* Fade-in effect for the main content */
        .main-section.fade-in {
            opacity: 1;
            transition: opacity 1s ease-in;
        }
    </style>
    <main class="main-section opacity-0" id="main-content">
        <!-- ===== Hero Start ===== -->
        {{-- <section class="gj do ir hj sp jr i pg"> --}}
        <!-- Hero Images -->
        {{-- <div class="xc fn zd/2 2xl:ud-w-187.5 bd 2xl:ud-h-171.5 h q r">
                <img src={{ asset('image/shape-01.svg') }} alt="shape"
                    class="xc 2xl:ud-block h t -ud-left-[10%] ua" />
                <img src={{ asset('image/shape-02.svg') }} alt="shape" class="xc 2xl:ud-block h u p va" />
                <img src={{ asset('image/shape-03.svg') }} alt="shape" class="xc 2xl:ud-block h v w va" />
                <img src={{ asset('image/shape-04.svg') }} alt="shape" class="h q r" />
                <img src={{ asset('image/hero.png') }} alt="Woman" class="h q r ua" />
            </div> --}}

        <!-- Hero Content -->
        {{-- <div id="home" class="bb ze ki xn 2xl:ud-px-0 ">
                <div class="tc _o">
                    <div class="animate_left jn/2">
                        <h1 class="fk vj zp or kk wm wb">
                            Join Our <span style="color:#ff2953">Marketplace </span> Expand Your Business with Ease!
                        </h1>
                        <p class="fq">
                            Elevate Your Business Now. Your Products, Our Platform, Let’s Boost Your Sales!
                        </p>

                        <div class="tc tf yo zf mb">
                            <a href="{{ route('seller.register') }}" style="background-color:#ff2953"
                                class="ek jk lk gh gi hi rg ml il vc _d _l">Get Started Now</a>

                            <span class="tc sf">
                                <a href="mailto:info@naulopasal.com" class="inline-block ek xj kk wm">
                                    Contact at info@naulopasal.com
                                </a>
                                <span class="inline-block">For any question or concern</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div> --}}
        {{-- </section> --}}

        <header class="ezy__header3 custom-header light py-10 md:py-32 text-black" style="">
            @include('Seller.commission-chart.commission')
        
            <script src="https://cdn.tailwindcss.com"></script>
        </header>
<style>
    .custom-header {
    display: flex;
    justify-content: center;
}

</style>

    </main>
    <!-- ===== Footer Start ===== -->

    @include('Seller.home.footer')

    <!-- ===== Footer End ===== -->

    <!-- ====== Back To Top Start ===== -->
    <button class="xc wf xf ie ld vg sr gh tr g sa ta _a" @click="window.scrollTo({top: 0, behavior: 'smooth'})"
        @scroll.window="scrollTop = (window.pageYOffset > 50) ? true : false" :class="{ 'uc': scrollTop }">
        <svg class="uh se qd" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path
                d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
        </svg>
    </button>

    <!-- ====== Back To Top End ===== -->

    <script>
        //  Pricing Table
        const setup = () => {
            return {
                isNavOpen: false,

                billPlan: "monthly",

                plans: [{
                        name: "3 Months",
                        price: {
                            monthly: 21000,
                            annually: 29 * 12 - 199,
                        },
                        features: [
                            "- Large, prominent banners on the homepage for high visibility.",
                            "- Targeted banners on specific category pages (e.g., Fashion, Electronics)",
                            "- Exclusive Support",
                            "-Redirect to social media",
                            "- Display contact details"
                        ],
                    },
                    {
                        name: "6 Months",
                        price: {
                            monthly: 36000,
                            annually: 59 * 12 - 100,
                        },
                        features: [
                            "- Large, prominent banners on the homepage for high visibility.",
                            "- Targeted banners on specific category pages (e.g., Fashion, Electronics)",
                            "- Exclusive Support",
                            "- Pop-Up or Carousel Banners",
                            "-Redirect to social media",
                            "- Display contact details"
                        ],
                    },
                    {
                        name: "1 Year",
                        price: {
                            monthly: 60000,
                            annually: 139 * 12 - 100,
                        },
                        features: [
                            "- Large, prominent banners on the homepage for high visibility.",
                            "- Targeted banners on specific category pages (e.g., Fashion, Electronics)",
                            "- Exclusive Support",
                            "- Pop-Up or Carousel Banners",
                            "-Redirect to social media",
                            "- Display contact details"
                        ],
                    },
                ],
            };
        };
    </script>
    <script defer src="{{ asset('js/bundle.js') }}"></script>
</body>

</html>
