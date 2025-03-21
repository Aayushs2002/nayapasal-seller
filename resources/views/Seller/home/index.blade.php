<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>NauloPasal | Sell & Promote Your Business Online</title>

    <meta name="description" content="NauloPasal is the ultimate platform for sellers to advertise and promote their businesses online. Join us to reach more customers and grow your brand." />
    <meta name="keywords" content="NauloPasal, online marketplace, sell online, business promotion, ecommerce, multivendor platform" />
    <meta name="author" content="NauloPasal" />

    <!-- Canonical URL -->
    <link rel="canonical" href="https://seller.naulopasal.com" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('logos/fav.png') }}" />

    <!-- Open Graph (OG) Tags for Social Media -->
    <meta property="og:title" content="NauloPasal | Sell & Promote Your Business Online" />
    <meta property="og:description" content="Join NauloPasal to expand your business reach and connect with more customers. Sell and promote your products online easily." />
    <meta property="og:image" content="https://seller.naulopasal.com/images/seller.png" />
    <meta property="og:url" content="https://seller.naulopasal.com" />
    <meta property="og:type" content="website" />

    <!-- Twitter Card for Twitter Sharing -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="NauloPasal | Sell & Promote Your Business Online" />
    <meta name="twitter:description" content="NauloPasal helps you sell and promote your business online. Reach more customers and grow your brand today!" />
    <meta name="twitter:image" content="https://seller.naulopasal.com/images/seller.png" />

    <!-- CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
</head>



<body x-data="{ page: 'home', 'darkMode': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
$watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" :class="{ 'b eh': darkMode === true }">

    <header class="g s r vd ya cj border-b-2 border-b-[#ff2953]" :class="{ 'hh sm _k dj bl ll': stickyMenu }"
        @scroll.window="stickyMenu = (window.pageYOffset > 20) ? true : false">
        @php
            $link = getOtherSetting();

        @endphp
        <div class="bb ze ki xn 2xl:ud-px-0 oo wf yf i ">
            <div class="vd to/4 tc wf yf">
                <a href="{{route('seller.home')}}">
                    <img style="height:50px ; width: 160px" class=" om" src="{{ asset('logos/newlogo.svg') }}"
                        alt="Logo Light" />
                    <img style="height:50px ; width: 160px" class="xc nm" src="{{ asset('logos/newlogo.svg') }}"
                        alt="Logo Dark" />
                </a>


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


    <script>
        window.addEventListener('load', function() {
          document.getElementById('main-content').classList.add('fade-in');
        });
      </script>

      <style>

        .main-section {
          opacity: 0;
        }

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


        <header
  class="ezy__header3 light py-20 md:py-36 text-black"
  style=""
>
  <div class="px-4 relative">
    <div class="grid grid-cols-12">
      <div class="col-span-12 text-center my-16 animate_left">
        <h2 class="text-3xl leading-none md:text-[50px] font-semibold mb-6">Join Our <span class="text-[#ff2953]">Marketplace </span> Expand Your Business with Ease!</h2>
        <p class="text-[22px] leading-normal opacity-80 px-12 md:px-44 lg:px-64">
            Elevate Your Business Now. Your Products, Our Platform, Let’s Boost Your Sales!
        </p>

        <div class="flex items-center justify-center mt-12">
            <a href="{{ route('seller.register') }}" style="background-color:#ff2953"
            class="ek jk lk gh gi hi rg ml il vc _d _l">Get Started Now</a>
        </div>
        <p class="mt-6"> For any question or concern : <span class="text-[#ff2953]">info@naulopasal.com</span>
           </p>
      </div>
    </div>
  </div>
</header>

        <!-- ===== Hero End ===== -->

        <!-- ===== Small Features Start ===== -->
        <section id="features">
            <div class="bb ze ki yn 2xl:ud-px-12.5">
                <div class="tc uf zo xf ap zf bp mq">
                    <!-- Small Features Item -->
                    <div class="animate_top kn to/3 tc cg oq">
                        <div class="tc wf xf cf ae cd rg mh">
                            <img src={{ asset('image/icon-01.svg') }} alt="Icon" />
                        </div>
                        <div>
                            <h4 class="ek yj go kk wm xb">24/7 Support</h4>
                            <p>Get round-the-clock assistance to keep your business running smoothly.</p>
                        </div>
                    </div>

                    <!-- Small Features Item -->
                    <div class="animate_top kn to/3 tc cg oq">
                        <div class="tc wf xf cf ae cd rg nh">
                            <img src={{ asset('image/icon-02.svg') }} alt="Icon" />
                        </div>
                        <div>
                            <h4 class="ek yj go kk wm xb">Take Ownership</h4>
                            <p>Manage your store your way with full control over your products and pricing.</p>
                        </div>
                    </div>

                    <!-- Small Features Item -->
                    <div class="animate_top kn to/3 tc cg oq">
                        <div class="tc wf xf cf ae cd rg oh">
                            <img src={{ asset('image/icon-03.svg') }} alt="Icon" />
                        </div>
                        <div>
                            <h4 class="ek yj go kk wm xb">Team Work</h4>
                            <p>Partner with us to achieve your business goals together with dedicated support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== Small Features End ===== -->

        <!-- ===== About Start ===== -->
        <section class="ji gp uq 2xl:ud-py-35 pg">
            <div class="bb ze ki xn wq">
                <div class="tc wf gg qq">
                    <!-- About Images -->
                    <div class="animate_left xc gn gg jn/2 i">
                  <img src="{{ asset('image/whyseller.png') }}" >
                    </div>

                    <!-- About Content -->
                    <div id="features" class="animate_right jn/2">
                        <h4 style="color: #ff2953" class="fk vj zp pr kk wm qb ">Why Choose Us</h4>
                        <h2 class=" text-[#023047] text-xl">
                            We Make Our customers happy by giving Best services.
                        </h2>
                        <p class="uo">
                            We go above and beyond to ensure your satisfaction by providing top-notch services tailored
                            to your needs. Our commitment to quality, reliability, and customer care sets us apart,
                            making your experience with us seamless and enjoyable.
                        </p>

                        {{-- <a href="https://www.youtube.com/watch?v=xcJtL7QggTI" data-fslightbox class="vc wf hg mb">
                            <span class="tc wf xf be dd rg i gh ua">
                                <span class="nf h vc yc vd rg gh qk -ud-z-1"></span>
                                <img src={{ asset('image/icon-play.svg') }} alt="Play" />
                            </span>
                            <span class="kk">SEE HOW WE WORK</span>
                        </a> --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== About End ===== -->

        {{-- <!-- ===== Team Start ===== -->
        <section class="i pg ji gp uq">
            <!-- Bg Shapes -->
            <span class="rc h s r vd fd/5 fh rm"></span>
            <img src={{asset("image/shape-08.svg")}} alt="Shape Bg" class="h q r" />
            <img src={{asset("image/shape-09.svg")}} alt="Shape" class="of h y z/2" />
            <img src={{asset("image/shape-10.svg")}} alt="Shape" class="h _ aa" />
            <img src={{asset("image/shape-11.svg")}} alt="Shape" class="of h m ba" />

            <!-- Section Title Start -->
            <div x-data="{ sectionTitle: `Meet With Our Creative Dedicated Team`, sectionTitleText: `Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis tortor eros. Donec vitae tortor lacus. Phasellus aliquam ante in maximus.` }">
                <div class="animate_top bb ze rj ki xn vq">
                    <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b"></h2>
                    <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
                </div>
            </div>
            <!-- Section Title End -->

            <div class="bb ze i va ki xn xq jb jo">
                <div class="wc qf pn xo gg cp">
                    <!-- Team Item -->
                    <div class="animate_top rj">
                        <div class="c i pg z-1">
                            <img class="vd" src={{asset("image/team-01.png")}} alt="Team" />

                            <div class="ef im nl il">
                                <span class="h -ud-left-5 -ud-bottom-21 rc de gd gh if wa"></span>
                                <span class="h s p rc vd hd mh va"></span>
                                <div class="h s p vd ij jj xa">
                                    <ul class="tc xf wf gg">
                                        <li>
                                            <a href="#">
                                                <svg class="uh vl ml il" width="10" height="18"
                                                    viewBox="0 0 10 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.66634 10.25H8.74968L9.58301 6.91669H6.66634V5.25002C6.66634 4.39169 6.66634 3.58335 8.33301 3.58335H9.58301V0.783354C9.31134 0.74752 8.28551 0.666687 7.20218 0.666687C4.93968 0.666687 3.33301 2.04752 3.33301 4.58335V6.91669H0.833008V10.25H3.33301V17.3334H6.66634V10.25Z"
                                                        fill="" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg class="uh vl ml il" width="18" height="14"
                                                    viewBox="0 0 18 14" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17.4683 1.71333C16.8321 1.99475 16.1574 2.17956 15.4666 2.26167C16.1947 1.82619 16.7397 1.14085 16.9999 0.333333C16.3166 0.74 15.5674 1.025 14.7866 1.17917C14.2621 0.617982 13.5669 0.245803 12.809 0.120487C12.0512 -0.00482822 11.2732 0.123742 10.596 0.486211C9.91875 0.848679 9.38024 1.42474 9.06418 2.12483C8.74812 2.82492 8.67221 3.60982 8.84825 4.3575C7.46251 4.28805 6.10686 3.92794 4.86933 3.30055C3.63179 2.67317 2.54003 1.79254 1.66492 0.715833C1.35516 1.24788 1.19238 1.85269 1.19326 2.46833C1.19326 3.67667 1.80826 4.74417 2.74326 5.36917C2.18993 5.35175 1.64878 5.20232 1.16492 4.93333V4.97667C1.16509 5.78142 1.44356 6.56135 1.95313 7.18422C2.46269 7.80709 3.17199 8.23456 3.96075 8.39417C3.4471 8.53337 2.90851 8.55388 2.38576 8.45417C2.60814 9.14686 3.04159 9.75267 3.62541 10.1868C4.20924 10.6209 4.9142 10.8615 5.64159 10.875C4.91866 11.4428 4.0909 11.8625 3.20566 12.1101C2.32041 12.3578 1.39503 12.4285 0.482422 12.3183C2.0755 13.3429 3.93 13.8868 5.82409 13.885C12.2349 13.885 15.7408 8.57417 15.7408 3.96833C15.7408 3.81833 15.7366 3.66667 15.7299 3.51833C16.4123 3.02514 17.0013 2.41418 17.4691 1.71417L17.4683 1.71333Z"
                                                        fill="" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg class="uh vl ml il" width="17" height="16"
                                                    viewBox="0 0 17 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M3.78353 2.16665C3.78331 2.60867 3.6075 3.03251 3.29478 3.34491C2.98207 3.65732 2.55806 3.8327 2.11603 3.83248C1.674 3.83226 1.25017 3.65645 0.937761 3.34373C0.625357 3.03102 0.449975 2.60701 0.450196 2.16498C0.450417 1.72295 0.626223 1.29912 0.93894 0.986712C1.25166 0.674307 1.67567 0.498925 2.1177 0.499146C2.55972 0.499367 2.98356 0.675173 3.29596 0.98789C3.60837 1.30061 3.78375 1.72462 3.78353 2.16665V2.16665ZM3.83353 5.06665H0.500195V15.5H3.83353V5.06665ZM9.1002 5.06665H5.78353V15.5H9.06686V10.025C9.06686 6.97498 13.0419 6.69165 13.0419 10.025V15.5H16.3335V8.89165C16.3335 3.74998 10.4502 3.94165 9.06686 6.46665L9.1002 5.06665V5.06665Z"
                                                        fill="" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <h4 class="yj go kk wm ob zb">Olivia Andrium</h4>
                        <p>Product Manager</p>
                    </div>

                    <!-- Team Item -->
                    <div class="animate_top rj">
                        <div class="c i pg z-1">
                            <img class="vd" src={{asset("image/team-02.png")}} alt="Team" />

                            <div class="ef im nl il">
                                <span class="h -ud-left-5 -ud-bottom-21 rc de gd gh if wa"></span>
                                <span class="h s p rc vd hd mh va"></span>
                                <div class="h s p vd ij jj xa">
                                    <ul class="tc xf wf gg">
                                        <li>
                                            <a href="#">
                                                <svg class="uh vl ml il" width="10" height="18"
                                                    viewBox="0 0 10 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.66634 10.25H8.74968L9.58301 6.91669H6.66634V5.25002C6.66634 4.39169 6.66634 3.58335 8.33301 3.58335H9.58301V0.783354C9.31134 0.74752 8.28551 0.666687 7.20218 0.666687C4.93968 0.666687 3.33301 2.04752 3.33301 4.58335V6.91669H0.833008V10.25H3.33301V17.3334H6.66634V10.25Z"
                                                        fill="" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg class="uh vl ml il" width="18" height="14"
                                                    viewBox="0 0 18 14" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17.4683 1.71333C16.8321 1.99475 16.1574 2.17956 15.4666 2.26167C16.1947 1.82619 16.7397 1.14085 16.9999 0.333333C16.3166 0.74 15.5674 1.025 14.7866 1.17917C14.2621 0.617982 13.5669 0.245803 12.809 0.120487C12.0512 -0.00482822 11.2732 0.123742 10.596 0.486211C9.91875 0.848679 9.38024 1.42474 9.06418 2.12483C8.74812 2.82492 8.67221 3.60982 8.84825 4.3575C7.46251 4.28805 6.10686 3.92794 4.86933 3.30055C3.63179 2.67317 2.54003 1.79254 1.66492 0.715833C1.35516 1.24788 1.19238 1.85269 1.19326 2.46833C1.19326 3.67667 1.80826 4.74417 2.74326 5.36917C2.18993 5.35175 1.64878 5.20232 1.16492 4.93333V4.97667C1.16509 5.78142 1.44356 6.56135 1.95313 7.18422C2.46269 7.80709 3.17199 8.23456 3.96075 8.39417C3.4471 8.53337 2.90851 8.55388 2.38576 8.45417C2.60814 9.14686 3.04159 9.75267 3.62541 10.1868C4.20924 10.6209 4.9142 10.8615 5.64159 10.875C4.91866 11.4428 4.0909 11.8625 3.20566 12.1101C2.32041 12.3578 1.39503 12.4285 0.482422 12.3183C2.0755 13.3429 3.93 13.8868 5.82409 13.885C12.2349 13.885 15.7408 8.57417 15.7408 3.96833C15.7408 3.81833 15.7366 3.66667 15.7299 3.51833C16.4123 3.02514 17.0013 2.41418 17.4691 1.71417L17.4683 1.71333Z"
                                                        fill="" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg class="uh vl ml il" width="17" height="16"
                                                    viewBox="0 0 17 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M3.78353 2.16665C3.78331 2.60867 3.6075 3.03251 3.29478 3.34491C2.98207 3.65732 2.55806 3.8327 2.11603 3.83248C1.674 3.83226 1.25017 3.65645 0.937761 3.34373C0.625357 3.03102 0.449975 2.60701 0.450196 2.16498C0.450417 1.72295 0.626223 1.29912 0.93894 0.986712C1.25166 0.674307 1.67567 0.498925 2.1177 0.499146C2.55972 0.499367 2.98356 0.675173 3.29596 0.98789C3.60837 1.30061 3.78375 1.72462 3.78353 2.16665V2.16665ZM3.83353 5.06665H0.500195V15.5H3.83353V5.06665ZM9.1002 5.06665H5.78353V15.5H9.06686V10.025C9.06686 6.97498 13.0419 6.69165 13.0419 10.025V15.5H16.3335V8.89165C16.3335 3.74998 10.4502 3.94165 9.06686 6.46665L9.1002 5.06665V5.06665Z"
                                                        fill="" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <h4 class="yj go kk wm ob zb">Jemse Kemorun</h4>
                        <p>Product Designer</p>
                    </div>

                    <!-- Team Item -->
                    <div class="animate_top rj">
                        <div class="c i pg z-1">
                            <img class="vd" src={{asset("image/team-03.png")}} alt="Team" />

                            <div class="ef im nl il">
                                <span class="h -ud-left-5 -ud-bottom-21 rc de gd gh if wa"></span>
                                <span class="h s p rc vd hd mh va"></span>
                                <div class="h s p vd ij jj xa">
                                    <ul class="tc xf wf gg">
                                        <li>
                                            <a href="#">
                                                <svg class="uh vl ml il" width="10" height="18"
                                                    viewBox="0 0 10 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.66634 10.25H8.74968L9.58301 6.91669H6.66634V5.25002C6.66634 4.39169 6.66634 3.58335 8.33301 3.58335H9.58301V0.783354C9.31134 0.74752 8.28551 0.666687 7.20218 0.666687C4.93968 0.666687 3.33301 2.04752 3.33301 4.58335V6.91669H0.833008V10.25H3.33301V17.3334H6.66634V10.25Z"
                                                        fill="" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg class="uh vl ml il" width="18" height="14"
                                                    viewBox="0 0 18 14" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17.4683 1.71333C16.8321 1.99475 16.1574 2.17956 15.4666 2.26167C16.1947 1.82619 16.7397 1.14085 16.9999 0.333333C16.3166 0.74 15.5674 1.025 14.7866 1.17917C14.2621 0.617982 13.5669 0.245803 12.809 0.120487C12.0512 -0.00482822 11.2732 0.123742 10.596 0.486211C9.91875 0.848679 9.38024 1.42474 9.06418 2.12483C8.74812 2.82492 8.67221 3.60982 8.84825 4.3575C7.46251 4.28805 6.10686 3.92794 4.86933 3.30055C3.63179 2.67317 2.54003 1.79254 1.66492 0.715833C1.35516 1.24788 1.19238 1.85269 1.19326 2.46833C1.19326 3.67667 1.80826 4.74417 2.74326 5.36917C2.18993 5.35175 1.64878 5.20232 1.16492 4.93333V4.97667C1.16509 5.78142 1.44356 6.56135 1.95313 7.18422C2.46269 7.80709 3.17199 8.23456 3.96075 8.39417C3.4471 8.53337 2.90851 8.55388 2.38576 8.45417C2.60814 9.14686 3.04159 9.75267 3.62541 10.1868C4.20924 10.6209 4.9142 10.8615 5.64159 10.875C4.91866 11.4428 4.0909 11.8625 3.20566 12.1101C2.32041 12.3578 1.39503 12.4285 0.482422 12.3183C2.0755 13.3429 3.93 13.8868 5.82409 13.885C12.2349 13.885 15.7408 8.57417 15.7408 3.96833C15.7408 3.81833 15.7366 3.66667 15.7299 3.51833C16.4123 3.02514 17.0013 2.41418 17.4691 1.71417L17.4683 1.71333Z"
                                                        fill="" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg class="uh vl ml il" width="17" height="16"
                                                    viewBox="0 0 17 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M3.78353 2.16665C3.78331 2.60867 3.6075 3.03251 3.29478 3.34491C2.98207 3.65732 2.55806 3.8327 2.11603 3.83248C1.674 3.83226 1.25017 3.65645 0.937761 3.34373C0.625357 3.03102 0.449975 2.60701 0.450196 2.16498C0.450417 1.72295 0.626223 1.29912 0.93894 0.986712C1.25166 0.674307 1.67567 0.498925 2.1177 0.499146C2.55972 0.499367 2.98356 0.675173 3.29596 0.98789C3.60837 1.30061 3.78375 1.72462 3.78353 2.16665V2.16665ZM3.83353 5.06665H0.500195V15.5H3.83353V5.06665ZM9.1002 5.06665H5.78353V15.5H9.06686V10.025C9.06686 6.97498 13.0419 6.69165 13.0419 10.025V15.5H16.3335V8.89165C16.3335 3.74998 10.4502 3.94165 9.06686 6.46665L9.1002 5.06665V5.06665Z"
                                                        fill="" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <h4 class="yj go kk wm ob zb">Avi Pestarica</h4>
                        <p>Web Designer</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== Team End ===== --> --}}

        <!-- ===== Services Start ===== -->
        <section id="service" class="lj tp kr">
            <!-- Section Title Start -->
            <div x-data="{ sectionTitle: `We Offer The Best Quality Service for You`, sectionTitleText: `Our platform offers top-notch support and tools to help you succeed. Streamline your sales and reach more customers with ease.` }">
                <div class="animate_top bb ze rj ki xn vq">
                    <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b"></h2>
                    <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
                </div>
            </div>
            <!-- Section Title End -->

            <div class="bb ze ki xn yq mb en">
                <div class="wc qf pn xo ng">
                    <!-- Service Item -->
                    <div class="animate_top sg oi pi zq ml il am cn _m">
                        <img src={{ asset('image/icon-04.svg') }} alt="Icon" />
                        <h4 class="ek zj kk wm nb _b">Reach
                        </h4>
                        <p>
                            Grow your business, reach a wide audience and enhance your brand.
                        </p>
                    </div>

                    <!-- Service Item -->
                    <div class="animate_top sg oi pi zq ml il am cn _m">
                        <img src={{ asset('image/icon-05.svg') }} alt="Icon" />
                        <h4 class="ek zj kk wm nb _b">Free Registration
                        </h4>
                        <p>
                            Create an account and list your products for free—start selling without any fees!








                        </p>
                    </div>

                    <!-- Service Item -->
                    <div class="animate_top sg oi pi zq ml il am cn _m">
                        <img src={{ asset('image/icon-06.svg') }} alt="Icon" />
                        <h4 class="ek zj kk wm nb _b">Reliable Shipping
                        </h4>
                        <p>
                            Enjoy fast, dependable, and hassle-free delivery with our Naulo logistic network.

                        </p>
                    </div>

                    <!-- Service Item -->
                    <div class="animate_top sg oi pi zq ml il am cn _m">
                        <img src={{ asset('image/icon-07.svg') }} alt="Icon" />
                        <h4 class="ek zj kk wm nb _b">Timely Payments
                        </h4>
                        <p>
                            Funds are securely deposited directly into your bank account every week.


                        </p>
                    </div>

                    <!-- Service Item -->
                    <div class="animate_top sg oi pi zq ml il am cn _m">
                        <img src={{ asset('image/icon-05.svg') }} alt="Icon" />
                        <h4 class="ek zj kk wm nb _b">Marketing Tools
                        </h4>
                        <p>
                            Attract new customers with our comprehensive advertising.







                        </p>
                    </div>

                    <!-- Service Item -->
                    <div class="animate_top sg oi pi zq ml il am cn _m">
                        <img src={{ asset('image/icon-06.svg') }} alt="Icon" />
                        <h4 class="ek zj kk wm nb _b">Support & Training
                        </h4>
                        <p>
                            Receive dedicated support through our Seller Support and Naulopasal.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== Services End ===== -->

        <!-- ===== Pricing Table Start ===== -->
        <section id="advertising" x-data="setup()" class="i pg fh rm ji gp uq">
            <!-- Bg Shapes -->
            <img src={{ asset('image/shape-06.svg') }} alt="Shape" class="h aa y" />
            <img src={{ asset('image/shape-03.svg') }} alt="Shape" class="h ca u" />
            <img src={{ asset('image/shape-07.svg') }} alt="Shape" class="h w da ee" />
            <img src={{ asset('image/shape-12.svg') }} alt="Shape" class="h p s" />
            <img src={{ asset('image/shape-13.svg') }} alt="Shape" class="h r q" />

            <!-- Section Title Start -->
            <div x-data="{ sectionTitle: `We Offer Great Affordable Premium Advertising.`, sectionTitleText: `Achieve maximum exposure with our competitively priced premium advertising options. Boost your brand and reach more customers while staying within your budget.` }">
                <div class="animate_top bb ze rj ki xn vq">
                    <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b"></h2>
                    <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
                </div>
            </div>
            <!-- Section Title End -->

            <!-- Pricing switcher -->
            {{-- <div class="tc wf xf jb og">
                <span class="ek kk wm">Bill Monthly</span>
                <button class="i rg gm" x-cloak
                    @click="billPlan == 'monthly' ? billPlan = 'annually' : billPlan = 'monthly'">
                    <div class="fe id bl gh rg xk outline-none"></div>
                    <div class="h vc wf xf ge jd cl jl ml mf hh rg yk ea fa"
                        :class="{ 'ff': billPlan == 'monthly', 'gf': billPlan == 'annually' }"></div>
                </button>
                <span class="ek kk wm">Bill Annually</span>
            </div> --}}

            <!-- Pricing Table -->
            <div class="bb ze i va ki xn yq bc">
                <div class="wc qf pn xo jg">
                    <template x-for="(plan, i) in plans" x-key="i">
                        <!-- Pricing Item -->
                        <div class="animate_top rj sg hh sm vk xm hi nj oj">
                            <h4 x-text="plan.name" class="wj kk wm fb"></h4>

                            <div class="tc wf xf kg cc">
                                <h2 :class="plan.name == 'Basic' ? 'text-green-500' : ''"
                                    x-text="`Rs ${billPlan == 'monthly' ? plan.price.monthly : plan.price.annually}`"
                                    class="fk _j kk wm"></h2>
                                <span x-text="billPlan == 'monthly' ? '' : '/per year'"
                                    class="sc ak kk wm"></span>
                            </div>

                            <p class="ur dc">No credit card required</p>



                            <!-- Features -->
                            <ul class="tc sf bg ob fb">
                                <template x-for="(feature, i) in plan.features" x-key="i">
                                    <li x-text="feature"></li>
                                </template>
                            </ul>
    <!-- Button -->
    <a href="#" class="bg-[#ff2953] p-1 px-2 rounded-md text-white border border-[#ff2953]
    transition duration-300 ease-in-out
    hover:text-[#ff2953] hover:bg-white
    transform hover:scale-105 hover:shadow-lg">

    Buy Now
</a>

                        </div>
                    </template>
                </div>
            </div>
        </section>
        <!-- ===== Pricing Table End ===== -->

        <!-- ===== Projects Start ===== -->
        {{-- <section class="pg pj vp mr oj wp nr">
            <!-- Section Title Start -->
            <div x-data="{ sectionTitle: `We Offer Great Affordable Premium Prices.`, sectionTitleText: `It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.` }">
                <div class="animate_top bb ze rj ki xn vq">
                    <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b"></h2>
                    <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
                </div>
            </div>
            <!-- Section Title End -->

            <div class="bb ze ki xn 2xl:ud-px-0 jb" x-data="{ filterTab: 1 }">
                <!-- Porject Tab -->
                <div class="projects-tab _e bb tc uf wf xf cg rg hh rm vk xm si ti fc">
                    <button data-filter="*" @click="filterTab = 1" :class="{ 'gh lk': filterTab === 1 }"
                        class="project-tab-btn ek rg ml il vi mi">
                        All
                    </button>
                    <button data-filter=".branding" @click="filterTab = 2" :class="{ 'gh lk': filterTab === 2 }"
                        class="project-tab-btn ek rg ml il vi mi">
                        Branding Strategy
                    </button>
                    <button data-filter=".digital" @click="filterTab = 3" :class="{ 'gh lk': filterTab === 3 }"
                        class="project-tab-btn ek rg ml il vi mi">
                        Digital Experiences
                    </button>
                    <button data-filter=".ecommerce" @click="filterTab = 4" :class="{ 'gh lk': filterTab === 4 }"
                        class="project-tab-btn ek rg ml il vi mi">
                        Ecommerce
                    </button>
                </div>

                <!-- Projects item wrapper -->
                <div class="projects-wrapper tc -ud-mx-5">
                    <div class="project-sizer"></div>
                    <!-- Project Item -->
                    <div class="project-item wi fb vd jn/2 to/3 branding ecommerce">
                        <div class="c i pg sg z-1">
                            <img src={{asset("image/project-01.png")}} alt="Project" />

                            <div class="h s r df nl kl im tc sf wf xf vd yc sg al hh/20 z-10">
                                <h4 class="ek tj kk hc">Photo Retouching</h4>
                                <p>Branded Ecommerce</p>
                                <a class="c tc wf xf ie ld rg _g dh ml il ph jm km jc" href="#">
                                    <svg class="th lm ml il" width="14" height="14" viewBox="0 0 14 14"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Project Item -->
                    <div class="project-item wi fb vd jn/2 to/3 digital">
                        <div class="c i pg sg z-1">
                            <img src={{asset("image/project-02.png")}} alt="Project" />

                            <div class="h s r df nl kl im tc sf wf xf vd yc sg al hh/20 z-10">
                                <h4 class="ek tj kk hc">Photo Retouching</h4>
                                <p>Branded Ecommerce</p>
                                <a class="c tc wf xf ie ld rg _g dh ml il ph jm km jc" href="#">
                                    <svg class="th lm ml il" width="14" height="14" viewBox="0 0 14 14"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Project Item -->
                    <div class="project-item wi fb vd jn/2 to/3 branding ecommerce">
                        <div class="c i pg sg z-1">
                            <img src={{asset("image/project-04.png")}} alt="Project" />

                            <div class="h s r df nl kl im tc sf wf xf vd yc sg al hh/20 z-10">
                                <h4 class="ek tj kk hc">Photo Retouching</h4>
                                <p>Branded Ecommerce</p>
                                <a class="c tc wf xf ie ld rg _g dh ml il ph jm km jc" href="#">
                                    <svg class="th lm ml il" width="14" height="14" viewBox="0 0 14 14"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Project Item -->
                    <div class="project-item wi fb vd vo/3 digital ecommerce">
                        <div class="c i pg sg z-1">
                            <img src={{asset("image/project-03.png")}} alt="Project" />

                            <div class="h s r df nl kl im tc sf wf xf vd yc sg al hh/20 z-10">
                                <h4 class="ek tj kk hc">Photo Retouching</h4>
                                <p>Branded Ecommerce</p>
                                <a class="c tc wf xf ie ld rg _g dh ml il ph jm km jc" href="#">
                                    <svg class="th lm ml il" width="14" height="14" viewBox="0 0 14 14"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- ===== Projects End ===== -->

        <!-- ===== Testimonials Start ===== -->
        {{-- <section class="hj rp hr">
            <!-- Section Title Start -->
            <div x-data="{ sectionTitle: `Client’s Testimonials`, sectionTitleText: `It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.` }">
                <div class="animate_top bb ze rj ki xn vq">
                    <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b"></h2>
                    <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
                </div>
            </div>
            <!-- Section Title End -->

            <div class="bb ze ki xn ar">
                <div class="animate_top jb cq">
                    <!-- Slider main container -->
                    <div class="swiper testimonial-01">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="i hh rm sg vk xm bi qj">
                                    <!-- Border Shape -->
                                    <span class="rc je md/2 gh xg h q r"></span>
                                    <span class="rc je md/2 mh yg h q p"></span>

                                    <div class="tc sf rn tn un zf dp">
                                        <img class="bf" src={{asset("image/testimonial.png" )}} alt="User" />

                                        <div>
                                            <img src={{asset("image/icon-quote.svg")}} alt="Quote" />
                                            <p class="ek ik xj _p kc fb">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. In dolor diam, feugiat quis enim sed,
                                                ullamcorper semper ligula. Mauris consequat justo
                                                volutpat.
                                            </p>

                                            <div class="tc yf vf">
                                                <div>
                                                    <span class="rc ek xj kk wm zb">Devid Smith</span>
                                                    <span class="rc">Founter @democompany</span>
                                                </div>

                                                <img class="rk" src={{asset("image/brand-light-02.svg")}} alt="Brand" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- If we need navigation -->
                        <div class="tc wf xf fg jb">
                            <div class="swiper-button-prev c tc wf xf ie ld rg _g dh pf ml vr hh rm tl zm rl ym">
                                <svg class="th lm" width="14" height="14" viewBox="0 0 14 14"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.52366 7.83336L7.99366 12.3034L6.81533 13.4817L0.333663 7.00002L6.81533 0.518357L7.99366 1.69669L3.52366 6.16669L13.667 6.16669L13.667 7.83336L3.52366 7.83336Z"
                                        fill="" />
                                </svg>
                            </div>
                            <div class="swiper-button-next c tc wf xf ie ld rg _g dh pf ml vr hh rm tl zm rl ym">
                                <svg class="th lm" width="14" height="14" viewBox="0 0 14 14"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z"
                                        fill="" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- ===== Testimonials End ===== -->

        <!-- ===== Counter Start ===== -->
        <div class="max-w-6xl mx-auto font-[sans-serif] mt-5 max-md:px-5">
            <h2 class="text-gray-800 sm:text-4xl text-2xl font-extrabold text-center mb-16"> 6 Simple Steps to Start Selling

            </h2>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-12">
              <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#007bff" class="w-8 mb-6 inline-block" viewBox="0 0 32 32">
                  <path d="M28.068 12h-.128a.934.934 0 0 1-.864-.6.924.924 0 0 1 .2-1.01l.091-.091a2.938 2.938 0 0 0 0-4.147l-1.511-1.51a2.935 2.935 0 0 0-4.146 0l-.091.091A.956.956 0 0 1 20 4.061v-.129A2.935 2.935 0 0 0 17.068 1h-2.136A2.935 2.935 0 0 0 12 3.932v.129a.956.956 0 0 1-1.614.668l-.086-.091a2.935 2.935 0 0 0-4.146 0l-1.516 1.51a2.938 2.938 0 0 0 0 4.147l.091.091a.935.935 0 0 1 .185 1.035.924.924 0 0 1-.854.579h-.128A2.935 2.935 0 0 0 1 14.932v2.136A2.935 2.935 0 0 0 3.932 20h.128a.934.934 0 0 1 .864.6.924.924 0 0 1-.2 1.01l-.091.091a2.938 2.938 0 0 0 0 4.147l1.51 1.509a2.934 2.934 0 0 0 4.147 0l.091-.091a.936.936 0 0 1 1.035-.185.922.922 0 0 1 .579.853v.129A2.935 2.935 0 0 0 14.932 31h2.136A2.935 2.935 0 0 0 20 28.068v-.129a.956.956 0 0 1 1.614-.668l.091.091a2.935 2.935 0 0 0 4.146 0l1.511-1.509a2.938 2.938 0 0 0 0-4.147l-.091-.091a.935.935 0 0 1-.185-1.035.924.924 0 0 1 .854-.58h.128A2.935 2.935 0 0 0 31 17.068v-2.136A2.935 2.935 0 0 0 28.068 12ZM29 17.068a.933.933 0 0 1-.932.932h-.128a2.956 2.956 0 0 0-2.083 5.028l.09.091a.934.934 0 0 1 0 1.319l-1.511 1.509a.932.932 0 0 1-1.318 0l-.09-.091A2.957 2.957 0 0 0 18 27.939v.129a.933.933 0 0 1-.932.932h-2.136a.933.933 0 0 1-.932-.932v-.129a2.951 2.951 0 0 0-5.028-2.082l-.091.091a.934.934 0 0 1-1.318 0l-1.51-1.509a.934.934 0 0 1 0-1.319l.091-.091A2.956 2.956 0 0 0 4.06 18h-.128A.933.933 0 0 1 3 17.068v-2.136A.933.933 0 0 1 3.932 14h.128a2.956 2.956 0 0 0 2.083-5.028l-.09-.091a.933.933 0 0 1 0-1.318l1.51-1.511a.932.932 0 0 1 1.318 0l.09.091A2.957 2.957 0 0 0 14 4.061v-.129A.933.933 0 0 1 14.932 3h2.136a.933.933 0 0 1 .932.932v.129a2.956 2.956 0 0 0 5.028 2.082l.091-.091a.932.932 0 0 1 1.318 0l1.51 1.511a.933.933 0 0 1 0 1.318l-.091.091A2.956 2.956 0 0 0 27.94 14h.128a.933.933 0 0 1 .932.932Z" data-original="#000000" />
                  <path d="M16 9a7 7 0 1 0 7 7 7.008 7.008 0 0 0-7-7Zm0 12a5 5 0 1 1 5-5 5.006 5.006 0 0 1-5 5Z" data-original="#000000" />
                </svg>
                <h3 class="text-gray-800 text-xl font-semibold mb-3">Sign Up and Create an Account:</h3>
                <p class="text-gray-600 text-sm">Register on the platform with your basic details to create your seller account.</p>
              </div>

              <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#007bff" class="w-8 mb-6 inline-block" viewBox="0 0 682.667 682.667">
                  <defs>
                    <clipPath id="a" clipPathUnits="userSpaceOnUse">
                      <path d="M0 512h512V0H0Z" data-original="#000000" />
                    </clipPath>
                  </defs>
                  <g fill="none" stroke="#007bff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="40" clip-path="url(#a)" transform="matrix(1.33 0 0 -1.33 0 682.667)">
                    <path d="M256 492 60 410.623v-98.925C60 183.674 137.469 68.38 256 20c118.53 48.38 196 163.674 196 291.698v98.925z" data-original="#000000" />
                    <path d="M178 271.894 233.894 216 334 316.105" data-original="#000000" />
                  </g>
                </svg>
                <h3 class="text-gray-800 text-xl font-semibold mb-3">Set Up Your Seller Profile</h3>
                <p class="text-gray-600 text-sm">Complete your profile with business information and branding.</p>
              </div>

              <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#007bff" class="w-8 mb-6 inline-block" viewBox="0 0 512.001 512.001">
                  <path d="M271.029 0c-33.091 0-61 27.909-61 61s27.909 61 61 61 60-27.909 60-61-26.909-61-60-61zm66.592 122c-16.485 18.279-40.096 30-66.592 30-26.496 0-51.107-11.721-67.592-30-14.392 15.959-23.408 36.866-23.408 60v15c0 8.291 6.709 15 15 15h151c8.291 0 15-6.709 15-15v-15c0-23.134-9.016-44.041-23.408-60zM144.946 460.404 68.505 307.149c-7.381-14.799-25.345-20.834-40.162-13.493l-19.979 9.897c-7.439 3.689-10.466 12.73-6.753 20.156l90 180c3.701 7.423 12.704 10.377 20.083 6.738l19.722-9.771c14.875-7.368 20.938-25.417 13.53-40.272zM499.73 247.7c-12.301-9-29.401-7.2-39.6 3.9l-82 100.8c-5.7 6-16.5 9.6-22.2 9.6h-69.901c-8.401 0-15-6.599-15-15s6.599-15 15-15h60c16.5 0 30-13.5 30-30s-13.5-30-30-30h-78.6c-7.476 0-11.204-4.741-17.1-9.901-23.209-20.885-57.949-30.947-93.119-22.795-19.528 4.526-32.697 12.415-46.053 22.993l-.445-.361-21.696 19.094L174.28 452h171.749c28.2 0 55.201-13.5 72.001-36l87.999-126c9.9-13.201 7.2-32.399-6.299-42.3z" data-original="#000000" />
                </svg>
                <h3 class="text-gray-800 text-xl font-semibold mb-3">Add Your Products</h3>
                <p class="text-gray-600 text-sm">List your products with images, descriptions, and prices to attract and inform potential buyers..</p>
              </div>

              <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#007bff" class="w-8 mb-6 inline-block" viewBox="0 0 24 24">
                  <g fill-rule="evenodd" clip-rule="evenodd">
                    <path d="M17.03 8.97a.75.75 0 0 1 0 1.06l-4.2 4.2a.75.75 0 0 1-1.154-.114l-1.093-1.639L8.03 15.03a.75.75 0 0 1-1.06-1.06l3.2-3.2a.75.75 0 0 1 1.154.114l1.093 1.639L15.97 8.97a.75.75 0 0 1 1.06 0z" data-original="#000000" />
                    <path d="M13.75 9.5a.75.75 0 0 1 .75-.75h2a.75.75 0 0 1 .75.75v2a.75.75 0 0 1-1.5 0v-1.25H14.5a.75.75 0 0 1-.75-.75z" data-original="#000000" />
                    <path d="M3.095 3.095C4.429 1.76 6.426 1.25 9 1.25h6c2.574 0 4.57.51 5.905 1.845C22.24 4.429 22.75 6.426 22.75 9v6c0 2.574-.51 4.57-1.845 5.905C19.571 22.24 17.574 22.75 15 22.75H9c-2.574 0-4.57-.51-5.905-1.845C1.76 19.571 1.25 17.574 1.25 15V9c0-2.574.51-4.57 1.845-5.905zm1.06 1.06C3.24 5.071 2.75 6.574 2.75 9v6c0 2.426.49 3.93 1.405 4.845.916.915 2.419 1.405 4.845 1.405h6c2.426 0 3.93-.49 4.845-1.405.915-.916 1.405-2.419 1.405-4.845V9c0-2.426-.49-3.93-1.405-4.845C18.929 3.24 17.426 2.75 15 2.75H9c-2.426 0-3.93.49-4.845 1.405z" data-original="#000000" />
                  </g>
                </svg>
                <h3 class="text-gray-800 text-xl font-semibold mb-3">Configure Payment and Shipping</h3>
                <p class="text-gray-600 text-sm">Set up payment methods and shipping options to ensure seamless transactions.</p>
              </div>

              <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#007bff" class="w-8 mb-6 inline-block" viewBox="0 0 504.69 504.69">
                  <path d="M252.343 262.673c-49.32 0-89.447-40.127-89.447-89.447s40.127-89.447 89.447-89.447 89.447 40.127 89.447 89.447-40.121 89.447-89.447 89.447zm0-158.235c-37.926 0-68.787 30.861-68.787 68.787s30.861 68.787 68.787 68.787 68.787-30.861 68.787-68.787-30.855-68.787-68.787-68.787z" data-original="#000000" />
                  <path d="M391.787 405.309c-5.645 0-10.253-4.54-10.325-10.201-.883-70.306-58.819-127.503-129.15-127.503-49.264 0-93.543 27.405-115.561 71.52-8.724 17.473-13.269 36.31-13.517 55.988-.072 5.702-4.757 10.273-10.459 10.201s-10.273-4.757-10.201-10.459c.289-22.814 5.568-44.667 15.691-64.955 25.541-51.164 76.907-82.95 134.047-82.95 81.581 0 148.788 66.349 149.81 147.905.072 5.702-4.494 10.392-10.201 10.459-.046-.005-.087-.005-.134-.005z" data-original="#000000" />
                  <path d="M252.343 463.751c-116.569 0-211.408-94.834-211.408-211.408 0-116.569 94.839-211.408 211.408-211.408 116.574 0 211.408 94.839 211.408 211.408 0 116.574-94.834 211.408-211.408 211.408zm0-402.156c-105.18 0-190.748 85.568-190.748 190.748s85.568 190.748 190.748 190.748 190.748-85.568 190.748-190.748S357.523 61.595 252.343 61.595zM71.827 90.07 14.356 32.599c-4.034-4.034-4.034-10.573 0-14.607 4.029-4.034 10.573-4.034 14.607 0l57.466 57.471c4.034 4.034 3.951 10.49 0 14.607-3.792 3.951-11.039 3.698-14.602 0z" data-original="#000000" />
                  <path d="M14.717 92.254a10.332 10.332 0 0 1-10.299-9.653L.023 15.751a10.317 10.317 0 0 1 2.929-7.908 10.2 10.2 0 0 1 7.851-3.089L77.56 7.796c5.697.258 10.108 5.093 9.85 10.79s-5.041 10.154-10.79 9.85l-55.224-2.521 3.641 55.327c.377 5.692-3.936 10.614-9.628 10.986a7.745 7.745 0 0 1-.692.026zm403.541-2.184c-4.256-3.796-4.034-10.573 0-14.607l58.116-58.116c4.034-4.034 10.573-4.034 14.607 0s4.034 10.573 0 14.607L432.864 90.07c-4.085 3.951-9.338 4.7-14.606 0z" data-original="#000000" />
                  <path d="M489.974 92.254a9.85 9.85 0 0 1-.687-.021c-5.697-.372-10.01-5.294-9.633-10.986l3.641-55.327-55.224 2.515c-5.511.238-10.526-4.147-10.79-9.85-.258-5.702 4.153-10.531 9.85-10.79l66.757-3.042c2.934-.134 5.79.992 7.851 3.089s3.12 4.974 2.929 7.908l-4.401 66.85c-.361 5.465-4.896 9.654-10.293 9.654zM11.711 489.339c-3.791-4.266-4.034-10.573 0-14.607l60.115-60.11c4.029-4.034 10.578-4.034 14.607 0 4.034 4.034 4.034 10.573 0 14.607l-60.115 60.11c-3.827 3.884-11.156 3.884-14.607 0z" data-original="#000000" />
                  <path d="M10.327 499.947a10.33 10.33 0 0 1-7.376-3.104 10.312 10.312 0 0 1-2.929-7.902l4.401-66.85c.372-5.697 5.191-10.036 10.986-9.633 5.692.377 10.005 5.294 9.628 10.986l-3.641 55.332 55.224-2.515c5.645-.191 10.531 4.153 10.79 9.85.258 5.697-4.153 10.526-9.85 10.79l-66.763 3.037c-.155.004-.31.009-.47.009zm465.639-13.01-57.708-57.708c-4.034-4.034-4.034-10.573 0-14.607s10.573-4.034 14.607 0l57.708 57.708c4.034 4.034 3.962 10.5 0 14.607-3.817 3.951-10.062 3.951-14.607 0z" data-original="#000000" />
                  <path d="M494.359 499.947c-.155 0-.315-.005-.47-.01l-66.757-3.042c-5.702-.263-10.108-5.088-9.85-10.79.263-5.702 5.113-9.984 10.79-9.85l55.219 2.515-3.641-55.332c-.372-5.692 3.941-10.609 9.633-10.986 5.625-.398 10.609 3.946 10.986 9.633l4.401 66.85a10.33 10.33 0 0 1-2.929 7.902 10.323 10.323 0 0 1-7.382 3.11z" data-original="#000000" />
                </svg>
                <h3 class="text-gray-800 text-xl font-semibold mb-3">Promote Your Store</h3>
                <p class="text-gray-600 text-sm">Use marketing tools to drive traffic and attract customers.</p>
              </div>

              <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#007bff" class="w-8 mb-6 inline-block" viewBox="0 0 682.667 682.667">
                  <defs>
                    <clipPath id="a" clipPathUnits="userSpaceOnUse">
                      <path d="M0 512h512V0H0Z" data-original="#000000" />
                    </clipPath>
                  </defs>
                  <g fill="none" stroke="#007bff" stroke-miterlimit="10" stroke-width="30" clip-path="url(#a)" transform="matrix(1.33 0 0 -1.33 0 682.667)">
                    <path d="M226 15v60c0 16.568-13.432 30-30 30H76c-16.568 0-30-13.432-30-30V15Zm-45 165c0-24.853-20.147-45-45-45s-45 20.147-45 45 20.147 45 45 45 45-20.147 45-45ZM466 15v60c0 16.568-13.432 30-30 30H316c-16.568 0-30-13.432-30-30V15Zm-45 165c0-24.853-20.147-45-45-45s-45 20.147-45 45 20.147 45 45 45 45-20.147 45-45Zm-75 167v-50.294L286 347h-60.002L166 296.706V347h-15c-41.421 0-75 33.579-75 75s33.579 75 75 75h210c41.421 0 75-33.579 75-75s-33.579-75-75-75Zm-105 75h30m-90 0h30m90 0h30" data-original="#000000" />
                  </g>
                </svg>
                <h3 class="text-gray-800 text-xl font-semibold mb-3">Monitor and Optimize Performance</h3>
                <p class="text-gray-600 text-sm">Track performance and adjust strategies based on analytics and feedback.</p>
              </div>
            </div>
          </div>
          <script src="https://cdn.tailwindcss.com"></script>

        <!-- ===== Counter End ===== -->

        <!-- ===== Clients Start ===== -->
        {{-- <section class="pj vp mr">
            <!-- Section Title Start -->
            <div x-data="{ sectionTitle: `Trusted by Global Brands`, sectionTitleText: `It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.` }">
                <div class="animate_top bb ze rj ki xn vq">
                    <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b"></h2>
                    <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
                </div>
            </div>
            <!-- Section Title End -->

            <div class="bb ze ah ch pm hj xp ki xn 2xl:ud-px-49 bc">
                <div class="wc rf qn zf cp kq xf wf">
                    <a href="#" class="rc animate_top">
                        <img class="th wl ml il zl om" src={{asset("image/brand-light-01.svg")}} alt="Clients" />
                        <img class="xc sk ml il zl nm" src={{asset("image/brand-dark-01.svg")}} alt="Clients" />
                    </a>
                    <a href="#" class="rc animate_top">
                        <img class="tk ml il zl om" src={{asset("image/brand-light-02.svg")}} alt="Clients" />
                        <img class="xc sk ml il zl nm" src={{asset("image/brand-dark-02.svg")}} alt="Clients" />
                    </a>
                    <a href="#" class="rc animate_top">
                        <img class="tk ml il zl om" src={{asset("image/brand-light-03.svg")}} alt="Clients" />
                        <img class="xc sk ml il zl nm" src={{asset("image/brand-dark-03.svg")}} alt="Clients" />
                    </a>
                    <a href="#" class="rc animate_top">
                        <img class="tk ml il zl om" src={{asset("image/brand-light-04.svg")}} alt="Clients" />
                        <img class="xc sk ml il zl nm" src={{asset("image/brand-dark-04.svg")}} alt="Clients" />
                    </a>
                    <a href="#" class="rc animate_top">
                        <img class="tk ml il zl om" src={{asset("image/brand-light-05.svg")}} alt="Clients" />
                        <img class="xc sk ml il zl nm" src={{asset("image/brand-dark-05.svg")}} alt="Clients" />
                    </a>
                    <a href="#" class="rc animate_top">
                        <img class="tk ml il zl om" src={{asset("image/brand-light-06.svg")}} alt="Clients" />
                        <img class="xc sk ml il zl nm" src={{asset("image/brand-dark-06.svg")}} alt="Clients" />
                    </a>
                </div>
            </div>
        </section> --}}
        <!-- ===== Clients End ===== -->

        <!-- ===== Blog Start ===== -->
        {{-- <section class="ji gp uq">
            <!-- Section Title Start -->
            <div x-data="{ sectionTitle: `Latest Blogs & News`, sectionTitleText: `It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.` }">
                <div class="animate_top bb ze rj ki xn vq">
                    <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b"></h2>
                    <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
                </div>
            </div>
            <!-- Section Title End -->

            <div class="bb ye ki xn vq jb jo">
                <div class="wc qf pn xo zf iq">
                    <!-- Blog Item -->
                    <div class="animate_top sg vk rm xm">
                        <div class="c rc i z-1 pg">
                            <img class="w-full" src={{asset("image/blog-01.png")}} alt="Blog" />

                            <div class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10">
                                <a href="./blog-single.html" class="vc ek rg lk gh sl ml il gi hi">Read More</a>
                            </div>
                        </div>

                        <div class="yh">
                            <div class="tc uf wf ag jq">
                                <div class="tc wf ag">
                                    <img src={{asset("image/icon-man.svg")}} alt="User" />
                                    <p>Musharof Chy</p>
                                </div>
                                <div class="tc wf ag">
                                    <img src={{asset("image/icon-calender.svg")}} alt="Calender" />
                                    <p>25 Dec, 2025</p>
                                </div>
                            </div>
                            <h4 class="ek tj ml il kk wm xl eq lb">
                                <a href="blog-single.html">Free advertising for your online business</a>
                            </h4>
                        </div>
                    </div>

                    <!-- Blog Item -->
                    <div class="animate_top sg vk rm xm">
                        <div class="c rc i z-1 pg">
                            <img class="w-full" src={{asset("image/blog-02.png")}} alt="Blog" />

                            <div class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10">
                                <a href="./blog-single.html" class="vc ek rg lk gh sl ml il gi hi">Read More</a>
                            </div>
                        </div>

                        <div class="yh">
                            <div class="tc uf wf ag jq">
                                <div class="tc wf ag">
                                    <img src={{asset("image/icon-man.svg")}} alt="User" />
                                    <p>Musharof Chy</p>
                                </div>
                                <div class="tc wf ag">
                                    <img src={{asset("image/icon-calender.svg")}} alt="Calender" />
                                    <p>25 Dec, 2025</p>
                                </div>
                            </div>
                            <h4 class="ek tj ml il kk wm xl eq lb">
                                <a href="blog-single.html">9 simple ways to improve your design skills</a>
                            </h4>
                        </div>
                    </div>

                    <!-- Blog Item -->
                    <div class="animate_top sg vk rm xm">
                        <div class="c rc i z-1 pg">
                            <img class="w-full" src={{asset("image/blog-03.png")}} alt="Blog" />

                            <div class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10">
                                <a href="./blog-single.html" class="vc ek rg lk gh sl ml il gi hi">Read More</a>
                            </div>
                        </div>

                        <div class="yh">
                            <div class="tc uf wf ag jq">
                                <div class="tc wf ag">
                                    <img src={{asset("image/icon-man.svg")}} alt="User" />
                                    <p>Musharof Chy</p>
                                </div>
                                <div class="tc wf ag">
                                    <img src={{asset("image/icon-calender.svg")}} alt="Calender" />
                                    <p>25 Dec, 2025</p>
                                </div>
                            </div>
                            <h4 class="ek tj ml il kk wm xl eq lb">
                                <a href="blog-single.html">Tips to quickly improve your coding speed.</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- ===== Blog End ===== -->

        <!-- ===== Contact Start ===== -->
        {{-- <section id="support" class="i pg fh rm ji gp uq">
            <!-- Bg Shapes -->
            <img src={{asset("image/shape-06.svg")}} alt="Shape" class="h aa y" />
            <img src={{asset("image/shape-03.svg")}} alt="Shape" class="h ca u" />
            <img src={{asset("image/shape-07.svg")}} alt="Shape" class="h w da ee" />
            <img src={{asset("image/shape-12.svg")}} alt="Shape" class="h p s" />
            <img src={{asset("image/shape-13.svg")}} alt="Shape" class="h r q" />

            <!-- Section Title Start -->
            <div x-data="{ sectionTitle: `Let’s Stay Connected`, sectionTitleText: `It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.` }">
                <div class="animate_top bb ze rj ki xn vq">
                    <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b"></h2>
                    <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
                </div>
            </div>
            <!-- Section Title End -->

            <div class="i va bb ye ki xn wq jb mo">
                <div class="tc uf sn tf rn un zf xl:gap-10">
                    <div class="animate_top w-full mn/5 to/3 vk sg hh sm yh rq i pg">
                        <!-- Bg Shapes -->
                        <img src={{asset("image/shape-03.svg")}} alt="Shape" class="h la x wd" />
                        <img src={{asset("image/shape-06.svg")}} alt="Shape" class="h la ma ne kf" />

                        <div class="fb">
                            <h4 class="wj kk wm cc">Email Address</h4>
                            <p><a href="#">support@startup.com</a></p>
                        </div>
                        <div class="fb">
                            <h4 class="wj kk wm cc">Office Location</h4>
                            <p>76/A, Green valle, Califonia USA.</p>
                        </div>
                        <div class="fb">
                            <h4 class="wj kk wm cc">Phone Number</h4>
                            <p><a href="#">+009 8754 3433 223</a></p>
                        </div>
                        <div class="fb">
                            <h4 class="wj kk wm cc">Skype Email</h4>
                            <p><a href="#">example@yourmail.com</a></p>
                        </div>

                        <span class="rc nd rh tm lc fb"></span>

                        <div>
                            <h4 class="wj kk wm qb">Social Media</h4>
                            <ul class="tc wf fg">
                                <li>
                                    <a href="#" class="c tc wf xf ie ld rg ml il tl">
                                        <svg class="th lm ml il" width="11" height="20" viewBox="0 0 11 20"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.83366 11.3752H9.12533L10.042 7.7085H6.83366V5.87516C6.83366 4.931 6.83366 4.04183 8.667 4.04183H10.042V0.96183C9.74316 0.922413 8.61475 0.833496 7.42308 0.833496C4.93433 0.833496 3.16699 2.35241 3.16699 5.14183V7.7085H0.416992V11.3752H3.16699V19.1668H6.83366V11.3752Z"
                                                fill="" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="c tc wf xf ie ld rg ml il tl">
                                        <svg class="th lm ml il" width="20" height="16" viewBox="0 0 20 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.3153 2.18484C18.6155 2.4944 17.8733 2.6977 17.1134 2.78801C17.9144 2.30899 18.5138 1.55511 18.8001 0.666844C18.0484 1.11418 17.2244 1.42768 16.3654 1.59726C15.7885 0.979958 15.0238 0.57056 14.1901 0.432713C13.3565 0.294866 12.5007 0.436294 11.7558 0.835009C11.0108 1.23372 10.4185 1.86739 10.0708 2.63749C9.72313 3.40759 9.63963 4.27098 9.83327 5.09343C8.30896 5.01703 6.81775 4.62091 5.45645 3.93079C4.09516 3.24067 2.89423 2.27197 1.93161 1.08759C1.59088 1.67284 1.41182 2.33814 1.41278 3.01534C1.41278 4.34451 2.08928 5.51876 3.11778 6.20626C2.50912 6.1871 1.91386 6.02273 1.38161 5.72685V5.77451C1.38179 6.65974 1.68811 7.51766 2.24864 8.20282C2.80916 8.88797 3.58938 9.3582 4.45703 9.53376C3.89201 9.68688 3.29956 9.70945 2.72453 9.59976C2.96915 10.3617 3.44595 11.0281 4.08815 11.5056C4.73035 11.9831 5.50581 12.2478 6.30594 12.2627C5.51072 12.8872 4.60019 13.3489 3.62642 13.6213C2.65264 13.8938 1.63473 13.9716 0.630859 13.8503C2.38325 14.9773 4.4232 15.5756 6.50669 15.5737C13.5586 15.5737 17.415 9.73176 17.415 4.66535C17.415 4.50035 17.4104 4.33351 17.4031 4.17035C18.1537 3.62783 18.8016 2.95578 19.3162 2.18576L19.3153 2.18484Z"
                                                fill="" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="c tc wf xf ie ld rg ml il tl">
                                        <svg class="th lm ml il" width="19" height="18" viewBox="0 0 19 18"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4.36198 2.58327C4.36174 3.0695 4.16835 3.53572 3.82436 3.87937C3.48037 4.22301 3.01396 4.41593 2.52773 4.41569C2.0415 4.41545 1.57528 4.22206 1.23164 3.87807C0.887991 3.53408 0.69507 3.06767 0.695313 2.58144C0.695556 2.09521 0.888943 1.62899 1.23293 1.28535C1.57692 0.941701 2.04333 0.748781 2.52956 0.749024C3.01579 0.749267 3.48201 0.942654 3.82566 1.28664C4.1693 1.63063 4.36222 2.09704 4.36198 2.58327ZM4.41698 5.77327H0.750313V17.2499H4.41698V5.77327ZM10.2103 5.77327H6.56198V17.2499H10.1736V11.2274C10.1736 7.87244 14.5461 7.56077 14.5461 11.2274V17.2499H18.167V9.98077C18.167 4.32494 11.6953 4.53577 10.1736 7.31327L10.2103 5.77327Z"
                                                fill="" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="c tc wf xf ie ld rg ml il tl">
                                        <svg class="th lm ml il" width="22" height="14" viewBox="0 0 22 14"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.82308 0.904297C7.40883 0.904297 7.95058 0.95013 8.44558 1.0858C8.89476 1.16834 9.32351 1.33772 9.70783 1.58446C10.069 1.81088 10.3394 2.12896 10.5191 2.53688C10.6997 2.9448 10.7895 3.44438 10.7895 3.98796C10.7895 4.62321 10.6547 5.1668 10.3394 5.57471C10.069 5.98355 9.61799 6.34563 9.07716 6.61788C9.84349 6.84521 10.4292 7.25313 10.7895 7.79672C11.1507 8.34122 11.3762 9.02138 11.3762 9.7923C11.3762 10.4275 11.2405 10.9711 11.015 11.4249C10.7895 11.8786 10.4292 12.2865 10.0232 12.5588C9.58205 12.8506 9.09443 13.0651 8.58124 13.1931C8.04041 13.3297 7.49958 13.4205 6.95874 13.4205H0.916992V0.904297H6.82308ZM6.46191 5.98263C6.95783 5.98263 7.36391 5.84696 7.67924 5.62055C7.99458 5.39413 8.13024 4.9853 8.13024 4.48663C8.13024 4.21438 8.08441 3.94213 7.99458 3.76155C7.90474 3.58005 7.76908 3.44346 7.58941 3.3078C7.40883 3.21705 7.22824 3.1263 7.00274 3.08138C6.77724 3.03555 6.55266 3.03555 6.28133 3.03555H3.66699V5.98355H6.46283L6.46191 5.98263ZM6.59758 11.3341C6.86799 11.3341 7.13841 11.2883 7.36391 11.2434C7.59159 11.2001 7.80692 11.1071 7.99458 10.9711C8.17826 10.8384 8.33193 10.6685 8.44558 10.4725C8.53541 10.246 8.62616 9.9738 8.62616 9.65663C8.62616 9.02138 8.44558 8.56763 8.08533 8.25046C7.72416 7.97822 7.22824 7.84255 6.64249 7.84255H3.66699V11.335H6.59758V11.3341ZM15.2986 11.2883C15.6588 11.6513 16.1997 11.8328 16.9211 11.8328C17.417 11.8328 17.868 11.6971 18.2282 11.4707C18.5894 11.1985 18.8149 10.9262 18.9047 10.654H21.1139C20.7527 11.742 20.2119 12.513 19.4914 13.0116C18.7691 13.4654 17.9129 13.7376 16.8762 13.7376C16.2128 13.7396 15.5551 13.6165 14.9374 13.3746C14.3816 13.1661 13.886 12.8235 13.4946 12.3773C13.0759 11.9598 12.7665 11.4457 12.5935 10.8804C12.368 10.291 12.2772 9.65663 12.2772 8.93063C12.2772 8.25047 12.368 7.61613 12.5935 7.0258C12.8103 6.45755 13.1311 5.93468 13.5395 5.48396C13.9456 5.07605 14.4415 4.71396 14.9823 4.48663C15.5843 4.24469 16.2274 4.12143 16.8762 4.12363C17.6425 4.12363 18.319 4.26021 18.9047 4.57738C19.4914 4.89455 19.9415 5.25755 20.3027 5.80205C20.6711 6.32503 20.9456 6.90819 21.1139 7.52538C21.2037 8.15972 21.2487 8.79497 21.2037 9.52005H14.667C14.667 10.246 14.9374 10.9262 15.2986 11.2892V11.2883ZM18.1384 6.52713C17.8231 6.20996 17.3272 6.02846 16.7405 6.02846C16.3353 6.02846 16.0191 6.11922 15.7487 6.25488C15.4782 6.39147 15.2986 6.57297 15.118 6.75447C14.952 6.92978 14.8422 7.15067 14.8027 7.3888C14.7568 7.61613 14.7119 7.79672 14.7119 7.97822H18.7691C18.6792 7.29805 18.4537 6.84522 18.1384 6.52713ZM14.1711 1.76596H19.2201V2.99063H14.172V1.76596H14.1711Z"
                                                fill="" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="animate_top w-full nn/5 vo/3 vk sg hh sm yh tq">
                        <form action="https://formbold.com/s/unique_form_id" method="POST">
                            <div class="tc sf yo ap zf ep qb">
                                <div class="vd to/2">
                                    <label class="rc ac" for="fullname">Full name</label>
                                    <input type="text" name="fullname" id="fullname" placeholder="Devid Wonder"
                                        class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi" />
                                </div>

                                <div class="vd to/2">
                                    <label class="rc ac" for="email">Email address</label>
                                    <input type="email" name="email" id="email"
                                        placeholder="example@gmail.com"
                                        class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi" />
                                </div>
                            </div>

                            <div class="tc sf yo ap zf ep qb">
                                <div class="vd to/2">
                                    <label class="rc ac" for="phone">Phone number</label>
                                    <input type="text" name="phone" id="phone" placeholder="+009 3342 3432"
                                        class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi" />
                                </div>

                                <div class="vd to/2">
                                    <label class="rc ac" for="subject">Subject</label>
                                    <input type="text" for="subject" id="subject"
                                        placeholder="Type your subject"
                                        class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi" />
                                </div>
                            </div>

                            <div class="fb">
                                <label class="rc ac" for="message">Message</label>
                                <textarea placeholder="Message" rows="4" name="message" id="message"
                                    class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 ci"></textarea>
                            </div>

                            <div class="tc xf">
                                <button class="vc rg lk gh ml il hi gi _l" style="background-color:#ff2953">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- ===== Contact End ===== -->

        <!-- ===== CTA Start ===== -->
        <section class="i pg gh ji" style="background-color: #ff2953; margin-top: 60px">
            <!-- Bg Shape -->
            <img class="h p q" src={{ asset('image/shape-16.svg') }} alt="Bg Shape" />

            <div class="bb ye i z-10 ki xn dr">
                <div class="tc uf sn tn un gg">
                    <div class="animate_left to/2">
                        <h2 class="fk vj zp pr lk ac">
                            Join a Thriving Community of Sellers on Our Multivendor Marketplace!

                        </h2>
                        <p class="lk">
                            Become A Naulo Seller Today!
                            What are you waiting for? Start selling with Naulopasal today.
                        </p>
                    </div>
                    <div class="animate_right bf">
                        <a href="{{ route('seller.register') }}" class="vc ek kk hh rg ol il cm gi hi">
                            Get Started Now
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== CTA End ===== -->
    </main>
    <!-- ===== Footer Start ===== -->

    @include("Seller.home.footer")

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
