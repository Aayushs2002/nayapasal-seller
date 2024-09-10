<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TermsAndPolicyController extends Controller
{
    public function termsandcondition()
    {


        $pages = DB::table('pages')->where('pagename', 'Seller TermsandCondition')->first();


        return view('Seller.home.privacy', compact('pages'));
    }

    public function privacypolicy()
    {

        $pages = DB::table('pages')->where('pagename', 'Seller PrivacyPolicy')->first();
        return view('Seller.home.privacy', compact('pages'));
    }
}
