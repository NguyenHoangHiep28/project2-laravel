<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    //
    public function showOrders(){
        $orders = Order::where('email', '<>', 'undefined')->where('restaurant_id', Auth::id())->orderBy('created_at', 'DESC')->get();
        return view('admin.order.orders', compact('orders'));
    }

    public function orderDetail($orderId){
        $order = Order::find($orderId);
        return view('admin.order.order_detail', compact('order'));
    }

    public function acceptOrder(Request $request){
        $orderId = $request->input('order-id');
        $timeAmount = $request->input('estimated-amount');
        $order = Order::find($orderId);
        $order->delivery_amount = $timeAmount;
        $order->status = 'processing';
        $order->save();
        return back();
    }

    public function startDelivery($orderId){
        $order = Order::find($orderId);
        $order->status = 'on-delivery';
        $order->save();

        return back();
    }

    public function rejectOrder(Request $request){
        $orderId = $request->input('order-id');
        $reason = $request->input('reject-reason');
        $order = Order::find($orderId);
        $order->status = 'rejected';
        $order->extra_info = $reason;
        $order->save();
        return back();
    }

    public function markDelivered(Request $request){
        $orderId = $request->input('order-id');
        $order = Order::find($orderId);

        if ($request->hasFile('img-confirm')){
            $validator = Validator::make(['imageConfirm' => $request->file('img-confirm')], [
                'imageConfirm' => 'mimes:jpg,png,jpeg,gif|max:10000'
            ]);
            if ($validator->fails()){
                $error = $validator->errors();
                return back()->withErrors($error);
            }else{
                $file = $request->file('img-confirm');
                $imageName = time().'.'.$file->getClientOriginalName();
                // store new confirm image
                $file->move(public_path('images/resource'), $imageName);
                // store path in database
                $order->delivered_confirm = $imageName;
                $order->status = 'delivered';
                $order->delivered_time = date('Y-m-d H:i:s');
                $order->save();
            }
        }
        return back();
    }
}
