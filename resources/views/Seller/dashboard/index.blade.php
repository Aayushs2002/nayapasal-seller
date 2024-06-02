@extends('Seller.layouts.master')
@section('body')
    <div>
        @include('message.index')
        <div class="font-semibold text-lg py-2">
            Order and Product
        </div>
        <div class="grid grid-cols-4 gap-x-5">
            <div
                class="relative border-[1px] flex flex-col min-w-0 mb-6 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans font-semibold leading-normal text-sm">Total Order</p>
                                <h5 class="mb-0 font-bold">
                                 {{($order_count);}}
                                </h5>
                            </div>
                        </div>
                        <div class="w-4/12 max-w-full px-3 ml-auto text-right flex-0">
                            <div
                                class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-blue-700 to-blue-500 shadow-soft-2xl">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-package"
                                    width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" />
                                    <path d="M12 12l8 -4.5" />
                                    <path d="M12 12l0 9" />
                                    <path d="M12 12l-8 -4.5" />
                                    <path d="M16 5.25l-8 4.5" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="relative border-[1px] flex flex-col min-w-0 mb-6 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans font-semibold leading-normal text-sm">Total Order Value</p>
                                <h5 class="mb-0 font-bold">
                                    Rs.2000
                                </h5>
                            </div>
                        </div>
                        <div class="w-4/12 max-w-full px-3 ml-auto text-right flex-0">
                            <div
                                class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-green-700 to-green-500 shadow-soft-2xl">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cash"
                                    width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M7 9m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" />
                                    <path d="M14 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M17 9v-2a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v6a2 2 0 0 0 2 2h2" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="relative border-[1px] flex flex-col min-w-0 mb-6 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans font-semibold leading-normal text-sm">Total Product</p>
                                <h5 class="mb-0 font-bold">
                                    2
                                </h5>
                            </div>
                        </div>
                        <div class="w-4/12 max-w-full px-3 ml-auto text-right flex-0">
                            <div
                                class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-pink-700 to-pink-500 shadow-soft-2xl">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user"
                                    width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="p-6">
            <div class="row">
                <div class="">
                    <div class="card">
                        <div class="card-header font-semibold text-[#0f577d]">Monthly Report of Earning </div>


                            <div class="card-body">
                                <canvas id="lineChart" width="400" height="200"></canvas>
                            </div>
                            <div class="card-body">
                                <canvas id="piechart" width="400" height="200"></canvas>
                            </div>

                    </div>
                </div>
            </div>
        </div>



    </div>

@endsection
