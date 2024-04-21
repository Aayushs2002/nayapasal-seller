@extends('Seller.layouts.master')
@section('body')
    <div class="bg-white max-w-2xl shadow overflow-hidden sm:rounded-lg ">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                User database
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                Details and informations about user.
            </p>
        </div>
        <form>
            <div class="border-t border-gray-200">
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
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
                    </div>
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
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
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
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Address
                        </dt>
                        <input type="text" name="address1" value="{{ old('mobileno', $sellers->address1) }}"
                            class="mt-1 text-sm text-gray-900 border-2 border-black p-1 w-[30%] sm:mt-0 sm:col-span-2" />
                    </div>
                </dl>
            </div>
            <div class=" px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 text-end">
                <button class="bg-primary text-white p-1 rounded-md">Save</button>
            </div>
        </form>
    </div>
@endsection
