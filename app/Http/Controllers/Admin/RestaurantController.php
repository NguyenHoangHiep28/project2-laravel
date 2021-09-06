<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    //
    public function showRestaurantInfo(){
        return view('admin.restaurant.restaurant_info');
    }
}
