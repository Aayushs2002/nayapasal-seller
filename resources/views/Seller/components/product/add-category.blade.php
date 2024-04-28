<div class="bg-white mt-3 shadow-lg p-3 rounded">

    <div class="text-md font-semibold shadow rounded-md text-black w-full p-2">
        Select Category
    </div>
    <div class="max-h-[26rem] mt-3 border-b overflow-y-scroll w-full border-r">

        @foreach (getCategories(0) as $category)
            <div class="mt-2 ml-2 ">
                <input type="checkbox" name="category" onchange="checkOnlyOne(this)"
                    class="w-[13px] h-[13px] text-blue-600 bg-gray-100 border-gray-300 rounded"
                    id="{{ $category->id }}" value="{{ $category->id }}" {{-- {{ getCategories($category->id)->count() == 0 ? '' : 'disabled' }} --}}>
                <label for="{{ $category->id }}"
                    class="ml-1">{{ $category->categoryname }}</label>


                <div class="ml-4 subcategory-container">
                    @foreach (getCategories($category->id) as $subcategory)
                        <div class="ml-7 mt-1">
                            <input type="checkbox" name="category" onchange="checkOnlyOne(this)"
                                class="w-[13px] h-[13px] text-blue-600 bg-gray-100 border-gray-300 rounded"
                                id="{{ $subcategory->id }}" value="{{ $subcategory->id }}"
                                {{-- {{ getCategories($subcategory->id)->count() == 0 ? '' : 'disabled' }} --}}>
                            <label for="{{ $subcategory->id }}"
                                class="ml-1">{{ $subcategory->categoryname }}</label>
                        </div>
                        @foreach (getCategories($subcategory->id) as $twosubcategory)
                            <div class="ml-20 mt-1">
                                <input type="checkbox" name="category" onchange="checkOnlyOne(this)"
                                    class="w-[13px] h-[13px] text-blue-600 bg-gray-100 border-gray-300 rounded"
                                    id="{{ $twosubcategory->id }}"
                                    value="{{ $twosubcategory->id }}" {{-- {{ getCategories($twosubcategory->id)->count() == 0 ? '' : 'disabled' }} --}}>
                                <label for="{{ $twosubcategory->id }}"
                                    class="ml-1">{{ $twosubcategory->categoryname }}</label>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        @endforeach

    </div>
    @error('category')
        <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
            * {{ $message }}
        </div>
    @enderror
</div>
