<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderBillingInfo;
use App\Services\Seller\Order\OrderService;
use Illuminate\Http\Request;

class SellerOrderController extends Controller
{
    public function __construct(
        protected OrderService $orderService
    ) {     
    }

    public function order(){
        $order_list = $this->orderService->order();
        // dd($order_list);
        return view('Seller.order.order', compact('order_list'));
   
    }

    public function orderdetail($order_id){
        // dd($order_id);

        $orderdetail = $this->orderService->orderdetails($order_id);         
        // dd($orderdetail); 
        $orders = $orderdetail[0];
        $productdetails = $orderdetail[1];
        $user_details = $orderdetail[2];
        return view('Seller.order.order_detail',compact('orders','productdetails','user_details'));
        
    }
}
