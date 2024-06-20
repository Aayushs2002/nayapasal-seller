@extends('Seller.layouts.master')
@section('body')
    <div class="">
        @php
            $seller = Auth::guard('seller')->user();
        @endphp
        <div class="">
            <div class="text-lg text-primary font-bold">
                Payment Details
            </div>
            <form method="POST" action="{{ route('seller.paymentdetails') }}" enctype="multipart/form-data">
                @csrf
                <div class="py-3 z-[999]">
                    <div class="sm:flex w-full z-[999] gap-4">
                        <div class="sm:w-1/2">
                            {{-- <label for="bank">Bank</label> --}}
                            <div class="flex items-center ps-4 border border-gray-200 rounded ">
                                <input onclick="showTab(0)" checked id="bordered-radio-1" type="radio" value="banktransfer"
                                    name="payment_method"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 0">
                                <label for="bordered-radio-1"
                                    class="w-full py-4 ms-2 text-sm font-medium text-gray-900">Bank
                                    Transfer</label>
                            </div>
                        </div>


                        <div class="sm:w-1/2">
                            <div class="flex items-center ps-4 border border-gray-200 rounded ">
                                <input onclick="showTab(1)" id="bordered-radio-esewa" type="radio" value="esewa"
                                    name="payment_method"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 0">
                                <label for="bordered-radio-esewa"
                                    class="w-full py-4 ms-2 text-sm font-medium text-gray-900">
                                    Esewa</label>
                            </div>
                        </div>
                        <div class="sm:w-1/2">
                            <div class="flex items-center ps-4 border border-gray-200 rounded ">
                                <input onclick="showTab(2)" id="bordered-radio-khalti" type="radio" value="khalti"
                                    name="payment_method"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 0">
                                <label for="bordered-radio-khalti"
                                    class="w-full py-4 ms-2 text-sm font-medium text-gray-900">
                                    Khalti</label>
                            </div>
                        </div>
                    </div>
                    <div id="tab-0" class="block">
                        <div class="sm:flex  w-full z-[999] gap-4">
                            <div class="sm:w-1/2">
                                <div class="">Bank Name</div>
                                <div class="py-2">
                                    <input type="text" name="bank_name"
                                        value="{{ old('bank_name', $seller->bank_name) }}"
                                        class="block w-full rounded-md border shadow-sm p-2 focus:outline-none"
                                        placeholder="Enter Bank Name" />

                                    @error('bank_name')
                                        <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                            * {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="sm:w-1/2">
                                <div class="">Account Number</div>
                                <div class="py-2">
                                    <input type="text" name="account_number"
                                        value="{{ old('account_number', $seller->account_number) }}"
                                        class="block w-full rounded-md border shadow-sm p-2 focus:outline-none"
                                        placeholder="Enter Account Number" />
                                    @error('account_number')
                                        <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                            * {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="sm:flex  w-full z-[999] gap-4">
                            <div class="sm:w-1/2">
                                <div class="">Account Holder Name</div>
                                <div class="py-2">
                                    <input type="text" name="account_holder_name"
                                        value="{{ old('account_holder_name', $seller->account_holder_name) }}"
                                        class="block w-full rounded-md border shadow-sm p-2 focus:outline-none"
                                        placeholder="Enter Account Holder Name" />
                                    @error('account_holder_name')
                                        <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                            * {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="sm:w-1/2">
                                <div class="">Bank QR Image</div>
                                <div
                                    class='text-xs border border-gray-300 p-3 rounded mt-3 focus:border-secondary placeholder-gray-400 focus:outline-none hover:border-secondary w-full'>
                                    <input type="file" name="bank_Qr" onchange="loadFile(event)" />
                                </div>
                                @if ($seller->bank_Qr)
                                    <img class="oldimage" src="{{ baseUrl() . 'uploads/' . $seller->bank_Qr }}"
                                        alt="Card" style="width: 70px;margin-bottom:2px;">
                                @endif
                                <img id="output" style="width: 70px; margin-bottom: 2px;" />
                                @error('bank_Qr')
                                    <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                        * {{ $message }}
                                    </div>
                                @enderror

                            </div>
                        </div>
                    </div>
                    <div id="tab-1" class="hidden">
                        <div class="sm:w-1/2">
                            <div class="">Esewa Id</div>
                            <div class="py-2">
                                <input type="number" name="esewa_id" value="{{ old('esewa_id', $seller->esewa_id) }}"
                                    class="block w-full rounded-md border shadow-sm p-2 focus:outline-none"
                                    placeholder="Enter Esewa Id" />
                                @error('esewa_id')
                                    <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                        * {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="sm:w-1/2">
                                <div class="">Esewa QR Image</div>
                                <div
                                    class='text-xs border border-gray-300 p-3 rounded mt-3 focus:border-secondary placeholder-gray-400 focus:outline-none hover:border-secondary w-full'>
                                    <input type="file" name="esewa_Qr" onchange="esewa_loadFile(event)" />
                                </div>
                                @if ($seller->esewa_Qr)
                                    <img class="esewa_oldimage" src="{{ baseUrl() . 'uploads/' . $seller->esewa_Qr }}"
                                        alt="Card" style="width: 70px;margin-bottom:2px;">
                                @endif
                                <img id="esewa_output" style="width: 70px; margin-bottom: 2px;" />
                                @error('esewa_Qr')
                                    <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                        * {{ $message }}
                                    </div>
                                @enderror

                            </div>
                        </div>
                    </div>

                    <div id="tab-2" class="hidden">
                        <div class="sm:w-1/2">
                            <div class="">Khalti Id</div>
                            <div class="py-2">
                                <input type="number" name="khalti_id"
                                    value="{{ old('khalti_id', $seller->khalti_id) }}"
                                    class="block w-full rounded-md border shadow-sm p-2 focus:outline-none"
                                    placeholder="Enter Khalti Id" />
                                @error('khalti_id')
                                    <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                        * {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="sm:w-1/2">
                            <div class="">Khalti QR Image</div>
                            <div
                                class='text-xs border border-gray-300 p-3 rounded mt-3 focus:border-secondary placeholder-gray-400 focus:outline-none hover:border-secondary w-full'>
                                <input type="file" name="khalti_Qr" onchange="khalti_loadFile(event)" />
                            </div>
                            @if ($seller->khalti_Qr)
                                <img class="khalti_oldimage" src="{{ baseUrl() . 'uploads/' . $seller->khalti_Qr }}"
                                    alt="Card" style="width: 70px;margin-bottom:2px;">
                            @endif
                            <img id="khalti_output" style="width: 70px; margin-bottom: 2px;" />
                            @error('khalti_Qr')
                                <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror

                        </div>
                    </div>
                </div>

                <button class="bg-primary text-white p-3">Submit</button>
            </form>


            <script>
                var esewa_loadFile = function(event) {
                    var esewa_output = document.getElementById('esewa_output');
                    esewa_output.src = URL.createObjectURL(event.target.files[0]);
                    var esewa_old = document.getElementsByClassName('esewa_oldimage')[0];
                    esewa_old.classList.add("hidden");
                };
                var khalti_loadFile = function(event) {
                    var khalti_output = document.getElementById('khalti_output');
                    khalti_output.src = URL.createObjectURL(event.target.files[0]);
                    var khalti_old = document.getElementsByClassName('khalti_oldimage')[0];
                    khalti_old.classList.add("hidden");
                };
            </script>

            <script>
                function showTab(tabIndex) {
                    document.getElementById('tab-0').classList.add('hidden');
                    document.getElementById('tab-1').classList.add('hidden');
                    document.getElementById('tab-2').classList.add('hidden');
                    document.getElementById('tab-' + tabIndex).classList.remove('hidden');
                }
            </script>


        </div>
    </div>
@endsection
