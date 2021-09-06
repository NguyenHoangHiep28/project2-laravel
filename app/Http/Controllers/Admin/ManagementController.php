<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    //
    public function showDashboard(){
        return view('admin.management.admin_dashboard');
    }

    public function showRestaurants(){
        return view('admin.management.admin_restaurant');
    }

    public function showDetail(){
        return view('admin.management.admin_restaurant_detail');
    }
}
