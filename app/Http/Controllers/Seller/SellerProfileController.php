<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use App\Services\Seller\Settting\PaymentDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;


class SellerProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {



        $sellers = Auth::guard('seller')->user();
        // $sellers = Seller::first();

        return view('Seller.profile.index', compact('sellers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function sellerchangepassword(Request $request){
        return view('Seller.auth.changepassword');
    }


    public function changepassword(Request $request){


        $request->validate([
            'current_password' =>'required',
            'new_password' => 'required|string|confirmed',
        ]);


        $user = Auth::guard('seller')->user();
        $currentpassword = $request->current_password;

        if(Hash::check($currentpassword, $user->password)){

            $user->update([
                'password' => Hash::make($request->input('new_password')),
            ]);
            return redirect()->back()->with('popsuccess','Password Changed Successfully');
        }else{
            return redirect()->back()->with('poperror','Password is incorrect');
        }
    }

    public function setting()
    {
        return view("Seller.profile.setting");
    }
    public function paymentdetails(Request $request)
    {
        $detail = (new PaymentDetail())->update_detail($request);

        return redirect()->back()->with("popsuccess", "Added");
    }
}
