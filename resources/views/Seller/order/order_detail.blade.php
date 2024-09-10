@extends('Seller.layouts.master')
@section('body')
    <main class="">
        <div class="flex gap-4 items-center">
            <a href="{{ route('seller.order') }}">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                    <path
                        d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                </svg>
            </a>
            <div class="text-xl font-bold">Back</div>
        </div>
        {{-- @dd($productdetails) --}}

        @foreach ($productdetails as $order)
            <div class="mt-8 text-xl font-semibold text-slate-600">
                Order : {{ $order->order_id }}
            </div>

            <div class="flex justify-between w-full space-x-2 max-md:flex-col">
                <div class="mt-10 bg-white p-3 px-6 w-full shadow">
                    <div class="my-2 mb-4">
                        <ul>
                            <li class="font-semibold">Order ID:
                                <span class="font-normal">
                                    {{ $order->order_id }}
                                </span>
                            </li>

                            <li class="font-semibold">Total Amount :
                                <span class="font-normal">
                                    {{ (float) $order->amount - (float) $order->delivery_charge }}
                                </span>
                            </li>
                            <li class="font-semibold">Payment Method :
                                <span class="font-normal">
                                    {{ $order->payment_method }}
                                </span>
                            </li>
                            <li class="font-semibold">Order Status :
                                <span class="font-normal">
                                    @if ($order->order_status == 'DELIVERED')
                                        <span class="py-0.5 px-1 rounded bg-green-500 text-white text-xs">
                                            {{ $order->order_status }}</span>
                                    @elseif ($order->order_status == 'CANCELED')
                                        <span class="py-0.5 px-1 rounded bg-red-500 text-white text-xs">
                                            {{ $order->order_status }}</span>
                                    @elseif ($order->order_status == 'PROCESSING')
                                        <span class="py-0.5 px-1 rounded bg-orange-500 text-white text-xs">
                                            {{ $order->order_status }}</span>
                                    @elseif ($order->order_status == 'SHIPPED')
                                        <span class="py-0.5 px-1 rounded bg-teal-500 text-white text-xs">
                                            {{ $order->order_status }}</span>
                                    @elseif ($order->order_status == 'VERIFIED')
                                        <span class="py-0.5 px-1 rounded bg-blue-500 text-white text-xs">
                                            {{ $order->order_status }}</span>
                                    @elseif ($order->order_status == 'RETURNED')
                                        <span class="py-0.5 px-1 rounded bg-yellow-500 text-white text-xs">
                                            {{ $order->order_status }}</span>
                                    @endif
                                </span>
                            </li>
                        </ul>

                    </div>
                    @if ($order->order_status == 'CANCELED')
                        @if ($order->cancel)
                            <div class="flex gap-2 flex-wrap">

                                <div class="text-newsecondary font-semibold">Reason for Cancel :</div>
                                <div class="text-md text-red-500 font-bold underline">{{ $order->cancel->reason }}</div>
                            </div>
                        @endif
                    @endif
                    
                    <div class="flex items-center justify-between mt-5 text-sm w-full">
                        <ul class="text-gray-600">
                            <li class="text-lg mb-1 text-slate-800">
                                Billing Address

                            </li>
                            {{-- @dd($user_details) --}}
                            <li class="font-semibold text-black">First Name:
                                {{ $user_details->billing_firstname ?? 'loading' }}</li>
                            <li class="font-semibold text-black">Last Name:
                                {{ $user_details->billing_lastname ?? 'loading' }}</li>
                            <li>Phone: {{ $user_details->billing_phonenumber ?? 'loading' }}</li>
                            <li>Address: {{ $user_details->billing_address ?? 'loading' }}</li>
                            <li>Email: {{ $user_details->billing_email ?? 'loading' }}</li>
                        </ul>
                        <ul class="text-gray-600">
                            <li class="text-lg mb-1 text-slate-800">
                                Shipping Address
                            </li>
                            <li class="font-semibold text-black">First Name:
                                {{ $user_details->shipping_firstname ?? 'loading' }}</li>
                            <li class="font-semibold text-black">Last Name:
                                {{ $user_details->shipping_lastname ?? 'loading' }}</li>
                            <li>Phone: {{ $user_details->shipping_phonenumber ?? 'loading' }}</li>

                            <li>Address: {{ $user_details->shipping_address ?? 'loading' }}</li>
                            <li>Email: {{ $user_details->shipping_email ?? 'loading' }}</li>
                        </ul>

                    </div>
                    <div class="mt-8 border ">
                        <div class="relative overflow-x-auto">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Image
                                        </th>

                                        <th scope="col" class="px-6 py-3">
                                            Product name
                                        </th>

                                        <th scope="col" class="px-6 py-3">
                                            Price
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Qty
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Total
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Commission
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Receivable Amount
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @php
                                        $total = 0;
                                        $sumcommission = 0;
                                        $paidsum = 0;
                                    @endphp
                                    @foreach ($order->orderItem as $item)
                                        @if (Auth::guard('seller')->user()->id == $item->seller_id)
                                            @php
                                                $total += $item->quantity * $item->product_price;
                                            @endphp
                                            <tr class="bg-white border-b ">
                                                <th>
                                                    {{-- @dd($item->product) --}}
                                                    <div class="w-10 mx-6 ">
                                                        <img src="{{ isset($item->product->featured_image) ? baseUrl() . 'uploads/' . $item->product->featured_image : 'LOADING' }}"
                                                            alt="LOADING" class="img-responsive">


                                                    </div>
                                                </th>

                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                                    {{ $item->product->product_name ?? '' }}

                                                    (@foreach ($item->orderAttributes as $keys => $attribute)
                                                        @if ($keys != 0)
                                                            ,
                                                        @endif
                                                        {{ $attribute->getAttributename->attributename ?? '' }}
                                                    @endforeach)
                                                </th>

                                                <td class="px-6 py-4">
                                                    {{ $item->product_price ?? 'Loading' }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $item->quantity ?? 'Loading' }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $item->quantity * $item->product_price ?? 'Loading' }}
                                                </td>
                                                @php
                                                    $commission = 0;
                                                @endphp

                                                @php
                                                    $commission =
                                                        ($item->product_commission / 100) *
                                                        ($item->quantity * $item->product_price);
                                                    $sumcommission += $commission;

                                                    $paid = $item->product_price * $item->quantity - $commission;
                                                    $paidsum += $paid;
                                                @endphp
                                                <td class="px-6 py-4">
                                                    {{ $commission ?? 'Loading' }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $paid ?? 'Loading' }}
                                                </td>


                                            </tr>
                                        @endif
                                    @endforeach

                                    {{-- <tr class="bg-white border-b">
                                        <td colspan="4" class="px-6 py-4 text-right font-medium">
                                            Tax ({{ $order->taxpercent }}%):
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $order->taxamount }}
                                        </td>
                                    </tr> --}}
                                    @if ($order->coupondiscount)
                                        @php
                                            $coupon = getCoupon($order->coupon);
                                            // dd($coupon->discount_amount)
                                        @endphp
                                        <tr class="bg-white border-b">
                                            <td colspan="4" class="px-6 py-4 text-right font-medium">
                                                Coupon ({{ $coupon->discount_amount ?? 'Loading' }}%):
                                            </td>
                                            <td class="px-6 py-4">
                                                - {{ $order->coupondiscount ?? 'Loading' }}
                                            </td>
                                        </tr>
                                    @endif
                                    <tr class="bg-white border-b">

                                        <td colspan="4" class="px-6 py-4 text-right font-bold">
                                            Grand Total:
                                        </td>
                                        <td class="px-6 py-4 font-bold">
                                            {{ $total }}
                                        </td>
                                        <td class="px-6 py-4 font-bold">
                                            {{ $sumcommission }}
                                        </td>
                                        <td class="px-6 py-4 font-bold">
                                            {{ $paidsum }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            </div>
        @endforeach
    </main>
@endsection
