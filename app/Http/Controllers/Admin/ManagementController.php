<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;
//use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class ManagementController extends Controller
{
    //
    public function showDashboard(){
        return view('admin.management.admin_dashboard');
    }

    public function showRestaurants(){
        $restaurants = DB::table('restaurants')->where('stop','0')->orderBy('status')->get();
        return View::make('admin.management.admin_restaurant',['restaurants'=>$restaurants]);
    }

    public function searchRestaurantResult(Request $request)
    {
        $oldName = '';
        if ($request->input('restaurant-name') !== null) {
            $name = $request->input('restaurant-name');
            $restaurants = DB::table('restaurants')
                ->where('stop', 0)
                ->where('restaurant_name', 'like', "%$name%")
                ->get();
            if (count($restaurants) == 0) {
                $restaurants = null;
                $oldName = $name;
            }
        }
        dd($restaurants);
        return view('admin.management.admin_restaurant_search', compact('restaurants', 'restaurants'),compact('oldName','oldName'));
    }

    public function showDetail($id){
        $restaurant_detail = DB::table('restaurants')->where('id',$id)->get();
        return view('admin.management.admin_restaurant_detail',compact('restaurant_detail',$restaurant_detail));
    }
    public function updateStatus($id,$status){
        $restaurant_detail = Restaurant::find($id);
        $user_id = User::find($restaurant_detail->user_id);
        if ($status == 1){
            $user_id->role = 2;
            $user_id->save();
        }
        if (isset($restaurant_detail)){
            $restaurant_detail->status = ($status + 1 );
            $restaurant_detail->save();
        }
        return back();
    }

    public function stopRestaurant($id){
        $restaurant_detail = Restaurant::find($id);
            $restaurant_detail->stop = 1;
            $restaurant_detail->save();
        return back();
    }

    public function download($file,$id){
        if (!empty($file)) {
            $file_name = basename($file);
//            $file_path = "./fileUpload/" . $file_name;
            $file_path = public_path('./fileUpload/'.trim($file_name));
//            dd(file_exists($file_path));
            if (file_exists($file_path) == true){
                return response()->download($file_path);
            }else{
                echo "File not exit! <a href='/management-restaurant-detail/".$id."' class='btn btn-dark' >Back</a>";
            }
        }
    }

    public function delete($id){
        $restaurant = Restaurant::find($id);
        if (!empty($restaurant)){
            $restaurant->delete();
        }
        return redirect('/management-restaurants');
    }
}
