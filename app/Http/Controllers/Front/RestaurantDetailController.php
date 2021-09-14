<?php


namespace App\Http\Controllers\Front;


use Illuminate\Support\Facades\DB;
class RestaurantDetailController
{
    public function restaurantDetail($id){
        $restaurant_detail = DB::table('restaurants')
            ->where('restaurants.id',$id)
            ->first();
        $restaurant_images = DB::table('restaurant_images')
            ->where('restaurant_id',$id)
            ->get();
        $restaurant_menu = DB::table('categories')
            ->join('restaurant_menu','cate_id','=','restaurant_menu.cate_id')
            ->select('restaurant_menu.*','categories.cate_name')
            ->where('restaurant_menu.restaurant_id',$id)
            ->get();
        $restaurant_product = DB::table('categories')
            ->join('products','cate_id','=','products.cate_id')
            ->select('products.*','categories.cate_name')
            ->where('restaurant_id',$id)
            ->get();
//        dd($restaurant_menu);
        return view('front.restaurant.restaurantDetail')->with('restaurant_detail',$restaurant_detail)
            ->with('restaurant_images',$restaurant_images)
            ->with('restaurant_menu',$restaurant_menu)
            ->with('restaurant_product',$restaurant_product);
    }
}
