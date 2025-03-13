<?php

namespace App\Services\Seller\Order;

use App\Models\Order;
use App\Models\OrderBillingInfo;
use App\Models\OrderItem;
use App\Services\Seller\FileService;
use Illuminate\Support\Facades\Auth;

class OrderService
{
    /**
     * Create a new class instance.
     */

    // public function __construct(
    //     protected FileService $fileService
    // ){
    // }

    public function order()
    {
        $orderItems = OrderItem::where('seller_id', Auth::guard("seller")->user()->id)->pluck('order_id')->toArray();
        $order_list = Order::whereIn('id', $orderItems)->where('status', 'verified')->latest()->get();
        // dd($orderItems,$order_list);

        return $order_list;
    }

    public function orderdetails($order_id)
    {
        $order = Order::where('order_id', $order_id)->first();

        $productdetails = Order::where('id', $order->id)->get();
        $user_details = OrderBillingInfo::where('order_id', $order->id)->first();

        return [$order, $productdetails, $user_details];
    }
}
