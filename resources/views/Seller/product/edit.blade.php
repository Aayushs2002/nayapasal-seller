@extends('Seller.layouts.master')
@section('body')
    <div class=" sm:px-6 lg:px-8">
        <div class="mt-8 item-center ">
            <div class="flex gap-4 sm:px-5  py-4 bg-white shadow sm:rounded-lg item-center">
                <a class="pt-1" href="{{ route('seller.product.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M5 12l14 0"></path>
                        <path d="M5 12l6 6"></path>
                        <path d="M5 12l6 -6"></path>
                    </svg>
                </a>
                <div class="text-2xl leading-9 text-primary font-extrabold text-gray-900">
                    Edit Product
                </div>
            </div>


            <form method="POST" action="{{ route('seller.product.update', $product->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="lg:flex  my-3">
                    <div class="p-6 w-full lg:w-7/12 bg-white shadow-sm rounded">

                        <div>
                            <label class="text-sm font-semibold w-full" htmlFor="">
                                Product name
                            </label>
                            <div>

                                <input
                                    class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-secondary placeholder-gray-400 focus:outline-none hover:border-secondary w-full"
                                    name="product_name" placeholder="Type product name here" type="text"
                                    value="{{ old('product_name', $product->product_name) }}" />
                                @error('product_name')
                                    <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                        * {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>


                        {{-- Product price --}}
                        <div class="mt-2">
                            <label class="text-sm font-semibold w-full" htmlFor="">Product Price ( Selling
                                Price)</label>
                            <div>
                                <input id="product_price"
                                    class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-secondary placeholder-gray-400 focus:outline-none hover:border-secondary w-full"
                                    name="product_price" placeholder="Type product price here" type="text"
                                    value="{{ old('product_price', $product->product_price) }}" />
                                @error('product_price')
                                    <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                        * {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        {{-- discount --}}
                        <div class="mt-2 border border-gray-300 p-3 rounded ">
                            <div class="flex items-center text-sm font-semibold">
                                <label for="default-checkbox" class="">Discount</label>
                                <input id="discount" type="checkbox" value="YES" name="disc" class="w-4 h-4 ml-1"
                                    {{ $product->discount_amount != null ? 'checked' : '' }} onchange="discountCheck()">
                            </div>
                            <div class="flex flex-col {{ $product->discount_amount == null ? 'hidden' : '' }}"
                                id="showdisc">
                                <label for="discount-type-1" class=" text-gray-600 mt-2">Discount Amount</label>
                                <div class="flex w-full">
                                    <input
                                        class="text-xs border border-gray-300 p-3 focus:outline-none rounded focus:border-[#7065d4] hover:border-[#7065d4] w-full"
                                        name="discount_amount"
                                        value="{{ old('discount_amount', $product->discount_amount) }}"
                                        placeholder="Type discount amount here" type="number" />
                                    @error('discount_amount')
                                        <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                            * {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                            </div>
                        </div>

                        <div>
                            <label class="text-sm font-semibold w-full" htmlFor="">
                                Product Tags (<span class="text-gray-600 italic">Type Tags to help in search Product (Eg.
                                    example1 ,example2,...)</span>)
                            </label>
                            <div>

                                <input
                                    class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-secondary placeholder-gray-400 focus:outline-none hover:border-secondary w-full"
                                    name="tags"
                                    placeholder="Type product tags seperated with comma like example, example2.exapmle,3 ..."
                                    type="text" value="{{ old('tags', $product->tags) }}" />
                                @error('tags')
                                    <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                        * {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        {{-- Available Quantity --}}
                        <div class="mt-2">
                            <label class="text-sm font-semibold w-full" htmlFor="">Available Product Quantity ( Stock
                                )</label>
                            <div>
                                <input id="product_stock"
                                    class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-secondary placeholder-gray-400 focus:outline-none hover:border-secondary w-full"
                                    name="product_stock" placeholder="Type product stock here" type="text"
                                    value="{{ old('product_stock', $product->product_stock) }}" />
                                @error('product_stock')
                                    <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                        * {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        {{-- brand --}}

                        {{-- <div class="mt-4">
                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 ">
                            Brands
                        </label>
                        <select id="brand" name="brand"
                            class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-secondary placeholder-gray-400 focus:outline-none hover:border-secondary w-full ">
                            <option disabled selected>Choose a brand</option>
                            @foreach ($brands as $brand)
                                <option class="text-md" {{ $brand->id == $product->brand_id ? 'selected' : '' }}
                                    value="{{ $brand->id }}" @if (old('brand') == $brand->id) selected @endif>
                                    {{ $brand->brandname }}</option>
                            @endforeach
                        </select>
                        @error('brand')
                            <div class="invalid-feedback text-red-400 text-sm ">* {{ $message }}</div>
                        @enderror
                    </div> --}}

                        {{-- image --}}
                        <div class="my-3">
                            <label class='text-sm font-semibold'>Featured Image</label>
                            <div
                                class='text-xs border border-gray-300 p-3 rounded mt-3 focus:border-secondary placeholder-gray-400 focus:outline-none hover:border-secondary w-full'>
                                <input type="file" name="featured_image" onchange="loadFile(event)" />
                            </div>
                            <img class="oldimage" src="{{ baseUrl() . 'uploads/' . $product->featured_image }}"
                                alt="Card" style="width: 70px;margin-bottom:2px;">
                            <img id="output" style="width: 70px; margin-bottom: 2px;" />
                            @error('featured_image')
                                <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- description --}}
                        <div class="my-3">
                            <div class="text-sm font-semibold w-full mt-2">
                                Description
                            </div>
                            <textarea
                                class="tinymce block w-full px-3 my-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none  sm:text-sm sm:leading-5"
                                name="description" rows="3">{{ old('description', $product->description) }}
                        </textarea>
                            @error('description')
                                <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <script>
                            function checkOnlyOne(checkbox) {
                                var checkboxes = document.getElementsByName(checkbox.name);
                                checkboxes.forEach(function(currentCheckbox) {
                                    if (currentCheckbox !== checkbox)
                                        currentCheckbox.checked = false;
                                });
                            }
                        </script>
                        {{-- featured --}}
                        <div class="my-3 w-full">
                            <label class="text-sm font-semibold w-full">Featured</label>
                            <div class="flex mt-2">
                                <div class="ml-4">
                                    <input type="radio" name="featured" value="1"
                                        {{ $product->featured ? 'checked' : '' }}>
                                    <span class="ml-1">Yes</span>
                                </div>
                                <div class="ml-4">
                                    <input type="radio" name="featured" value="0"
                                        {{ !$product->featured ? 'checked' : '' }}>
                                    <span class="ml-1">No</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-3 w-full">
                            <label class="text-sm font-semibold w-full">Is this Customized</label>
                            <div class="flex mt-2">
                                <div class="ml-4">
                                    <input type="radio" name="customized" value="1"
                                        {{ $product->customized ? 'checked' : '' }}>
                                    <span class="ml-1">Yes</span>
                                </div>
                                <div class="ml-4">
                                    <input type="radio" name="customized" value="0"
                                        {{ !$product->customized ? 'checked' : '' }}>
                                    <span class="ml-1">No</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full lg:w-5/12 bg-white lg:ml-3 ">
                        {{-- category --}}
                        @include('Seller.components.product.edit-category')


                        {{-- attributes --}}
                        @include('Seller.components.product.edit-attribute')

                    </div>
                </div>

                {{-- <div class="bg-white p-6">
                <label class="text-sm font-semibold w-full" htmlFor="">
                    Choose Attribute Group
                </label>
                <div>

                    <input
                        class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-secondary placeholder-gray-400 focus:outline-none hover:border-secondary w-full"
                        name="product_name" placeholder="Choose Attribute Group here" type="text"
                        value="{{ old('product_name') }}" />
                    @error('product_name')
                        <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                            * {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div>
                @include('admin.product.variation')
            </div> --}}
                <div class="mt-6">
                    <button type="submit"
                        class="flex justify-center py-2 px-4 text-sm font-medium rounded-md text-white bg-secondary hover:bg-lightsecondary focus:outline-none transition duration-150 ease-in-out">
                        Edit Product
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
