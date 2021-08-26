<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $table = 'restaurants';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function products(){
        return $this->hasMany(Product::class,'restaurant_id', 'id');
    }

    public function restaurantMenus(){
        return $this->hasMany(RestaurantMenu::class, 'restaurant_id', 'id');
    }

}
