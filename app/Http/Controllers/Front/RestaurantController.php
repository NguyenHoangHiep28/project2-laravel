<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

class RestaurantController
{
    public function showResult(){
        return view('front.shop.restaurantFound');
    }
}
