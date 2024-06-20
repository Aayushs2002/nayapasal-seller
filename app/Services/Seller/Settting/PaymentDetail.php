<?php

namespace App\Services\Seller\Settting;

use App\Models\Seller;
use App\Services\Seller\FileService;
use Exception;
use Illuminate\Support\Facades\Auth;

class PaymentDetail
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    private function deleteimages($data, $seller)
    {
        // delete esewa image
        if ($data != "esewa") {
            if ($seller->esewa_Qr) {
                $deleteimage = (new FileService)->imageDelete($seller->esewa_Qr);
            }
        }
        if ($data != "khalti") {
            // delete khalti image
            if ($seller->khalti_Qr) {
                $deleteimage = (new FileService)->imageDelete($seller->khalti_Qr);
            }
        }

        if ($data != "bank") {
            if ($seller->bank_Qr) {
                $deleteimage = (new FileService)->imageDelete($seller->bank_Qr);
            }
        }
    }

    private function store_bank($request, $seller)
    {
        // delete another images
        $this->deleteimages("bank", $seller);
        if ($request->hasFile('bank_Qr')) {
            // delete bank qr
            if ($seller->bank_Qr) {
                $deleteimage = (new FileService)->imageDelete($seller->bank_Qr);
            }
            $bankQr_image = (new FileService)->fileUpload($request->file("bank_Qr"), "bank_Qr", "bank_Qr");
        } else {
            $bankQr_image = $seller->bank_Qr;
        }
        $seller->update([
            'bank_name' => $request->bank_name,
            'account_number' => $request->account_number,
            'account_holder_name' => $request->account_holder_name,
            'bank_Qr' => $bankQr_image,
            'esewa_id' => "",
            'esewa_Qr' => "",
            'khalti_id' => "",
            'khalti_Qr' => ""
        ]);
        return $seller;
    }

    private function store_esewa($request, $seller)
    {
        // delete another images
        $this->deleteimages("esewa", $seller);

        if ($request->hasFile('esewa_Qr')) {
            if ($seller->esewa_Qr) {
                $deleteimage = (new FileService)->imageDelete($seller->esewa_Qr);
            }
            $esewaQr_image = (new FileService)->fileUpload($request->file("esewa_Qr"), "esewa_Qr", "esewa_Qr");
        } else {
            $esewaQr_image = $seller->esewa_Qr;
        }
        $seller->update([
            'esewa_id' => $request->esewa_id,
            'esewa_Qr' => $esewaQr_image,
            'bank_name' => "",
            'account_holder_name' => "",
            'account_number' => "",
            'bank_Qr' => "",
            'khalti_id' => "",
            'khalti_Qr' => ""
        ]);
        return $seller;
    }

    private function store_khalti($request, $seller)
    {
        // delete another images
        $this->deleteimages("khalti", $seller);
        if ($request->hasFile('khalti_Qr')) {
            if ($seller->khalti_Qr) {
                $deleteimage = (new FileService)->imageDelete($seller->khalti_Qr);
            }
            $esewaQr_image = (new FileService)->fileUpload($request->file("khalti_Qr"), "khalti_Qr", "khalti_Qr");
        } else {
            $esewaQr_image = $seller->khalti_Qr;
        }
        $seller->update([
            'khalti_id' => $request->khalti_id,
            'khalti_Qr' => $esewaQr_image,
            'esewa_id' => "",
            'esewa_Qr' => "",
            'bank_name' => "",
            'account_holder_name' => "",
            'account_number' => "",
            'bank_Qr' => "",
        ]);
        return $seller;
    }

    public function update_detail($request)
    {
        try {
            $seller = Seller::findOrFail(Auth::guard('seller')->user()->id);

            // bank transfer
            if ($request->payment_method == "banktransfer") {
                $details = $this->store_bank($request, $seller);
            }
            //esewa
            if ($request->payment_method == "esewa") {
                $details = $this->store_esewa($request, $seller);
            }
            //khalti
            if ($request->payment_method == "khalti") {
                $details = $this->store_khalti($request, $seller);
            }
            return $details;
        } catch (Exception $e) {
            dd($e);
        }
    }
}
