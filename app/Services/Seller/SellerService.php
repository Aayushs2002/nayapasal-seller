<?php

namespace App\Services\Seller;

use App\Models\Seller;
use Faker\Core\Uuid;
use Illuminate\Support\Facades\Hash;

class SellerService{
    function storeSeller($request){
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
                $vendor->delete();

            }
        }
        $registrationDocuments =   (new FileService)->fileUpload($request->file("registration_documents"), "registration_documents","seller");

        $vatRegistrationDocuments = (new FileService)->fileUpload($request->file("vat_registration_documents"), "vat_registration_documents","seller");
        $data = $request->all();
        $data['status'] = 'PENDING';
        $data['registration_documents'] = $registrationDocuments;

        $data['vat_registration_documents'] = $vatRegistrationDocuments;
        $data['password'] = Hash::make($request->password);
        // dd($data);
        $data['token'] = uniqid();
        $data['otp'] = rand(1000, 9999);

        $seller = Seller::create($data);
        return $seller;
    }



}

