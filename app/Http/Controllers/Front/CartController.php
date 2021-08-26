<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\UserCart;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class CartController extends Controller
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
    public function show(){

        $productInCarts = DB::table('user_carts')->where('user_id', '=', Auth::id())->get();
        //check products restaurant
        $data = $this->group_by("restaurant_id", $productInCarts);

        return View::make('front.dashboard.cart', ['data' =>$data]);
    }

    public function add($userId, $productId){
        $product  = Product::find($productId);
        $productInCart = UserCart::where('user_id', $userId)->where('product_id', $productId)->count();
        if ($productInCart == 0 ) {
            $newProductInCart = new UserCart();
            $newProductInCart->user_id = $userId;
            $newProductInCart->product_id = $productId;
            $newProductInCart->qty = 1;
            $newProductInCart->restaurant_id = $product->restaurant->id;
            $newProductInCart->save();
        } else {
            $productInCart = DB::table('user_carts')->where('user_id','=',$userId)
                ->where('product_id','=', $productId)
                ->increment('qty', 1);
        }
        return back()->with(['cartActive ' => 'active']);
    }
    public function delete($userId, $productId){
        $productInCart = UserCart::where('user_id', $userId)->where('product_id', $productId)->count();
        if ($productInCart > 0 ) {
            $productInCart = DB::table('user_carts')->where('user_id','=',$userId)
                ->where('product_id','=', $productId)
                ->delete();
        }
        return back();
    }
    public function destroy($userId, $restaurantId){
        $productInCart = UserCart::where('user_id', $userId)->where('restaurant_id', $restaurantId)->count();
        if ($productInCart > 0 ) {
            $productInCart = DB::table('user_carts')->where('user_id','=',$userId)
                ->where('restaurant_id','=', $restaurantId)
                ->delete();
        }
        return back();
    }


}
