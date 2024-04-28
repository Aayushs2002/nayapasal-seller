<div class="mt-3 bg-white rounded p-3 shadow-lg">
    <div class="mt-4 ">
        <div class="text-md font-semibold shadow rounded-md text-black w-full p-2 ">Attribute
            Group</div>
        <div class="mt-3 pl-5  max-h-[15rem] overflow-y-scroll">
            @foreach ($attributegroups as $attributegroup)
                <div class="flex flex-col">
                    {{ $attributegroup->attributegroupname }}
                    @if (!$attributegroup->getGroupAttribute->isEmpty())
                        @foreach ($attributegroup->getGroupAttribute as $key => $attributeitem)
                            <div class="ml-7">
                                <input type="checkbox" name="attributes[{{ $attributegroup->id }}][]"
                                    {{ in_array($attributeitem->id, $attributeItem) ? 'checked' : '' }}
                                    value="{{ $attributeitem->id }}" />
                                {{ $attributeitem->attributename }}
                            </div>
                        @endforeach
                    @else
                        <div class="ml-7  text-gray-500">No attributes found</div>
                    @endif
                </div>
            @endforeach

        </div>
    </div>
</div>
@error('attributes')
    <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
        * {{ $message }}
    </div>
@enderror
