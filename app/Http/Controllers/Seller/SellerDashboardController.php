<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;

use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerDashboardController extends Controller
{
    public function index()
    {


        if(Auth::guard('seller')->check()){

            $seller=Auth::guard('seller')->user();

            $order_count = OrderItem::where('seller_id',$seller->id)->distinct('order_id')->count();
            // $pendingorder = Order::where('user_id',$seller->id)->whereIn('order_status', ['PROCESSING', 'SHIPPED'])->count();
            // $delivered = Order::where('user_id',$seller->id)->where('order_status', 'DELIVERED')->count();
            // $cancelled = Order::where('user_id',$seller->id)->where('order_status', 'CANCELED')->count();



        }


        return view('Seller.dashboard.index',compact('order_count'));
    }
}
