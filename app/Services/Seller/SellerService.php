<?php

namespace App\Services\Seller;

use App\Mail\otp;
use App\Models\Seller;
use Faker\Core\Uuid;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Mail;

class SellerService
{
    function storeSeller($request)
    {
        // dd($request);
        $email = $request->email;

        $vendor = Seller::where('email', $email)->first();

        if ($vendor) {
            if ($vendor->verified == "1") {
                $credentials = $request->validate(
                    [
                        'email' => 'unique:sellers,email',
                        'vatno' => 'unique:sellers,vatno',

                    ]
                );
                return redirect()->back()->with("poperror", "Email already Exists");
            } else {

                if ($vendor->registration_documents) {
                    (new FileService)->imageDelete($vendor->registration_documents);
                }

                if ($vendor->vat_registration_documents) {
                    (new FileService)->imageDelete($vendor->vat_registration_documents);
                }
                // if ($vendor->company_logo) {
                //     (new FileService)->imageDelete($vendor->company_logo);
                // }
                $vendor->delete();
            }
        }
        $registrationDocuments =   (new FileService)->fileUpload($request->file("registration_documents"), "registration_documents", "seller");

        $vatRegistrationDocuments = (new FileService)->fileUpload($request->file("vat_registration_documents"), "vat_registration_documents", "seller");
        $company_logo = (new FileService)->fileUpload($request->file("company_logo"), "company_logo", "logo");
        $data = $request->all();
        $data['status'] = 'PENDING';
        $data['active'] = '1';

        $data['registration_documents'] = $registrationDocuments;
        $data['logo'] = $company_logo;
        // $data['company_logo'] = $company_logo;
        $data['vat_registration_documents'] = $vatRegistrationDocuments;
        $data['password'] = Hash::make($request->password);
        // dd($data);
        $data['token'] = uniqid();
        $data['otp'] = rand(1000, 9999);
        $data['slug'] = Str::slug($request->businessname);
        $seller = Seller::create($data);
        // $mailData = $seller->otp;
        Mail::to($email)->send(new otp($seller->otp));

        return $seller;
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

    function clickHereLogin($token)
    {
        $vendor = Seller::where('token', $token)->first();
        $otp =  $this->checkOTP();
        $vendor->otp = $otp;
        $vendor->save();
        Mail::to($vendor->email)->send(new otp($otp));
        return $vendor;
    }
}
