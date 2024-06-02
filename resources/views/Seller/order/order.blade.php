@extends('Seller.layouts.master')
@section('body')
    <div class="px-5 bg-background w-full">
        {{-- @include('message.index') --}}

        <div class="flex justify-between">
            <div class="text-2xl font-bold">Order</div>


        </div>
        <div class="mx-4 max-sm:-mx-8 lg:-mx-10 px-8 max-md:px-9 py-4 overflow-x-auto z-[0] ">

            <div class=" min-w-full  shadow rounded-lg z-[0] overflow-y-hidden">
                <table class="min-w-full leading-normal">

                    <thead class="font-normal p-10">
                        <tr class="">
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Order_id</th>

                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Total Price</th>

                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Payment Method </th>

                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                View Status</th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Status</th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Ordered Date</th>




                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Actions</th>
                        </tr>
                    </thead>

                    @foreach ($order_list as $key => $order)
                        {{-- @dd($order->orderItem) --}}

                        <tbody>

                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{ $order->order_id }}</p>
                                </td>





                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">

                                    @foreach ($order->orderItem as $item)
                                        @if (Auth::guard('seller')->user()->id == $item->seller_id)
                                            @php
                                                $total = 0;
                                                $total += $item->quantity * $item->product_price;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <p class="text-gray-900 whitespace-no-wrap">{{ $total }}</p>
                                </td>

                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">


                                    <p class="text-gray-900 whitespace-no-wrap">{{ $order->payment_method }}</p>
                                </td>


                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">


                                    <p class="text-gray-900 whitespace-no-wrap">{{ $order->view_status }}</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">


                                    <p class="text-gray-900 whitespace-no-wrap">{{ $order->order_status }}</p>
                                </td>

                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $order->created_at->format('jS M Y') }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class=" px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <div class="">
                                            <div x-data="{ dropdownOpen: false }" class="">
                                                <button @click="dropdownOpen = ! dropdownOpen"
                                                    class=" w-6 h-6 overflow-hidden focus:outline-none hover:rounded-full hover:bg-slate-50">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-dots-vertical" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                        </path>
                                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                    </svg>
                                                </button>

                                                <div x-cloak x-show="dropdownOpen" @click="dropdownOpen = false"
                                                    class="fixed inset-0 z-10 w-full h-full">
                                                </div>

                                                <div x-cloak x-show="dropdownOpen"
                                                    class="absolute right-6 mr-auto z-10 w-48 mt-2 overflow-hidden bg-white rounded-md shadow-xl">


                                                    <a href="{{ route('seller.order.details', $order->id) }}"
                                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-sky-500 hover:text-white">View
                                                    </a>

                                                    <form method="POST" action=""
                                                        id="delete-form-{{ $order->id }}">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="button"
                                                            onclick="deleteSingleImage({{ $order->id }})"
                                                            class="flex w-full items-center gap-2   px-2 py-2 text-md openModal text-center text-red-700 hover:bg-red-50">
                                                            <span class="pl-2">
                                                                Delete

                                                            </span>
                                                        </button>
                                                    </form>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    @endforeach
                </table>
            </div>



        </div>

        <script>
            function deleteSingleImage(itemSlug) {


                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You will not be able to recover this!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // alert("delete-form-"+itemSlug)
                        let form = document.querySelector("#delete-form-" + itemSlug)
                        form.submit();
                    }
                });
            }
        </script>

    </div>
@endsection
