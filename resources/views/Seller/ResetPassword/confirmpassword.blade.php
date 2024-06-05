
@include('Seller.registerlayout.navbar')
@include('links.admin.adminscript')
@include('links.frontend.script')
    <section class="">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto  lg:py-0 my-10">

            <div class="w-full p-6 bg-white rounded-lg shadow  md:mt-0 sm:max-w-md  sm:p-8">
                <h2 class="mb-1 text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl ">
                    Change Password
                </h2>

                <form action="{{ route('seller.changepasswords', $token) }}" method="POST">
                    @csrf
                    <div class="mt-1">
                        <label for="" class="text-sm font-medium text-gray-700">New Password</label> <br>
                        <input type="password" name="newpassword"
                               class="mt-1 w-full p-2 border rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm">
                        @error('newpassword')
                        <div class="invalid-feedback text-sm text-[#f15a28]" style="display: block;">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <label for="" class="text-sm font-medium text-gray-700">Confirm Password</label> <br>
                        <input type="password" name="confirmpassword"
                               class="mt-1 w-full p-2 border rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm">
                        @error('confirmpassword')
                        <div class="invalid-feedback text-sm text-[#f15a28]" style="display: block;">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button
                        class="mt-5 rounded-md border border-red-500 bg-red-500 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-[#F1612D] w-full focus:outline-none focus:ring active:text-[#7065d4]">
                        Change Password
                    </button>
                </form>

            </div>
        </div>
    </section>

