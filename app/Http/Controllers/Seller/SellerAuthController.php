<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\StoreSellerRequest;
use App\Models\Seller;
use App\Services\Seller\SellerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SellerAuthController extends Controller
{
    public function login()
    {
        return view('Seller.auth.login');
    }

    public function checkOTP()
    {
        $otp = rand(1000, 9999);
        $vendortoken = Seller::where('otp', $otp)->first();
        if ($vendortoken) {
            $this->checkOTP();
        }
        return $otp;
    }
    public function loginpost(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('seller')->attempt($credentials)) {
            if (Auth::guard('seller')->user()->verified != "1") {
                $token=Auth::guard('seller')->user()->token;
                return redirect()->route("seller.login")->with('token', $token)->with('error', 'Your Email is not verified');

            }
            if (Auth::guard('seller')->user()->status == "VERIFIED") {
                if (Auth::guard('seller')->user()->active == "1") {
                    return redirect()->route('seller.dashboard')->with('popsuccess', 'Login Sucessfull');
                }else{
                    return redirect()->back()->with('poperror', 'Your Account is currently Not Verified By Admin');

                }
            }else {
                return redirect()->back()->with('poperror', 'Your Account is currently Not Verified By Admin');
            }
        }

        return redirect()->route('seller.login')->with('poperror', 'Credentials do not match or account is not verified');
    }


    public function register()
    {
        return view('Seller.auth.register');
    }


    public function clickhere($token)
    {


        $vendor = (new SellerService)->clickHereLogin($token);

        return redirect()->route('seller.otp', ['token' => $vendor->token])->with('popsuccess', 'OTP has been sent to your email .');

    }

    public function sellerRegister(StoreSellerRequest $request)
    {
        // dd($request);
        $seller = (new SellerService)->storeSeller($request);
        // Mail::to($request->email)->send(new RegisterOtpMail($seller->otp));

        return redirect()->route('seller.otp', ['token' => $seller->token])->with('popsuccess', 'Registration successful. Check your email for the OTP.');
    }


    public function otp()
    {
        $token = request('token');

        if (!$token) {
            return redirect()->route('seller.otp')->with('poperror', 'Invalid Token');
        }
        return view('Seller.auth.otp');
    }


    public function registerotp(Request $request)
    {
        //    dd($request);
        $token = request('token');
        if (!$token) {

            return redirect()->route('seller.otp')->with('poperror', 'Invalid Token');
        }
        // dd($token);
        // dd($request);
        $otp = $request->otp;
        $seller = Seller::where("token",  $request->token)->first();

        if ($seller->otp != $otp) {
            return redirect()->back()->with('poperror', 'Invalid Otp');
        }

        $seller->verified = 1;
        $seller->save();
        return redirect()->route('seller.login')->with('popsuccess', 'Please Login to Continue');
    }


    public function logout(Request $request)
    {
        Auth::guard('seller')->logout();

        return redirect()->route('seller.login')->with('popsuccess', "Logout Successful");
    }

    public function index()
    {
        return view('Seller.ResetPassword.index');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
        ]);


        $email = $request['email'];

        $customer = Seller::where('email', $email)->first();

        if (!$customer) {
            return redirect()->back()->with('poperror', 'Email not found');
        }

        // $otp = rand(1000, 9999);
        $otp =  $this->checkOTP();

        $customer->update(['otp' => $otp]);

        $token = rand(10000000, 99999999);
        $req['token'] = $token;
        $customer->update(['token' => $token]);

        // Mail::to($email)->send(new OtpMail($otp));


        return view('Seller.ResetPassword.otp', compact('token'));

    }


    public function checkresetotp(Request $request, $token)
    {


        $check = Seller::where('token', $token)->first();

        if (!$check) {
            return redirect()->back()->with('poperror', 'Invalid token');
        }

        if ($request->otp !== $check->otp) {
            return redirect()->route('seller.otps' ,$token)->with('poperror', 'Invalid OTP');
        } else {
            return view('Seller.ResetPassword.confirmpassword', compact('token'))->with('sucess', 'OTP verified successfully');
        }


    }

    public function otps($token)
    {

        if (!request()->token) {
            abort(403);
        }
        return view('Seller.ResetPassword.otp', compact('token'));
    }


    public function getresetotp($token){
        if (!request()->token) {
            abort(403);
        }
        return view('Seller.ResetPassword.confirmpassword',compact('token'));
    }


    public function changepasswords(Request $request, $token)
    {
        $credentials = $request->validate([
            'newpassword' => [
                'required',
                'string',
                'min:8',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/'
            ],
            'confirmpassword' => 'required|same:newpassword',
        ], [
            'newpassword.regex' => 'The password must contain at least one lowercase letter, one uppercase letter, one digit, and one special character.',
            'confirmpassword.same' => 'The confirmation password does not match.'
        ]);

        $checkmember = Seller::where('token', $token)->first();


        if (!$checkmember) {
            return redirect()->route('seller.getresetotp')->with('poperror', ['token' => 'Invalid token.']);
        }

        $checkmember->password = Hash::make($request->newpassword);
        $checkmember->token = null; // Optionally, invalidate the token after use
        $checkmember->save();

        return redirect()->route('seller.login')->with('popsuccess', 'Your password has been successfully changed.');




        // $response = $this->resetPasswordService->checkpassword($request->all(), $token);
        // return $response;
    }







}
