<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;
//use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class ManagementController extends Controller
{
    //
    public function showDashboard(){
        return view('admin.management.admin_dashboard');
    }

    public function showRestaurants(){
        $restaurants = DB::table('restaurants')->orderBy('status')->get();
        return View::make('admin.management.admin_restaurant',['restaurants'=>$restaurants]);
    }

    public function showDetail($id){
        $restaurant_detail = DB::table('restaurants')->where('id',$id)->get();
        return view('admin.management.admin_restaurant_detail',compact('restaurant_detail',$restaurant_detail));
    }
    public function updateStatus($id,$status){
        $restaurant_detail = Restaurant::find($id);
        if (isset($restaurant_detail)){
            $restaurant_detail->status = ($status + 1 );
            $restaurant_detail->save();
        }
        return back();
    }
}
