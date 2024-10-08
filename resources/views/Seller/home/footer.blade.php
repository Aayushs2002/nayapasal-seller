@php
    $link = getOtherSetting();

@endphp
<link href="{{ asset('css/style.css') }}" rel="stylesheet" />

<footer style="background-color: black; color: white">
    <div class="bb ze ki xn 2xl:ud-px-0">
        <!-- Footer Top -->
        <div class="ji gp">
            <div class="tc uf ap gg fp">
                <div class=" zd/2 to/4">


                    <p class="lc fb">
                        Improving Your Online Shopping, Your One-stop Shop for Convenience and Quality.
                    </p>
                    <p class="font-medium text-lg  text-white mt-2">We Offer</p>

                    <div class="flex gap-2" style="display: flex; gap: 10px; padding-top: 10px; padding-bottom: 10px">

                        <a href="#">
                            <img src="{{ asset('logos/cashondelivery.png') }}" alt=""
                                style="width: 6rem; height: 3rem; object-fit: contain;">
                        </a>
                        <a href="#">
                            <img src="{{ asset('logos/khalti.png') }}" alt=""
                                style="width: 6rem; height: 3rem; object-fit: contain;">
                        </a>
                    </div>
                    <ul class="tc wf cg">
                        <li>
                            <a href="{{ $link->facebook }}">
                                <svg class="vh ul cl il" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_48_1499)">
                                        <path
                                            d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47 14 5.5 16 5.5H17.5V2.14C17.174 2.097 15.943 2 14.643 2C11.928 2 10 3.657 10 6.7V9.5H7V13.5H10V22H14V13.5Z"
                                            fill="" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_48_1499">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $link->instagram }}" rel="noreferrer" target="_blank"
                                class="text-white transition hover:opacity-75">
                                <span class="sr-only">Instagram</span>

                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="" rel="noreferrer" target="_blank"
                                class="text-white transition hover:opacity-75">
                                <span class="sr-only">Twitter</span>

                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="" rel="noreferrer" target="_blank"
                                class="text-white transition hover:opacity-75">
                                <span class="sr-only">YouTube</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 " viewBox="0 0 256 180">
                                    <path fill="#f00"
                                        d="M250.346 28.075A32.18 32.18 0 0 0 227.69 5.418C207.824 0 127.87 0 127.87 0S47.912.164 28.046 5.582A32.18 32.18 0 0 0 5.39 28.24c-6.009 35.298-8.34 89.084.165 122.97a32.18 32.18 0 0 0 22.656 22.657c19.866 5.418 99.822 5.418 99.822 5.418s79.955 0 99.82-5.418a32.18 32.18 0 0 0 22.657-22.657c6.338-35.348 8.291-89.1-.164-123.134" />
                                    <path fill="#fff" d="m102.421 128.06l66.328-38.418l-66.328-38.418z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="vd ro tc sf rn un gg vn">
                    <div class="">
                        <h4 class=" wm tj ec">Company</h4>

                        <ul>
                            <li><a href="https://naulopasal.com/about" class="sc xl vb">About</a></li>
                            <li><a href="{{route('seller.commission-chart')}}" class="sc xl vb">Commission Chart</a></li>
                            <li><a href="https://naulopasal.com/teams" class="sc xl vb">Meet the Team</a></li>
                            <li>
                                <a href="{{ route('seller.privacypolicy') }}" class="sc xl vb">
                                    Privacy Policy

                                </a>
                            </li>
                            <li><a href="{{ route('seller.termsandcondition') }}" class="sc xl vb">Terms and
                                    Condition</a></li>
                        </ul>
                    </div>

                    <div class="">
                        <h4 class=" wm tj ec">Helpful Links</h4>

                        <ul>
                            <li><a href="https://naulopasal.com/helpandsupport" class="sc xl vb">Help &
                                    Support</a></li>
                            <li><a href="https://naulopasal.com/returnandrefund" class="sc xl vb">Returns &
                                    Refunds</a></li>
                            <li><a href="https://naulopasal.com/contact" class="sc xl vb">Contact</a></li>
                            <li><a href="https://naulopasal.com/faq" class="sc xl vb">FAQs</a></li>
                            <li><a href="https://naulopasal.com/blogs" class="sc xl vb">Blogs</a></li>
                        </ul>
                    </div>

                    {{-- <div class="">
                        <h4 class="kk wm tj ec">Support</h4>

                        <ul>
                            <li><a href="#" class="sc xl vb">Company</a></li>
                            <li><a href="#" class="sc xl vb">Press media</a></li>
                            <li><a href="#" class="sc xl vb">Our Blog</a></li>
                            <li><a href="#" class="sc xl vb">Contact Us</a></li>
                        </ul>
                    </div> --}}

                    <div class="">
                        <h4 class=" wm tj ec">Contact Us</h4>
                        <div class="mb-3" style="display: flex; gap: 3px">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                <path d="M3 7l9 6l9 -6" />
                            </svg>
                            <a href="mailto:{{ $link->email }}"
                                class="text-white text-xs pt-0.5 transition hover:opacity-75">
                                {{ $link->email }}

                            </a>
                        </div>
                        <div class="mb-3" style="display: flex; gap: 3px">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                <path d="M3 7l9 6l9 -6" />
                            </svg>
                            <a href="mailto:support@naulopasal.com"
                                class="text-white text-xs pt-0.5 transition hover:opacity-75">
                                support@naulopasal.com

                            </a>
                        </div>
                        <div class="mb-3" style="display: flex; gap: 3px">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                <path d="M3 7l9 6l9 -6" />
                            </svg>
                            <a href="mailto:advice@naulopasal.com"
                                class="text-white text-xs pt-0.5 transition hover:opacity-75">
                                advice@naulopasal.com

                            </a>
                        </div>
                        <div class="" style="display: flex; gap: 3px">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                <path d="M3 7l9 6l9 -6" />
                            </svg>

                            <a href="mailto:account@naulopasal.com"
                                class="text-white text-xs pt-0.5 transition hover:opacity-75">
                                account@naulopasal.com

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Top -->

        <!-- Footer Bottom -->
        <div class="bh ch pm tc uf sf yo wf xf ap cg fp bj">
            <div class="">
                &copy; 2024. Naulopasal. All rights reserved.
            </div>

            <div class="">
                <div style="font-size: 0.875rem; color: white; text-align: center;">
                    Powered By
                    <a target="_blank" href="https://naulotech.naulopasal.com/"
                        style="color: #7065d4; text-decoration: none;">
                        NauloTech
                    </a>
                </div>

            </div>
        </div>
        <!-- Footer Bottom -->
    </div>
</footer>
