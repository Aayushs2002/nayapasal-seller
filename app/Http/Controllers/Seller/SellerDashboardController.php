<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;

use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerDashboardController extends Controller
{
    public function index()
    {


        if (Auth::guard('seller')->check()) {

            $seller = Auth::guard('seller')->user();

            $order_count = OrderItem::where('seller_id', $seller->id)->distinct('order_id')->count();
            // $pendingorder = Order::where('user_id',$seller->id)->whereIn('order_status', ['PROCESSING', 'SHIPPED'])->count();
            // $delivered = Order::where('user_id',$seller->id)->where('order_status', 'DELIVERED')->count();
            // $cancelled = Order::where('user_id',$seller->id)->where('order_status', 'CANCELED')->count();

            $product = Product::where('seller_id', $seller->id)->count();
            $orderItems = OrderItem::where('seller_id', $seller->id)->get();
            $total_revenue = 0;

            foreach ($orderItems as $orderItem) {
               
                $revenue_per_item = $orderItem->product_price * $orderItem->quantity;

          
                $commission_per_item = ($orderItem->product_commission / 100) * $revenue_per_item;

             
                $total_revenue += $revenue_per_item - $commission_per_item;
            }
            // dd($total_revenue);
        }


        return view('Seller.dashboard.index', compact('order_count', 'product','total_revenue'));
    }
}
