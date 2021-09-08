<?php


namespace App\Http\Controllers\Front;


use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterReservationController
{
    public function registerReservation($userID){
        $restaurant = DB::table('restaurants')->where('user_id',$userID)->first();
        if (isset($restaurant)){
            $restaurant_status = $restaurant->status;
        }else{
            $restaurant_status = 0;
        }
        return view('front.restaurant.registerReservation',compact('restaurant_status','restaurant_status'));
    }

    public function add(Request $request){
        if (isset($request)){
            $newRestaurant = new Restaurant();
            $newRestaurant->restaurant_name = $request->name_restaurant;
            $newRestaurant->address = $request->street_restaurant.', '.$request->city_restaurant.', '.$request->country_restaurant;
            $newRestaurant->telephone = $request->phone_restaurant;
            $newRestaurant->email = $request->email_restaurant;
            $newRestaurant->owner_name = $request->name_manager;
            $newRestaurant->tel_owner = $request->phone_manager;
            $newRestaurant->user_id = $request->user_id;

            if ($request->hasFile('file_restaurant')){
                $file = $request->file_restaurant;
                $newRestaurant->business_license = $file->getClientOriginalName();
                $file->move('./fileUpload', $file->getClientOriginalName());
            }

            if ($request->hasFile('avatar_restaurant')){
                $avatar = $request->avatar_restaurant;
                $newRestaurant->avatar = $avatar->getClientOriginalName();
                $avatar->move('./images', $avatar->getClientOriginalName());
            }

            $newRestaurant->save();
        }
        return redirect()->back();
    }
}
