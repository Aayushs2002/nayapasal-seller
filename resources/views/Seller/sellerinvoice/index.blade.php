@extends('Seller.layouts.master')
@section('body')
    <section class="py-1 bg-blueGray-50">

        @include('message.index')
        <div class="flex flex-wrap -mx-3 mb-5">
            <div class="mx-9">

                <form method="get" action="{{ route('seller.invoices.index') }}">

                    <div class="flex gap-x-5 max-md:space-y-3 max-md:flex-col items-center w-full">
                        <div class="flex-col w-full">
                            <label class=" text-gray-600 text-sm pb-2" for="show-select">From</label>
                            <div class="flex flex-col max-sm:p-2    col-span-3">
                                <input id="datepicker" name="from" class="w-full border text-black py-2 px-4 rounded-md"
                                    type="date" value="{{ old('form', request('from')) }}" placeholder="YYYY-MM-DD"
                                    required>
                            </div>

                        </div>
                        <div class="flex-col w-full">
                            <label class=" text-gray-600 text-sm pb-2" for="show-select">To</label>
                            <div class="flex relative">
                                <input id="datepicker" name="to" class="w-full border text-black py-2 px-4 rounded-md"
                                    type="date" value="{{ old('to', request('to')) }}" placeholder="YYYY-MM-DD" required>

                            </div>
                        </div>



                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
                        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
                        <script>
                            flatpickr("#datepicker", {
                                // dateFormat: "Y-m-d",
                            });
                        </script>

                        <button class="mt-7">
                            <div class=" flex items-center bg-sky-600 px-4 rounded-sm w-full  justify-between">
                                <div>

                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-filter"
                                        width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M4 4h16v2.172a2 2 0 0 1 -.586 1.414l-4.414 4.414v7l-6 2v-8.5l-4.48 -4.928a2 2 0 0 1 -.52 -1.345v-2.227z" />
                                    </svg>
                                </div>

                                <div
                                    class="appearance-none max-md:w-full  border-sky-400    py-2 bg-sky-600 text-md placeholder-gray-400 text-white focus:outline-none">
                                    Filter</div>
                            </div>
                        </button>
                    </div>
                </form>
            </div>

            <div class="w-full max-w-full px-3 mb-6  mx-auto">
                <div
                    class="relative flex-[1_auto] flex flex-col break-words min-w-0 bg-clip-border rounded-[.95rem] bg-white m-5">
                    <div
                        class="relative flex flex-col min-w-0 break-words border border-dashed bg-clip-border rounded-2xl border-stone-200 bg-light/30">
                        <!-- card header -->
                        <div class="rounded-t mb-0 px-4 py-4   border-b ">
                            <div class="flex flex-wrap items-center">
                                <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                    <h3 class="font-bold text-primary max-sm:text-xs text-xl text-gray-700">Invoice
                                    </h3>
                                </div>
                                <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">

                                </div>
                            </div>
                        </div>

                        <!-- end card header -->
                        <!-- card body  -->

                        @if (!$invoices->isEmpty())
                            <div class="flex-auto block py-8 pt-6 px-9 item-center">
                                <div class="overflow-x-auto">
                                    <table class="w-full text-left item-center  border-neutral-200">
                                        <thead class="">
                                            <tr class="font-semibold text-[0.95rem] border-b border-dashed">
                                                <th class="pb-3 ">S.N</th>
                                                <th class="pb-3 ">Invoice Number</th>
                                                <th class="pb-3 ">Seller Company</th>
                                                <th class="pb-3">
                                                    Payment Amount
                                                </th>
                                                {{-- <th class="pb-3">
                                                    Paid On
                                                </th> --}}

                                                <th class="pb-3">
                                                    Created At
                                                </th>
                                                <th class="pb-3">ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($invoices as $key => $invoice)
                                                <tr class="border-b item-center border-dashed last:border-b-0">
                                                    <td class="p-3 pr-0 ">
                                                        <span class="font-semibold text-light-inverse text-md/normal">
                                                            {{ $key + 1 }}</span>
                                                    </td>
                                                    <td class="p-3 pr-0 ">
                                                        <span class="font-semibold text-light-inverse text-md/normal">
                                                            {{ $invoice->invoice_id }}</span>
                                                    </td>
                                                    <td class="p-3 pr-0 ">
                                                        <span class="font-semibold text-light-inverse text-md/normal">
                                                            {{ $invoice->seller->businessname }}
                                                        </span>
                                                    </td>
                                                    <td class="p-3 pr-0 ">
                                                        <span class="font-semibold text-light-inverse text-md/normal">
                                                            Rs. {{ $invoice->amount }}</span>
                                                    </td>
                                                    {{-- <td class="p-3 pr-0 ">
                                                        <span class="font-semibold text-light-inverse text-md/normal">
                                                            {{ $invoice->payment_method }}</span>
                                                        <span class="font-semibold text-light-inverse text-md/normal ">
                                                            ({{ $invoice->account_number }})
                                                        </span>
                                                    </td> --}}

                                                    <td class="p-3 pr-0 ">
                                                        <span class="font-semibold text-light-inverse text-md/normal">
                                                            @if ($invoice->created_at)
                                                                <div>{{ $invoice->created_at->format('F j, Y') }}</div>
                                                            @else
                                                                <div>-</div>
                                                            @endif
                                                        </span>
                                                    </td>

                                                    <td class="py-7 pr-12 flex  item-center ">
                                                        {{-- @if (auth()->guard('admin')->user()->can('Edit Brand')) --}}
                                                        <a href="{{ route('seller.invoices.show', $invoice->id) }}"
                                                            class=" mr-4 rounded-lg bg-green-500 py-1 px-2 text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 ">
                                                            View
                                                        </a>
                                                        {{-- @endif --}}



                                                    </td>



                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @else
                            <div class="py-4 text-lg text-red-600 font-bold text-center">
                                No Invoice Found !!!
                            </div>
                        @endif
                    </div>
                </div>
                <div class="mt-3 ">
                    {{ $invoices->appends($params)->links('vendor.pagination.tailwind') }}
                    {{-- {{ $invoices->links('vendor.pagination.tailwind') }} --}}
                </div>
            </div>
        </div>
    </section>
@endsection
