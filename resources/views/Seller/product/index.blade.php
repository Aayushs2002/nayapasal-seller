@extends('Seller.layouts.master')
@section('body')

<section class="py-1 bg-blueGray-50">

    <div class="w-full  mx-auto">
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
                        <div class="flex flex-wrap items-center">
                            <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                <h3 class="font-bold text-primary max-sm:text-xs text-xl text-gray-700">Products
                                </h3>
                            </div>
                            <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                                <div class="">Search...</div>
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
                                            Product Price
                                        </th>
                                        <th class="pb-3">
                                            Product Stock
                                        </th>
                                        <th class="pb-3">
                                            Image
                                        </th>
                                        <th class="pb-3">
                                            Created At
                                        </th>
                                        <th class="pb-3">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $key => $product)
                                        <tr class="border-b item-center border-dashed last:border-b-0">
                                            <td class="p-3 pr-0 ">
                                                <span class="font-semibold text-light-inverse text-md/normal">
                                                    {{ $product->product_name }}</span>
                                            </td>
                                            <td class="p-3 pr-0 ">
                                                <span class="font-semibold text-light-inverse text-md/normal">
                                                    {{ $product->product_price }}</span>
                                            </td>
                                            <td class="p-3 pr-0 ">
                                                <span class="font-semibold text-light-inverse text-md/normal">
                                                    {{ $product->product_stock }}</span>
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
                                                    @if ($product->created_at)
                                                    <div>{{ \Carbon\Carbon::parse($product->created_at)->format('F j, Y') }}</div>
                                                    @else
                                                        <div>-</div>
                                                    @endif
                                                </span>
                                            </td>

                                            <td class="py-7 pr-12 flex  item-center ">

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
        </div>
    </div>
</section>

@endsection