<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantMenu extends Model
{
    use HasFactory;

    protected $table = 'restaurant_menu';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
