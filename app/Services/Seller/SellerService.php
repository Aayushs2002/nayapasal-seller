<?php

namespace App\Services\Seller;

use App\Models\Seller;
use Illuminate\Support\Facades\Hash;

class SellerService{
    function storeSeller($request){
        // dd($request);
        $registrationDocuments =   (new FileService)->fileUpload($request->file("registration_documents"), "registration_documents","seller");
       
        $vatRegistrationDocuments = (new FileService)->fileUpload($request->file("vat_registration_documents"), "vat_registration_documents","seller");
        $data = $request->all();
        $data['status'] = 'PENDING';
        $data['registration_documents'] = $registrationDocuments;
       
        $data['vat_registration_documents'] = $vatRegistrationDocuments;
        $data['password'] = Hash::make($request->password);
        $data['otp'] = rand(1000, 9999);

        $seller = Seller::create($data);
        return $seller;
    }
}