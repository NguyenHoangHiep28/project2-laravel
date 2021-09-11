<?php

namespace App\Http\Controllers\Front;

use App\Models\Category;
use App\Models\Restaurant;
use App\Models\RestaurantMenu;
use Illuminate\Http\Request;

class RestaurantController
{
    public function show(){
        $categories = Category::all();
        $restaurants = Restaurant::where('status', 1)->orderBy('created_at')->paginate(6);
        return view('front.shop.restaurants', compact('restaurants', 'categories'));
    }

    public function searchRestaurant(Request $request){
        $categories = Category::all();
        $restaurantName = $request->input('key-word');
        $restaurants = Restaurant::where('status', 1)->where('restaurant_name', 'like', "%$restaurantName%")->orderBy('created_at')->get();
        if (count($restaurants) > 0){
            $restaurants = Restaurant::where('status', 1)->where('restaurant_name', 'like', "%$restaurantName%")->orderBy('created_at')->paginate(9);
            $search = 'Search Restaurant';
            return view('front.shop.restaurants', compact('restaurants', 'search', 'categories'))->with(['keyWord' => $restaurantName]);
        }else{
            return redirect('/restaurant-not-found')->with(['keyWord' => $restaurantName]);
        }
    }
    public function showNotfound(){
        $categories = Category::all();
        return view('front.shop.restaurantNotFound', compact('categories'));
    }

    public function category($cate_id){
        $categories = Category::all();
        $restaurantMenus = RestaurantMenu::where('cate_id', $cate_id);
        $ids = $restaurantMenus->get('restaurant_id');
        $restaurants = Restaurant::whereIn('id', $ids)->limit(24)->paginate(6);
        return view('front.shop.restaurants', compact('restaurants', 'categories'));
    }
}

