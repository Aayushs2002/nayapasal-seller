{{-- <script>
    const inputFields = document.querySelectorAll('.input-field');
    const errorMessages = document.querySelectorAll('.error-message');

    inputFields.forEach(function(inputField, index) {
        inputField.addEventListener('input', function() {
            if (inputField.value.trim() === '') {
                errorMessages[index].style.display = 'block';
            } else {
                errorMessages[index].style.display = 'none';
            }
        });
    });
</script> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seller | Register</title>
    @include('links.admin.adminscript')
    @include('links.admin.adminstyle')
    @include('links.frontend.script')
    <style>
        .hidden {
            display: none;
        }

        .error-message {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }

        input.error {
            border-color: red;
        }
    </style>
</head>


<script src="https://www.google.com/recaptcha/api.js?render=6LdX4fApAAAAAJB6MgjOZP5orH8A2UkX3bRfNq8K"></script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('6LdX4fApAAAAAJB6MgjOZP5orH8A2UkX3bRfNq8K', {
            action: 'contact'
        }).then(
            function(token) {
                if (token) {

                    document.getElementById('recaptcha3').value = token;
                }
            }
        )
    })
</script>

<body class="max-w-screen-2xl mx-auto bg-gray-100">
    <div class="sticky top-0 z-[999]">

        @include('Seller.registerlayout.navbar')
    </div>
    <div class="lg:mx-32 max-lg:mx-2 max-sm:mx-5">
        <div class=" my-10 border  border-[#ff2953]">
            <form action="{{ route('seller.store') }}" id="registration-form" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="" id="personalinfo">
                    <div class="p-5 md:px-10 flex flex-col space-y-14">

                        <div class="flex items-center justify-between">
                            <div class="font-medium text-xl">
                                Easy Fast Track Registration Form
                            </div>
                            <a href="{{ route('seller.login') }}" class="text-blue-500 hover:underline font-semibold">
                                Already have an account? Login
                            </a>
                        </div>


                        <div class=" ">
                            <div class="flex justify-center items-center">
                                <div
                                    class="flex justify-center items-center rounded-full text-white bg-[#4F4F4F] md:h-[35px] md:w-[35px] px-2">
                                    1</div>
                                <hr class="h-[8px] w-[250px] bg-[#dad2d2]">
                                <div
                                    class="flex justify-center items-center rounded-full text-[#4F4F4F] bg-[#dad2d2] md:h-[35px] md:w-[35px] px-2">
                                    2</div>
                                <hr class="h-[8px] w-[250px] bg-[#dad2d2]">
                                <div
                                    class="flex justify-center items-center rounded-full text-[#4F4F4F] bg-[#dad2d2] md:h-[35px] md:w-[35px] px-2">
                                    3</div>

                            </div>
                        </div>
                        <div class="md:flex justify-center items-center gap-24 pl-6 text-sm hidden ">
                            <div>Personal Information</div>
                            <div>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Company
                                Information
                            </div>
                            <div>Upload Company Documents</div>
                        </div>


                        <div class="space-y-6">
                            <div class="md:flex gap-5">
                                <div class="flex flex-col gap-2 flex-1 w-full">
                                    <label htmlFor="firstname" class="text-13 font-semibold text-[#0A0A0A]"
                                        data-after=" *">
                                        First Name
                                    </label>

                                    <input type="text" name="firstname" id="firstname" value="{{ old('firstname') }}"
                                        class="input-field bg-white border-[1px] border-[#C2C2C2] rounded-lg px-4 py-[10px] text-16 focus:border-[#ff2953] focus:outline-none" />
                                    <div id="firstname-error" class="error-message"></div>
                                    @error('firstname')
                                        <div id="error-message" class="error-message invalid-feedback text-sm text-red-500"
                                            style="display: block;">
                                            {{ $message }}

                                        </div>
                                    @enderror
                                </div>

                                <div class="flex flex-col gap-2 flex-1 w-full">
                                    <label htmlFor="lastname" class="text-13 font-semibold text-[#0A0A0A]"
                                        data-after=" *">
                                        Lastname
                                    </label>

                                    <input type="text" value="{{ old('lastname') }}" name="lastname" id="lastname"
                                        class="input-field bg-white border-[1px] border-[#C2C2C2] rounded-lg px-4 py-[10px] text-16 focus:border-[#ff2953] focus:outline-none" />
                                    <div id="lastname-error" class="error-message"></div>
                                    @error('lastname')
                                        <div id="error-message" class="error-message invalid-feedback text-sm text-red-500"
                                            style="display: block;">
                                            {{ $message }}

                                        </div>
                                    @enderror
                                </div>

                            </div>

                            <div class="md:flex gap-5">


                                <div class="flex flex-col gap-2 flex-1 w-full">
                                    <label htmlFor="mobileno" class="text-13 font-semibold text-[#0A0A0A]"
                                        data-after=" *">
                                        Mobile No
                                    </label>

                                    <input type="text" name="mobileno" id="mobileno" value="{{ old('mobileno') }}"
                                        class="input-field bg-white border-[1px] border-[#C2C2C2] rounded-lg px-4 py-[10px] text-16 focus:border-[#ff2953] focus:outline-none" />
                                    <div id="mobileno-error" class="error-message"></div>
                                    @error('mobileno')
                                        <div id="error-message" class="error-message invalid-feedback text-sm text-red-500"
                                            style="display: block;">
                                            {{ $message }}

                                        </div>
                                    @enderror
                                </div>

                                <div class="flex flex-col gap-2 flex-1 w-full">
                                    <label htmlFor="email" class="text-13 font-semibold text-[#0A0A0A]" data-after=" *">
                                        Email Address
                                    </label>

                                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                                        class="input-field bg-white border-[1px] border-[#C2C2C2] rounded-lg px-4 py-[10px] text-16 focus:border-[#ff2953] focus:outline-none" />
                                    <div id="email-error" class="error-message"></div>
                                    @error('email')
                                        <div id="error-message" class="error-message invalid-feedback text-sm text-red-500"
                                            style="display: block;">
                                            {{ $message }}

                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="md:flex gap-5">
                                <div class="flex flex-col gap-2 flex-1 w-full">
                                    <label htmlFor="fax" class="text-13 font-semibold text-[#0A0A0A]" data-after=" *">
                                        Password
                                    </label>

                                    <input type="password" name="password" id="password" value="{{ old('password') }}"
                                        class="input-field bg-white border-[1px] border-[#C2C2C2] rounded-lg px-4 py-[10px] text-16 focus:border-[#ff2953] focus:outline-none" />
                                    <div id="password-error" class="error-message"></div>

                                    @error('password')
                                        <div id="error-message"
                                            class="error-message invalid-feedback text-sm text-red-500"
                                            style="display: block;">
                                            {{ $message }}

                                        </div>
                                    @enderror
                                </div>


                            </div>

                            <div class="w-[150px] cursor-pointer bg-[#ff2953] flex items-center justify-center text-white tet-16 font-medium rounded-lg px-4 py-[10px] border-[1px] border-[#ff2953] hover:outline-none hover:bg-white hover:text-primary transition-all duration-500 ease-cubic-bezier next-button"
                                id="next-button">
                                Next
                            </div>
                        </div>

                    </div>

                </div>
                <div class="hidden" id="companyinfo">
                    <div class="p-5 md:px-10 flex flex-col space-y-14">
                        <div class="flex items-center justify-between">
                            <div class="font-medium text-xl">
                                Easy Fast Track Registration Form
                            </div>
                            <a href="{{ route('seller.login') }}"
                                class="text-blue-500 hover:underline font-semibold">
                                Already have an account? Login
                            </a>
                        </div>
                        <div class="">
                            <div class="flex justify-center items-center">
                                <div
                                    class="flex justify-center items-center rounded-full text-white bg-[#4F4F4F] md:h-[35px] md:w-[35px] px-2">
                                    1</div>
                                <hr class="h-[8px] w-[250px] bg-[#4F4F4F]">
                                <div
                                    class="flex justify-center items-center rounded-full text-white bg-[#4F4F4F] md:h-[35px] md:w-[35px] px-2">
                                    2</div>
                                <hr class="h-[8px] w-[250px] bg-[#dad2d2]">
                                <div
                                    class="flex justify-center items-center rounded-full text-[#4F4F4F] bg-[#dad2d2] md:h-[35px] md:w-[35px] px-2">
                                    3</div>

                            </div>
                        </div>
                        <div class="md:flex justify-center items-center gap-24 pl-6 text-sm hidden">
                            <div>Personal Information</div>
                            <div>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Company
                                Information
                            </div>
                            <div>Upload Company Documents</div>
                        </div>

                        <div>
                            <div class="space-y-6">
                                <div class="md:grid grid-cols-3 gap-5">
                                    <div class="flex flex-col gap-2 flex-1 w-full">
                                        <label htmlFor="businessname" class="text-13 font-semibold text-[#0A0A0A]"
                                            data-after=" *">
                                            Registered Name of Business
                                        </label>

                                        <input type="text" name="businessname" id="businessname"
                                            value="{{ old('businessname') }}"
                                            class="input-field bg-white border-[1px] border-[#C2C2C2] rounded-lg px-4 py-[10px] text-16 focus:border-[#ff2953] focus:outline-none" />
                                        <div id="businessname-error" class="error-message"></div>

                                        @error('businessname')
                                            <div class="error-message invalid-feedback text-sm text-red-500"
                                                style="display: block;">
                                                {{ $message }}

                                            </div>
                                        @enderror
                                    </div>
                                    <div class="flex flex-col gap-2 flex-1 w-full">
                                        <label htmlFor="establishdate" class="text-13 font-semibold text-[#0A0A0A]"
                                            data-after=" *">
                                            Date of Establishment of Business
                                        </label>

                                        <input type="date" name="establishdate" id="establishdate"
                                            value="{{ old('establishdate') }}"
                                            class="input-field bg-white border-[1px] border-[#C2C2C2] rounded-lg px-4 py-[10px] text-16 focus:border-[#ff2953] focus:outline-none" />
                                        <div id="establishdate-error" class="error-message"></div>
                                        @error('establishdate')
                                            <div class="error-message invalid-feedback text-sm text-red-500"
                                                style="display: block;">
                                                {{ $message }}

                                            </div>
                                        @enderror
                                    </div>

                                    <div class="flex flex-col gap-2 flex-1 w-full">
                                        <label htmlFor="activities" class="text-13 font-semibold text-[#0A0A0A]"
                                            data-after=" *">
                                            Business Activities
                                        </label>

                                        <input type="text" value="{{ old('activities') }}" name="activities"
                                            id="activities"
                                            class="input-field bg-white border-[1px] border-[#C2C2C2] rounded-lg px-4 py-[10px] text-16 focus:border-[#ff2953] focus:outline-none" />
                                        <div id="activities-error" class="error-message"></div>
                                        @error('activities')
                                            <div id="error-message"
                                                class="error-message invalid-feedback text-sm text-red-500"
                                                style="display: block;">
                                                {{ $message }}

                                            </div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="md:grid grid-cols-2 gap-5">




                                    <div class="flex flex-col gap-2 flex-1 w-full">
                                        <label htmlFor="vatno" class="text-13 font-semibold text-[#0A0A0A]"
                                            data-after=" *">
                                            VAT Registration Number (If Applicable)
                                        </label>

                                        <input type="text" name="vatno" id="vatno"
                                            value="{{ old('vatno') }}"
                                            class="input-field bg-white border-[1px] border-[#C2C2C2] rounded-lg px-4 py-[10px] text-16 focus:border-[#ff2953] focus:outline-none" />
                                        <div id="vatno-error" class="error-message"></div>
                                        @error('vatno')
                                            <div id="error-message"
                                                class="error-message invalid-feedback text-sm text-red-500"
                                                style="display: block;">
                                                {{ $message }}

                                            </div>
                                        @enderror
                                    </div>

                                    <div class="flex flex-col gap-2 flex-1 w-full">
                                        <label htmlFor="address1" class="text-13 font-semibold text-[#0A0A0A]"
                                            data-after=" *">
                                            Physical Address 1
                                        </label>

                                        <input type="text" name="address1" id="address1"
                                            value="{{ old('address1') }}"
                                            class="input-field bg-white border-[1px] border-[#C2C2C2] rounded-lg px-4 py-[10px] text-16 focus:border-[#ff2953] focus:outline-none" />
                                        <div id="address1-error" class="error-message"></div>
                                        @error('address1')
                                            <div id="error-message"
                                                class="error-message invalid-feedback text-sm text-red-500"
                                                style="display: block;">
                                                {{ $message }}

                                            </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="md:grid grid-cols-2 gap-5">
                                    <div class="flex flex-col gap-2 flex-1 w-full">
                                        <label htmlFor="address2" class="text-13 font-semibold text-[#0A0A0A]"
                                            data-after=" *">
                                            Physical Address 2
                                        </label>

                                        <input type="text" name="address2" id="address2"
                                            value="{{ old('address2') }}"
                                            class="input-field bg-white border-[1px] border-[#C2C2C2] rounded-lg px-4 py-[10px] text-16 focus:border-[#ff2953] focus:outline-none" />
                                        <div id="address2-error" class="error-message"></div>
                                        @error('address2')
                                            <div id="error-message"
                                                class="error-message invalid-feedback text-sm text-red-500"
                                                style="display: block;">
                                                {{ $message }}

                                            </div>
                                        @enderror
                                    </div>


                                    <div class="flex flex-col gap-2 flex-1 w-full">
                                        <label htmlFor="postaladdress" class="text-13 font-semibold text-[#0A0A0A]"
                                            data-after=" *">
                                            Postal Code
                                        </label>

                                        <input type="text" name="postaladdress"
                                            id="postaladdress"value="{{ old('postaladdress') }}"
                                            class="input-field bg-white border-[1px] border-[#C2C2C2] rounded-lg px-4 py-[10px] text-16 focus:border-[#ff2953] focus:outline-none" />
                                        <div id="postaladdress-error" class="error-message"></div>
                                        @error('postaladdress')
                                            <div id="error-message"
                                                class="error-message invalid-feedback text-sm text-red-500"
                                                style="display: block;">
                                                {{ $message }}

                                            </div>
                                        @enderror
                                    </div>
                                </div>



                                <div class="flex gap-5">
                                    <div id="previous-button"
                                        class="w-[150px] cursor-pointer bg-[#ff2953] flex items-center justify-center text-white tet-16 font-medium rounded-lg px-4 py-[10px] border-[1px] border-[#ff2953] hover:outline-none hover:bg-white hover:text-primary transition-all duration-500 ease-cubic-bezier">
                                        Previous
                                    </div>
                                    <div id="next-button2"
                                        class="w-[150px] cursor-pointer bg-[#ff2953] flex items-center justify-center text-white tet-16 font-medium rounded-lg px-4 py-[10px] border-[1px] border-[#ff2953] hover:outline-none hover:bg-white hover:text-primary transition-all duration-500 ease-cubic-bezier">
                                        Next
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hidden" id="companydocument">
                    <div class="p-5 md:px-10 flex flex-col space-y-14">

                        <div class="flex items-center justify-between">
                            <div class="font-medium text-xl">
                                Easy Fast Track Registration Form
                            </div>
                            <a href="{{ route('seller.login') }}"
                                class="text-blue-500 hover:underline font-semibold">
                                Already have an account? Login
                            </a>
                        </div>
                        <div class="">
                            <div class="flex justify-center items-center">
                                <div
                                    class="flex justify-center items-center rounded-full text-white bg-[#4F4F4F] md:h-[35px] md:w-[35px] px-2">
                                    1</div>
                                <hr class="h-[8px] w-[250px] bg-[#4F4F4F]">
                                <div
                                    class="flex justify-center items-center rounded-full text-white bg-[#4F4F4F] md:h-[35px] md:w-[35px] px-2">
                                    2</div>
                                <hr class="h-[8px] w-[250px] bg-[#4F4F4F]">
                                <div
                                    class="flex justify-center items-center rounded-full text-white bg-[#4F4F4F] md:h-[35px] md:w-[35px] px-2">
                                    3</div>

                            </div>
                        </div>
                        <div class="md:flex justify-center items-center gap-24 pl-6 text-sm hidden">
                            <div>Personal Information</div>
                            <div>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Company
                                Information
                            </div>
                            <div>Upload Company Documents</div>
                        </div>

                        <div>
                            <div class="space-y-6">
                                <div class="md:grid grid-cols-3 gap-5 max-sm:space-y-5">
                                    <div class="flex flex-col gap-2 flex-1 w-full">
                                        <label htmlFor="registration_documents"
                                            class="text-13 font-semibold text-[#0A0A0A]" data-after=" *">
                                            Citizen/License Image
                                        </label>

                                        <input type="file" name="registration_documents"
                                            id="registration_documents"
                                            class="input-field bg-white border-[1px] border-[#C2C2C2] rounded-lg px-4 py-[10px] text-16 focus:border-[#ff2953] focus:outline-none" />
                                        <div id="registration_documents-error" class="error-message"></div>
                                        @error('registration_documents')
                                            <div id="error-message"
                                                class="error-message invalid-feedback text-sm text-red-500"
                                                style="display: block;">
                                                {{ $message }}

                                            </div>
                                        @enderror
                                    </div>
                                    <div class="flex flex-col gap-2 flex-1 w-full">
                                        <label htmlFor="vat_registration_documents"
                                            class="text-13 font-semibold text-[#0A0A0A]" data-after=" *">
                                            Copy of VAT Registration Documentation
                                        </label>

                                        <input type="file" name="vat_registration_documents"
                                            id="vat_registration_documents"
                                            class="input-field bg-white border-[1px] border-[#C2C2C2] rounded-lg px-4 py-[10px] text-16 focus:border-[#ff2953] focus:outline-none" />
                                        <div id="vat_registration_documents-error" class="error-message"></div>
                                        @error('vat_registration_documents')
                                            <div id="error-message"
                                                class="error-message invalid-feedback text-sm text-red-500"
                                                style="display: block;">
                                                {{ $message }}

                                            </div>
                                        @enderror
                                    </div>
                                    <div class="flex flex-col gap-2 flex-1 w-full">
                                        <label htmlFor="company_logo" class="text-13 font-semibold text-[#0A0A0A]"
                                            data-after=" *">
                                            Company Logo
                                        </label>

                                        <input type="file" name="company_logo" id="company_logo"
                                            class="input-field bg-white border-[1px] border-[#C2C2C2] rounded-lg px-4 py-[10px] text-16 focus:border-primary focus:outline-none" />
                                        <div id="company_logo-error" class="error-message"></div>
                                        @error('company_logo')
                                            <div id="error-message"
                                                class="error-message invalid-feedback text-sm text-red-500"
                                                style="display: block;">
                                                {{ $message }}

                                            </div>
                                        @enderror
                                    </div>

                                    {{-- <div class="flex flex-col gap-2 flex-1 w-full">
                                        <label htmlFor="banking_details" class="text-13 font-semibold text-[#0A0A0A]"
                                            data-after=" *">
                                            Proof of Banking Details
                                        </label>

                                        <input type="file" name="banking_details" id="banking_details"
                                            class="bg-white border-[1px] border-[#C2C2C2] rounded-lg px-4 py-[10px] text-16 focus:border-[#ff2953] focus:outline-none" />
                                        @error('banking_details')
                                            <div class="invalid-feedback text-sm text-primary" style="display: block;">
                                                {{ $message }}

                                            </div>
                                        @enderror
                                    </div> --}}

                                </div>

                                <label>
                                    <input type="checkbox" name="check" value="check" required />
                                    I accept the
                                    <a class="text-blue-500 underline"
                                        href="https://naulopasal.com/termsandcondition " target="_blank">terms and
                                        conditions</a>
                                </label>


                                <div class="flex gap-5">
                                    <div id="previous-button2"
                                        class="md:w-[150px] max-sm:text-sm cursor-pointer bg-[#ff2953] flex items-center justify-center text-white tet-16 font-medium rounded-lg md:px-4 md:py-[10px] p-2  border-[1px] border-[#ff2953] hover:outline-none hover:bg-white hover:text-primary transition-all duration-500 ease-cubic-bezier">
                                        Previous
                                    </div>
                                    <input type="hidden" name="g-recaptcha-response" value=""
                                        id="recaptcha3" />


                                    <button type="submit"
                                        class="md:w-[270px] g-recaptcha max-sm:text-sm bg-[#ff2953] flex items-center justify-center text-white tet-16 font-medium rounded-lg md:px-4 md:py-[10px] p-2 border-[1px] border-[#ff2953] hover:outline-none hover:bg-white hover:text-primary transition-all duration-500 ease-cubic-bezier">Send
                                        Registration Form</button>


                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </form>
        </div>


        {{-- <div class="pb-10 pt-16 text-center">
            <h1 class="text-4xl font-medium">Frequently Asked Questions</h1>
        </div>
        <div class="pb-10">

            <div class="space-y-4">
                <details class="group [&_summary::-webkit-details-marker]:hidden" open>
                    <summary
                        class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg bg-gray-50 p-4 text-gray-900">
                        <h2 class="font-medium text-2xl">
                            What categories can I sell on Our store?
                        </h2>

                        <svg class="h-5 w-5 shrink-0 transition duration-300 group-open:-rotate-180"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </summary>

                    <p class="mt-4 px-4 leading-relaxed text-gray-700">
                        Opening a shop on our ecommerce is completely free. However, our ecommerce does deduct a small
                        percentage of commission from the payment of your orders. Each product commission depends on the
                        type of
                        category it falls under.
                    </p>
                </details>
                <details class="group [&_summary::-webkit-details-marker]:hidden" open>
                    <summary
                        class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg bg-gray-50 p-4 text-gray-900">
                        <h2 class="font-medium  text-2xl">
                            What is Our Ecommerce Commission?
                        </h2>

                        <svg class="h-5 w-5 shrink-0 transition duration-300 group-open:-rotate-180"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </summary>

                    <p class="mt-4 px-4 leading-relaxed text-gray-700">
                        Opening a shop on our ecommerce is completely free. However, our ecommerce does deduct a small
                        percentage of commission from the payment of your orders. Each product commission depends on the
                        type of
                        category it falls under.
                    </p>
                </details>
                <details class="group [&_summary::-webkit-details-marker]:hidden" open>
                    <summary
                        class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg bg-gray-50 p-4 text-gray-900">
                        <h2 class="font-medium  text-2xl">
                            What if incorrect information is submitted during signup?
                        </h2>

                        <svg class="h-5 w-5 shrink-0 transition duration-300 group-open:-rotate-180"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </summary>

                    <p class="mt-4 px-4 leading-relaxed text-gray-700">
                        Opening a shop on our ecommerce is completely free. However, our ecommerce does deduct a small
                        percentage of commission from the payment of your orders. Each product commission depends on the
                        type of
                        category it falls under.
                    </p>
                </details>
            </div>

        </div> --}}
    </div>

</body>

</html>
{{-- @endsection --}}
