<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function showOrders(){
        return view('admin.order.orders');
    }

    public function orderDetail($orderId){
        return view('admin.order.order_detail');
    }
}
