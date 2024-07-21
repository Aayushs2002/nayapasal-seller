@include('Seller.registerlayout.navbar')
@include('links.admin.adminscript')
@include('links.admin.adminstyle')
@include('links.frontend.script')
<title>Seller | ResetPassword</title>
<main id="content" role="main" class="w-full  max-w-md mx-auto p-6">
    <div class="mt-7 bg-white  rounded-xl shadow-lg border-2 ">
        <div class="p-4 sm:p-7">
            <div class="text-center">
                <h1 class="block text-2xl font-bold text-gray-800 ">Forgot password?</h1>
                <p class="mt-2 text-sm text-gray-600">
                    Remember your password?
                    <a class="text-blue-600 decoration-2 hover:underline font-medium" href="#">
                        Login here
                    </a>
                </p>
            </div>

            <div class="mt-5">
                <form action="{{ route('seller.resetpasswords') }}" method="POST">
                    @csrf
                    <div class="grid gap-y-4">
                        <div>
                            <label for="email" class="block text-sm font-bold ml-1 mb-2 ">Email address</label>
                            <div class="relative">
                                <input type="email" id="email" name="email"
                                    class="py-3 px-4 block w-full border-2 border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 shadow-sm"
                                    required aria-describedby="email-error">
                            </div>
                            <p class="hidden text-xs text-red-600 mt-2" id="email-error">Please include a valid email
                                address so we can get back to you</p>
                        </div>
                        <button type="submit"
                            class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-primary hover:text-primary font-semibold bg-primary text-white hover:bg-white  transition-all text-sm ">Reset
                            password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <p class="mt-3 flex justify-center items-center text-center divide-x divide-gray-300 dark:divide-gray-700">
        <a class="pr-3.5 inline-flex items-center  gap-x-2 text-sm text-gray-600">

            Need Help ?
        </a>
        <a class="pl-3 inline-flex items-center gap-x-2 text-sm text-gray-600 decoration-2 hover:underline hover:text-blue-600 "
            href="">

            Contact us!
        </a>
    </p>
</main>
