{{-- @extends('Frontend.layout.app')
@section('content') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seller | Otp</title>
    @include('links.admin.adminscript')
    @include('links.admin.adminstyle')
    @include('links.frontend.script')
</head>

<body>
    <div class="sticky top-0 z-[999]">

        @include('Seller.registerlayout.navbar')
    </div>
    <div class="flex flex-col justify-center items-center h-[80vh] ">
        <div class="">
            <form action="{{ route('seller.registerotp') }}" method="POST">
                @csrf
                <input type="hidden"  name="token" value="{{request('token')}}"  class="">
                <div class="flex flex-col gap-2 border sm:p-10 p-5 md:w-[45vw]">
                    <div class="flex flex-col gap-y-4">
                        <div class="">@include('message.index')</div>
                        <div class="font-medium text-3xl text-primary">Email Verification</div>
                        <div class="">We have e-mailed you a 4 digit code. Please check your email and enter the
                            code
                            here to complete the verification.</div>
                    </div>
                    <input type="text" name="otp" id="firstname"
                        class="bg-white border-[1px] border-[#C2C2C2] mt-5 rounded-lg px-4 py-[10px] text-16 focus:border-primary focus:outline-none" />
                    <button class="bg-primary font-medium text-white text-center w-full py-2 mt-5">Confirm</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>



{{-- @endsection --}}
