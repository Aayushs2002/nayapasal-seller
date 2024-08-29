<div x-data="{ modalOpen: false }" @keydown.escape.window="modalOpen = false" class="relative z-50 w-auto h-auto">
    <button @click="modalOpen=true"
        class="inline-flex items-center justify-center text-sm font-medium transition-colors bg-white border rounded-md hover:bg-neutral-100 active:bg-white focus:bg-white focus:ring-2 focus:ring-neutral-200/60 focus:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
            <path d="M16 5l3 3" />
        </svg></button>
    <template x-teleport="body">
        <div x-show="modalOpen" class="fixed top-0 left-0 z-[999] flex items-center justify-center w-screen  h-screen"
            x-cloak>
            <div x-show="modalOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-300"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click="modalOpen=false"
                class="absolute inset-0 w-full h-full bg-black bg-opacity-40"></div>
            <div x-show="modalOpen" x-trap.inert.noscroll="modalOpen" x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="ease-in duration-200" 
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="relative w-full py-6 bg-white px-7 sm:max-w-xl sm:rounded-lg">
                <div class="flex flex-wrap items-center text-lg text-primary justify-between pb-2">
                    <h3 class="text-lg font-semibold">Edit Stock</h3>
                    <button @click="modalOpen=false"
                        class="absolute top-0 right-0 flex items-center justify-center w-8 h-8 mt-5 mr-5 text-gray-600 rounded-full hover:text-gray-800 hover:bg-gray-50">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="relative w-auto">
                    <div class="mx-4 max-sm:-mx-8 lg:-mx-10 px-8 max-md:px-9 py-4 overflow-x-auto z-[0] ">
                        <form method="POST" action="{{ route('seller.editstock', $product->id) }}">
                            @csrf
                            @method('POST')
                            <div class="">
                                <label class="font-bold text-newsecondary text-md">Product Detail</label>
                                <div class="flex gap-2 pt-2.5">
                                    <img src="{{ baseUrl() . 'uploads/' . $product->featured_image }}"
                                        alt="herosectionimage" class="w-12 h-12 oldimage" />
                                    <p class="text-gray-900 ">{{ $product->product_name }}  </p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <label class="font-bold text-newsecondary text-md">Product Stock / Quantity @if ($product->product_stock == 0)
                                        <span>(Sold Out)</span>
                                    @endif
                                </label>
                                <input name="stock" placeholder="Enter Product Quantity"
                                    value="{{ old('stock', $product->product_stock) }}"type="number"
                                    class="p-2 text-gray-900 border border-newsecondary rounded" required />
                            </div>


                            <div class="flex flex-col-reverse mt-4 sm:flex-row sm:justify-end sm:space-x-2">
                                <button @click="modalOpen=false" type="button"
                                    class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors border rounded-md ">Cancel</button>
                                <button type="submit"
                                    class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium text-white transition-colors bg-newsecondary border border-transparent rounded-md hover:bg-newsecondary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </template>
</div>
