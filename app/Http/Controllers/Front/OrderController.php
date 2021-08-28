<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\UserCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    //


    public function show($userId, $restaurantId)
    {
        $productInCart = DB::table('user_carts')->where('user_id', '=', $userId)
            ->where('restaurant_id', '=', $restaurantId)
            ->get();
        $total = 0;
        foreach ($productInCart as $product){
            $price = Product::find($product->product_id)->discount ?? Product::find($product->product_id)->price;
            $quantity = $product->qty;
            $total += $price * $quantity;
        }
        return view('front.shop.placeOrder', compact('productInCart', 'total'));
    }
}
