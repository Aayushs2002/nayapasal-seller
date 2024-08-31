<div id="popup{{ $product->id }}"
    class="fixed inset-0 flex  items-center justify-center bg-black bg-opacity-50 z-[999] hidden">
    <form action="{{ route('seller.flashdeal', $product->id) }}"
        method="POST">
        @csrf
        <div class="bg-white p-6 rounded shadow-lg max-w-lg w-full">
            <!-- Product Price Input -->
            <div class="mt-2">
                <label class="text-sm font-semibold"
                    for="product_price{{ $product->id }}">Product Price
                    (Selling Price)
                </label>
                <div>
                    <input id="product_price{{ $product->id }}"
                        class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-secondary placeholder-gray-400 focus:outline-none hover:border-secondary w-full"
                        name="product_price"
                        placeholder="Type product price here" type="text"
                        value="{{ old('product_price') }}" required />
                    @error('product_price')
                        <div class="text-red-400 text-sm mt-1">
                            * {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <!-- Discount Percent Input -->
            <div class="mt-2">
                <label class="text-sm font-semibold"
                    for="discount_percent{{ $product->id }}">Discount
                    Percent</label>
                <div>
                    <input id="discount_percent{{ $product->id }}"
                        class="text-xs border border-gray-300 p-3 rounded mt-3 focus:border-secondary placeholder-gray-400 focus:outline-none hover:border-secondary w-full"
                        name="discount_percent"
                        placeholder="Type discount percent here"
                        type="text"
                        value="{{ old('discount_percent') }}" required />
                    @error('discount_percent')
                        <div class="text-red-400 text-sm mt-1">
                            * {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>


            <div class="mt-2">
                <label class="text-sm font-semibold"
                    for="start_date{{ $product->id }}">Start Date</label>
                <div class="relative w-full">
                    <input id="start_date{{ $product->id }}"
                        name="start_date" type="date"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Select date" required>
                </div>
            </div>


            <div class="mt-2">
                <label class="text-sm font-semibold"
                    for="end_date{{ $product->id }}">End Date</label>
                <div class="relative w-full">
                    <input id="end_date{{ $product->id }}"
                        type="date" name="end_date"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Select date" required>
                </div>
            </div>

            <button type="button"
                class="mt-4 bg-red-500 text-white px-4 py-2 rounded hover:bg-red-300 focus:outline-none focus:ring-2 focus:ring-blue-500 closePopup"
                data-product-id="{{ $product->id }}">
                Close
            </button>

            <button type="submit"
                class="mt-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Submit
            </button>
        </div>
    </form>
</div>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('input[id^="toggleSwitch"]').forEach(function(toggleSwitch) {

            if (!toggleSwitch.dataset.listenerAdded) {
                toggleSwitch.addEventListener('change', function() {

                    const productId = this.id.replace('toggleSwitch', '');
                    const popup = document.getElementById(`popup${productId}`);

                    if (this.checked) {
                        popup.classList.remove('hidden');
                    } else {
                        const csrfToken = document.querySelector('meta[name="csrf-token"]')
                        .getAttribute('content');



                        fetch(`{{ route('seller.flashdeal.destroy', '') }}/${productId}`, {
                                method: 'DELETE',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': csrfToken
                                }
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    console.log('Flash deal deleted');
                                } else {
                                    console.error('Failed to delete flash deal:', data
                                        .message);
                                }
                            })
                            .catch(error => {
                                console.error(
                                    'There was a problem with the fetch operation:',
                                    error);
                            });
                    }
                });


                toggleSwitch.dataset.listenerAdded = true;
            }
        });

        document.querySelectorAll('.closePopup').forEach(function(closeButton) {
            closeButton.addEventListener('click', function() {
                const productId = this.dataset.productId;
                const popup = document.getElementById(`popup${productId}`);
                const toggleSwitch = document.getElementById(`toggleSwitch${productId}`);

                popup.classList.add('hidden');
                toggleSwitch.checked = false;
            });
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const startDateInput = document.getElementById('start_date{{ $product->id }}');
        const endDateInput = document.getElementById('end_date{{ $product->id }}');


        const today = new Date().toISOString().split('T')[0];
        startDateInput.setAttribute('min', today);

        startDateInput.addEventListener('change', function() {
            const startDate = new Date(startDateInput.value);
            const minEndDate = new Date(startDate);
            minEndDate.setDate(startDate.getDate() +
                1);

            const maxEndDate = new Date(startDate);
            maxEndDate.setDate(startDate.getDate() +
                7);

            endDateInput.setAttribute('min', minEndDate.toISOString().split('T')[0]);
            endDateInput.setAttribute('max', maxEndDate.toISOString().split('T')[0]);
        });
    });
</script>
