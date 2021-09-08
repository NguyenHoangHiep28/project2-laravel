<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\UserCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class OrderController extends Controller
{
    //
    function group_by($key, $data) {
        $result = array();

        foreach($data as &$val) {
            $val = get_object_vars($val);
            if(array_key_exists($key, $val)){
                $result[$val[$key]][] = $val;
            }else{
                $result[""][] = $val;
            }
        }

        return $result;
    }

    public function show($userId, $restaurantId)
    {
        $order = Order::where('user_id', $userId)->where('restaurant_id', $restaurantId)->where('status', 'in cart')->get();
        $products = UserCart::where('order_id', $order[0]->id)->get();
        return view('front.shop.placeOrder', compact('order', 'products'));
    }

    public function showOrderList(){
        $orderDetails = DB::table('order_details')->where('user_id', '=', Auth::id())
            ->orderBy('created_at', 'DESC')
            ->get();
        $data = $this->group_by("order_id", $orderDetails);
        return View::make('front.dashboard.orders', ['data' =>$data]);
    }

    public function placeOrder(Request $request){
        if ($request->input('checkout-method') == 'later') {
            $order = Order::find($request->input('order-id'));
            $order->full_name = $request->input('full-name');
            $order->email = $request->input('email');
            $order->phone = $request->input('phone');
            $order->address = $request->input('address');
            $order->status = 'pending';
            $order->save();

            //insert products to order_details table
            $products = UserCart::where('order_id', $order->id)->get();
            foreach ($products as $product){
                $orderDetail = new OrderDetail();
                $orderDetail->order_id = $order->id;
                $orderDetail->product_id = $product->product_id;
                $orderDetail->user_id = $order->user_id;
                $orderDetail->qty = $product->qty;
                $orderDetail->total = $product->total;
                $orderDetail->save();
            }
            //delete products in cart after place order
            UserCart::where('order_id', $order->id)->delete();
            return 'Thanks for your purchasing. Your order will be paid on delivery!';
        }else {
            return 'We are not support online checkout now !';
        }
    }

    public function orderDetail($orderId){
        $orderDetails = DB::table('order_details')->where('order_id', $orderId)->get();
        return view('front.shop.orderDetail')->with('orderDetails', $orderDetails);
    }

    public function rejectOrder(Request $request){
        $orderId = $request->input('order-id');
        $reason = $request->input('cancel-reason');
        $order = Order::find($orderId);
        $order->status = 'canceled';
        $order->extra_info = $reason;
        $order->save();
        return back();
    }
}
