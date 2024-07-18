@extends('Seller.layouts.master')
@section('body')
    <div class="mt-16 bg-white max-w-2xl shadow sm:rounded-lg ">

        <div class="relative w-5/6 mx-auto bg-white rounded-lg shadow md:w-5/6 lg:w-4/6 xl:w-3/6">
            <div class="flex items-center justify-center">
                {{-- <img src="https://avatars0.githubusercontent.com/u/35900628?v=4" alt=""
                    class="absolute w-32 h-32 mx-auto transition duration-200 transform border-4 border-white rounded-full shadow-md -top-20 hover:scale-110"> --}}
                <div
                    class="absolute items-center mx-auto transition duration-200 transform border-4 border-white rounded-full shadow-md w-28 h-28 hover:scale-110">
                    <div class="">
                        <div class="text-[3rem] text-primary font-bold mt-3.5 ml-4">
                            {{ $sellers->firstname[0] . $sellers->lastname[0] }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-16 font-bold text-secondary">
            {{ $sellers->firstname ?? '' }} {{ $sellers->lastname ?? '' }}
        </div>

        <form>
            <div class="border-t border-gray-200">
                <dl>
                    {{-- <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            First Name
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $sellers->firstname }}
                        </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Last name
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $sellers->lastname }}

                        </dd>
                    </div> --}}

                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Mobile Number
                        </dt>
                        <input type="text" name="mobileno" value="{{ old('mobileno', $sellers->mobileno) }}"
                            class="mt-1 text-sm text-gray-900 border-2 border-black p-1 w-[30%] sm:mt-0 sm:col-span-2" />
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Email address
                        </dt>

                        <input type="text" name="email" value="{{ old('email', $sellers->email) }}"
                            class="mt-1 text-sm text-gray-900 border-2 border-black p-1 w-[60%] sm:mt-0 sm:col-span-2" />
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Business Name
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $sellers->businessname }}

                        </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Establish Date
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $sellers->establishdate }}

                        </dd>
                    </div>
                    <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Activites
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $sellers->activities }}

                        </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Vat Number
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $sellers->vatno }}

                        </dd>
                    </div>
                    <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Address
                        </dt>
                        <input type="text" name="address1" value="{{ old('mobileno', $sellers->address1) }}"
                            class="mt-1 text-sm text-gray-900 border-2 border-black p-1 w-[30%] sm:mt-0 sm:col-span-2" />
                    </div>


                    @if ($sellers->registration_documents)
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Registration Documents
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <img class="w-24" src="{{ baseUrl() . 'uploads/' . $sellers->registration_documents }}"
                                    alt="{{ $sellers->businessname }}" />
                            </dd>
                        </div>
                    @endif
                    @if ($sellers->vat_registration_documents)
                        <div class=" px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Vat Registration Documents
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <img class="w-24"
                                    src="{{ baseUrl() . 'uploads/' . $sellers->vat_registration_documents }}"
                                    alt="{{ $sellers->businessname }}" />
                            </dd>
                        </div>
                    @endif
                </dl>
            </div>
            <div class=" px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 text-end">
                <button class="bg-primary text-white p-1 rounded-md">Save</button>
            </div>
        </form>
    </div>
@endsection
