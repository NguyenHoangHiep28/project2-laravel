<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\UserCart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class CartController extends Controller
{
    //
    function group_by($key, $data)
    {
        $result = array();

        foreach ($data as &$val) {
            $val = get_object_vars($val);
            if (array_key_exists($key, $val)) {
                $result[$val[$key]][] = $val;
            } else {
                $result[""][] = $val;
            }
        }

        return $result;
    }

    public function show()
    {

        $productInCarts = DB::table('user_carts')->where('user_id', '=', Auth::id())
            ->orderBy('created_at')
            ->get();
        //check products restaurant
        $data = $this->group_by("restaurant_id", $productInCarts);
        $orderTotals = DB::table('orders')->where('user_id', '=', Auth::id())
            ->where('status', '=', 'in cart')
            ->orderBy('created_at')->get();
        return View::make('front.dashboard.cart', ['data' => $data, 'orderTotals' => $orderTotals]);
    }

    public function add($userId, $productId)
    {
        $product = Product::find($productId);
        $order = Order::where('user_id', $userId)->where('restaurant_id', $product->restaurant_id)->where('status', 'in cart')->get();
        if ($order->count() > 0) {
            $orderId = $order[0]->id;
        } else {
            $order = Order::create([
                'full_name' => 'undefined',
                'email' => 'undefined',
                'phone' => 'undefined',
                'address' => 'undefined',
                'status' => 'in cart',
                'user_id' => $userId,
                'restaurant_id' => $product->restaurant_id,
                'total' => 0,
            ]);
            $orderId = $order->id;
        }
        $productInCart = UserCart::where('user_id', $userId)->where('product_id', $productId)->count();
        if ($productInCart == 0) {
            $newProductInCart = new UserCart();
            $newProductInCart->user_id = $userId;
            $newProductInCart->product_id = $productId;
            $newProductInCart->qty = 1;
            $newProductInCart->order_id = $orderId;
            $newProductInCart->restaurant_id = $product->restaurant_id;
            $newProductInCart->total = $product->price;
            $newProductInCart->save();
        } else {
            DB::table('user_carts')->where('user_id', '=', $userId)
                ->where('product_id', '=', $productId)
                ->increment('qty', 1);
            DB::table('user_carts')->where('user_id', '=', $userId)
                ->where('product_id', '=', $productId)
                ->increment('total', $product->price);
        }
        $total = Order::find($orderId)->total;
        $total += $product->price;
        Order::find($orderId)->update(['total' => $total]);
        return redirect()->back();
    }

    public function delete($userId, $productId)
    {
        $productInCart = UserCart::where('user_id', $userId)->where('product_id', $productId)->count();
        $product = Product::find($productId);
        if ($productInCart > 0) {
            DB::table('user_carts')->where('user_id', '=', $userId)
                ->where('product_id', '=', $productId)
                ->delete();
            $cartItems = UserCart::where('user_id', $userId)->where('restaurant_id', $product->restaurant_id)->count();
            if ($cartItems == 0) {
                Order::where('user_id', $userId)->where('restaurant_id', $product->restaurant_id)
                    ->where('status', 'in cart')->delete();
            }
        }
        return back();
    }

    public function destroy($userId, $restaurantId)
    {
        $productInCart = UserCart::where('user_id', $userId)->where('restaurant_id', $restaurantId)->count();
        if ($productInCart > 0) {
            DB::table('user_carts')->where('user_id', '=', $userId)
                ->where('restaurant_id', '=', $restaurantId)
                ->delete();
            Order::where('user_id', $userId)->where('restaurant_id', $restaurantId)
                ->where('status', 'in cart')->delete();
        }
        return back();
    }

    public function addFromDetail(Request $request){
        if ($request->ajax()) {
            $product = Product::find($request->itemId);
            $order = Order::where('user_id', Auth::id())->where('restaurant_id', $product->restaurant_id)->where('status', 'in cart')->get();
            if ($order->count() > 0) {
                $orderId = $order[0]->id;
            } else {
                $order = Order::create([
                    'full_name' => 'undefined',
                    'email' => 'undefined',
                    'phone' => 'undefined',
                    'address' => 'undefined',
                    'status' => 'in cart',
                    'user_id' => Auth::id(),
                    'restaurant_id' => $product->restaurant_id,
                    'total' => 0,
                ]);
                $orderId = $order->id;
            }
            $productInCart = UserCart::where('user_id', Auth::id())->where('product_id', $request->itemId)->count();
            if ($productInCart == 0) {
                $newProductInCart = new UserCart();
                $newProductInCart->user_id = Auth::id();
                $newProductInCart->product_id = $request->itemId;
                $newProductInCart->qty = $request->qty;
                $newProductInCart->order_id = $orderId;
                $newProductInCart->restaurant_id = $product->restaurant_id;
                $newProductInCart->total = $product->price * $request->qty;;
                $newProductInCart->save();
            } else {
                $productInCart = UserCart::where('user_id', Auth::id())->where('product_id', $request->itemId)->first();
                if ($request->qty > $productInCart->qty) {
                    $changeAmount = $request->qty - $productInCart->qty;
                    DB::table('user_carts')->where('user_id', '=', Auth::id())
                        ->where('product_id', '=', $request->itemId)
                        ->increment('qty', $changeAmount);
                    DB::table('user_carts')->where('user_id', '=', Auth::id())
                        ->where('product_id', '=', $request->itemId)
                        ->increment('total', $product->price * $changeAmount);
                }else{
                    $changeAmount = $productInCart->qty - $request->qty;
                    DB::table('user_carts')->where('user_id', '=', Auth::id())
                        ->where('product_id', '=', $changeAmount)
                        ->decrement('qty', $changeAmount);
                    DB::table('user_carts')->where('user_id', '=', Auth::id())
                        ->where('product_id', '=', $request->itemId)
                        ->decrement('total', $product->price * $changeAmount);
                }
            }
            $total = Order::find($orderId)->total;
            $total += $product->price;
            Order::find($orderId)->update(['total' => $total]);
        }
        return redirect('/dashboard/cart');
    }

    public function updateNum(Request $request){
        if ($request->ajax()) {
            $cartItem = UserCart::find($request->itemId);
            if (is_numeric($request->qty)) {
                if ($request->qty == 0) {
                    $this->delete($cartItem->user_id, $cartItem->product_id);
                } else {
                    $changeAmount = $request->qty - $cartItem->qty;
                    $product = Product::find($cartItem->product_id);
                    $price = $product->discount ?? $product->price;
                    if ($cartItem->qty > $request->qty) {
                        $cartItem->total -= $price * $request->qty;
                        DB::table('orders')->where('user_id', '=', $cartItem->user_id)
                            ->where('restaurant_id', '=', $cartItem->restaurant_id)
                            ->where('status', '=', 'in cart')->decrement('total', $price*$request->qty);
                    } else {
                        $cartItem->total += $price * $changeAmount;
                        DB::table('orders')->where('user_id', '=', $cartItem->user_id)
                            ->where('restaurant_id', '=', $cartItem->restaurant_id)
                            ->where('status', '=', 'in cart')->increment('total', $price * $changeAmount);
                    }
                    $cartItem->qty = $request->qty;
                    $cartItem->save();
                }
            }
        }
        return back();
    }
    public function update(Request $request)
    {
        if ($request->ajax()) {
            $cartItem = UserCart::find($request->itemId);
            if (is_numeric($request->qty)) {
                if ($request->qty == 0) {
                    $this->delete($cartItem->user_id, $cartItem->product_id);
                } else {
                    $product = Product::find($cartItem->product_id);
                    $price = $product->discount ?? $product->price;
                    if ($cartItem->qty > $request->qty) {
                        $cartItem->total -= $price;
                        DB::table('orders')->where('user_id', '=', $cartItem->user_id)
                            ->where('restaurant_id', '=', $cartItem->restaurant_id)
                            ->where('status', '=', 'in cart')->decrement('total', $price);
                    } else {
                        $cartItem->total += $price;
                        DB::table('orders')->where('user_id', '=', $cartItem->user_id)
                            ->where('restaurant_id', '=', $cartItem->restaurant_id)
                            ->where('status', '=', 'in cart')->increment('total', $price);
                    }
                    $cartItem->qty = $request->qty;
                    $cartItem->save();
                }
            }
        }
        return back();
    }

}
