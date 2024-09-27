@extends('Seller.layouts.master')
@section('body')
    @include('message.index')
    <button class="py-1.5 px-3 text-lg text-white bg-gray-700 rounded" onclick="printDiv('printableArea')">Print</button>

    <div class="bg-white mt-3 px-6 font-semibold" id="printableArea">
        <div class="px-4">

            <div id="logo" class=" flex justify-center ">
                <div class="flex justify-center items-center w-36">
                    <img class="w-full" src="{{ asset('logos/newlogo.svg') }}" alt="logo">
                </div>
            </div>
            <div class="flex justify-center text-sm">www.naulopasal.com</div>
            <div class="flex justify-center text-sm">PAN No. 621214394</div>


            {{-- @php

                $Date = $invoice->created_at->format('Y-m-d');
                $formattedDate = $invoice->created_at->format('l, F d, Y');
            @endphp --}}
            <div id="order_id"
                class="flex border justify-between border-black  px-1.5 py-0.5 flex-wrap items-center  mt-1 text-md font-semibold text-black">
                <div class="">

                    <div>
                        Invoice Number : {{ $sellerinvoice->invoice_id }}
                    </div>

                    <div>
                        Paid Amount : Rs. <span class="font-semibold">{{ $sellerinvoice->amount }}</span>
                    </div>

                </div>

                <ul class="text-black">
                    <li class="text-md font-bold mb-1 text-black">
                        Bill To :

                    </li>

                    <li class="font-semibold text-black">Name: {{ $sellerinvoice->seller->firstname }}
                        {{ $sellerinvoice->seller->lastname }}</li>

                    <li>Businessname: {{ $sellerinvoice->seller->businessname }}</li>
                    <li>Address: {{ $sellerinvoice->seller->address1 }}</li>
                    <li>Pan Number: {{ $sellerinvoice->seller->vatno }}</li>

                </ul>
                {{-- Payment Method : {{ $order->payment_method }} --}}
            </div>



            <table class="mt-4 border border-black w-full">
                <thead>
                    <tr class="bg-muted">
                        <th class="border border-black px-1 py-0.5">S.N.</th>
                        <th class="border border-black px-4 py-0.5">PRODUCT NAME</th>
                        <th class="border border-black px-2 py-0.5">QTY</th>
                        <th class="border border-black px-4 py-0.5">RATE</th>
                        <th class="border border-black px-4 py-0.5">AMOUNT</th>

                        <th class="border border-black px-4 py-0.5 make_hidden">Commission</th>
                    </tr>

                </thead>
                <tbody>
                    @php

                        $total = 0;
                        $sumcommission = 0;

                    @endphp
                    @foreach ($invoicedetails as $key => $item)
                        <tr>
                            <td class="border border-black text-center px-1 py-0.5">{{ $key + 1 }}
                            </td>
                            <td class="border border-black px-4 py-0.5">
                                {{ $item->product_name ?? '' }}
                                @if ($item->variation)
                                    <span class="font-medium italic text-xs">
                                        ({{ $item->variation }})
                                    </span>
                                @endif
                            </td>
                            <td class="border border-black px-1 py-0.5 text-center">{{ $item->quantity }}
                            </td>
                            <td class="border border-black px-1 py-0.5 text-center">
                                {{ $item->product_price }}
                            </td>
                            @php
                                $calc_price = $item->quantity * $item->product_price;
                                $calc_commission = ($calc_price / 100) * $item->commission;
                                $total += $calc_price;
                                $sumcommission += $calc_commission;
                            @endphp
                            <td class="border border-black px-1 py-0.5 text-center">
                                {{ $calc_price }}</td>

                            <td class="border make_hidden border-black px-1 py-0.5 text-center">{{ $calc_commission }}
                                ({{ $item->commission }} %)
                            </td>

                        </tr>
                    @endforeach
                    <tr>
                        <td class="border border-black text-center px-1 py-0.5"></td>
                        <td class="border border-black text-center font-bold ">
                        </td>
                        <td class="border border-black text-center " colspan="2">Sub Total </td>
                        <td class="border border-black text-center "> {{ $total }}
                        </td>
                        <td class="border border-black text-center "> {{ $sumcommission }}
                        </td>
                    </tr>

                    @php
                        $word = numberToWord($sellerinvoice->amount);
                    @endphp
                    <tr>
                        <td class="border border-black text-center px-1 py-0.5" rowspan="2">In Words</td>
                        <td class="border border-black text-center font-bold " rowspan="2">{{ $word }}
                            Only .
                        </td>
                        <td class="border border-black text-center " colspan="2">Discount </td>
                        <td class="border border-black text-center "> 0
                        </td>
                        <td class="border border-black text-center "> -
                        </td>
                    </tr>

                    <tr>



                        <td class="border border-black text-center " colspan="2">
                            Paid Amount
                        </td>

                        <td class="border border-black text-center font-bold" colspan="2">
                            Rs. {{ $sellerinvoice->amount }}
                        </td>
                    </tr>



                </tbody>
            </table>
        </div>




    </div>





    <script>
        function printDiv(divId) {
            var printContents = document.getElementById(divId).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
@endsection
