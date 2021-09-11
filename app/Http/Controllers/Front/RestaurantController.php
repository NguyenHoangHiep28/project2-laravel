<?php

namespace App\Http\Controllers\Front;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\View\View;
use mysql_xdevapi\Table;

class RestaurantController
{
    public function showResult(){
        return view('front.shop.restaurantFound');
    }
}
