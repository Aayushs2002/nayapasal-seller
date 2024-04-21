<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\StoreSellerRequest;
use App\Models\Seller;
use App\Services\Seller\SellerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerAuthController extends Controller
{
    public function login()
    {
        return view('Seller.auth.login');
    }

    public function loginpost(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');


        if (Auth::guard('seller')->attempt($credentials)) {
            return redirect()->route('seller.dashboard')->with('popsuccess', 'Login Sucessfull');
        }

        return redirect()->route('seller.login')->with('poperror', 'Credentials do not match or account is not verified');
    }


    public function register()
    {

        return view('Seller.auth.register');
    }

    public function sellerRegister(StoreSellerRequest $request)
    {
        $seller = (new SellerService)->storeSeller($request);
        // Mail::to($request->email)->send(new RegisterOtpMail($seller->otp));

        return redirect()->route('seller.otp')->with('popsuccess', 'Registration successful. Check your email for the OTP.');
    }


    public function otp()
    {

        return view('Seller.auth.otp');
    }


    public function registerotp(Request $request)
    {
        //    dd($request);
        $otp = $request->otp;
        $seller = Seller::where("otp",  $otp)->first();

        if (!$seller) {

            return redirect()->back()->with('poperror', 'Invalid Otp');
        }


        return redirect()->route('seller.login');
    }


    public function logout(Request $request)
    {
        Auth::guard('seller')->logout();

        return redirect()->route('seller.login')->with('popsuccess',"Logout Successful");
    }
}
