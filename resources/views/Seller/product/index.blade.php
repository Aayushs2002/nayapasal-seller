@extends('Seller.layouts.master')
@section('body')
    <section class="py-1 bg-blueGray-50">

        <div class="w-full flex flex-wrap items-center  mx-auto">
            <form id="sortForm" method="GET" action="{{ route('seller.product.index') }}">
                <div class="flex items-center ">
                    <div class="w-44 font-semibold text-newsecondary max-sm:text-xs">Sort By Stock :</div>
                    <select id="sortSelect" name="sortby"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-1.5">
                        <option value="" disabled selected>None</option>
                        <option {{ request()->sortby == 'minimum' ? 'selected' : '' }} value="minimum">Minimum Stock
                        </option>
                        <option {{ request()->sortby == 'maximum' ? 'selected' : '' }} value="maximum">
                            Maximum Stock </option>
                    </select>
                </div>
            </form>
            <script>
                document.getElementById('sortSelect').addEventListener('change', function() {
                    document.getElementById('sortForm').submit();
                });
            </script>
            <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                <a href="{{ route('seller.product.create') }}"
                    class="bg-secondary hover:bg-lightsecondary text-white py-2 text-xs font-bold uppercase px-3 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">Add
                    Product</a>
            </div>
        </div>
        @include('message.index')
        <div class="flex flex-wrap -mx-3 mb-5">
            <div class="w-full max-w-full px-3 mb-6  mx-auto">
                <div
                    class="relative flex-[1_auto] flex flex-col break-words min-w-0 bg-clip-border rounded-[.95rem] bg-white m-5">
                    <div
                        class="relative flex flex-col min-w-0 break-words border border-dashed bg-clip-border rounded-2xl border-stone-200 bg-light/30">
                        <!-- card header -->
                        <div class="rounded-t mb-0 px-4 py-4   border-b ">
                            <div class="flex flex-wrap  justify-between items-center">
                                <div class="relative px-4  ">
                                    <h3 class="font-bold text-primary max-sm:text-xs text-xl text-gray-700">Products
                                    </h3>
                                </div>
                                <div class="relative px-4  text-right">
                                    <form action="{{ route('seller.product.index') }}" method="GET">
                                        <div class="flex gap-2 ">

                                            <div>
                                                <input
                                                    class="text-xs border h-5 py-4 border-gray-300 p-3 focus:outline-none rounded focus:border-[#646368] hover:border-[#646368] w-full"
                                                    name="searchterm" required placeholder="Search from product name"
                                                    type="text" value="{{ old('searchterm', request('searchterm')) }}" />
                                            </div>
                                            <button type="submit"
                                                class="border border-newsecondary  px-1 text-sm rounded-md mr-2 text-newsecondary bg-white hover:bg-newsecondary hover:text-white">

                                                <div>Search</div>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- end card header -->
                        <!-- card body  -->
                        <div class="flex-auto block py-8 pt-6 px-9 item-center">
                            <div class="overflow-x-auto">
                                <table class="w-full text-left item-center  border-neutral-200">
                                    <thead class="">
                                        <tr class="font-semibold text-[0.95rem] border-b border-dashed">
                                            <th class="pb-3  ">Product Name</th>
                                            <th class="pb-3">
                                                Image
                                            </th>
                                            <th class="pb-3">
                                                Product Price
                                            </th>
                                            <th class="pb-3 px-3.5">
                                                Product Stock
                                            </th>

                                            <th class="pb-3">
                                                Active
                                            </th>

                                            <th class="pb-3">
                                                Created At
                                            </th>
                                            <th class="pb-3">ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $key => $product)
                                            <tr class="border-b  item-center border-dashed last:border-b-0">
                                                <td class="p-3 pr-0 ">
                                                    <span class="font-semibold text-light-inverse text-md/normal">
                                                        {{ $product->product_name }}</span>
                                                </td>
                                                <td class="p-3 pr-0 ">
                                                    <span class="font-semibold text-light-inverse text-md/normal">
                                                        <img class="w-14"
                                                            src="{{ baseUrl() . 'uploads/' . $product->featured_image }}"
                                                            alt="{{ $product->product_name }}" />
                                                    </span>
                                                </td>
                                                <td class="p-3 pr-0 ">
                                                    <span class="font-semibold text-light-inverse text-md/normal">
                                                        {{ $product->product_price }}</span>
                                                </td>
                                                {{-- <td class="p-3 pr-0 ">
                                                <span class="font-semibold text-light-inverse text-md/normal">
                                                    {{ $product->product_stock }}</span>
                                            </td> --}}
                                                <td class="flex items-center gap-2 px-5 text-sm bg-white  py-7 ">

                                                    @if ($product->product_stock == 0)
                                                        <span class="font-semibold text-newsecondary">(Sold Out)</span>
                                                    @else
                                                        <p class="text-lg font-semibold text-newsecondary ">
                                                            {{ $product->product_stock }}</p>
                                                    @endif
                                                    <div class="pt-[9px]">

                                                        @include('Seller.product.action.edit_product_quantity')
                                                    </div>
                                                </td>

                                                <td class="px-5 py-5 text-sm bg-white  ">

                                                    <form method="POST"
                                                        action="{{ route('seller.togleActive', $product->id) }}">
                                                        @csrf
                                                        <label class="inline-flex items-center cursor-pointer">
                                                            <input type="checkbox"
                                                                {{ $product->active == 1 ? 'checked' : '' }} value="1"
                                                                class="sr-only peer" onchange="this.form.submit()">
                                                            <div
                                                                class="relative w-11 h-6 bg-gray-200 rounded-full peer  peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all  peer-checked:bg-blue-600">
                                                            </div>
                                                        </label>
                                                    </form>
                                                </td>
                                                <td class="p-3 pr-0 ">
                                                    <span class="font-semibold text-light-inverse text-md/normal">
                                                        @if ($product->created_at)
                                                            <div>
                                                                {{ \Carbon\Carbon::parse($product->created_at)->format('F j, Y') }}
                                                            </div>
                                                        @else
                                                            <div>-</div>
                                                        @endif
                                                    </span>
                                                </td>

                                                <td class="py-7 pr-12 flex  item-center ">
                                                    <a href="{{ route('seller.myimage', $product->id) }}"
                                                        class=" mr-4 rounded-lg bg-green-500 py-1 px-2 text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 ">
                                                        Add Image
                                                    </a>
                                                    <a href="{{ route('seller.product.edit', $product->id) }}"
                                                        class=" mr-4 rounded-lg bg-green-500 py-1 px-2 text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 ">
                                                        Edit
                                                    </a>

                                                    <div class="font-semibold text-light-inverse text-md/normal">
                                                        <form method="POST" id="delete-form-{{ $product->id }}"
                                                            action="{{ route('seller.product.destroy', $product->id) }}">
                                                            @csrf
                                                            @method('delete')
                                                            <button onclick="deleteImage({{ $product->id }})"
                                                                type="button"
                                                                class="mr-4 rounded-lg bg-red-500 py-1 px-2 text-xs font-bold uppercase text-white shadow-md shadow-red-500/20 transition-all hover:shadow-lg hover:shadow-red-500/40 ">Delete</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 ">
                    {{ $products->appends($params)->links() }}
                    {{-- {{ $products->links('vendor.pagination.tailwind') }} --}}
                </div>
            </div>
        </div>
    </section>
@endsection
