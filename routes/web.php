<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//    index route
Route::get('/', [Front\HomeController::class, 'index']);
Route::get('/how-it-work', [Front\HowItWorkController::class, 'howItWork']);
Route::get('/search-found', [Front\HomeController::class, 'search']);
Route::get('/search-not-found', [Front\HomeController::class, 'searchNotFound']);

// restaurant routes
Route::get('/restaurant-detail', [Front\RestaurantDetailController::class, 'restaurantDetail']);
Route::get('/register-reservation', [Front\RegisterReservationController::class, 'registerReservation']);
Route::get('/restaurant-found', [Front\RestaurantController::class, 'showResult']);

//  login & register routes
Route::get('/login', function (){
    return view('front.auth.login');
})->name('login');
Route::get('/register', function (){
    $login = null;
    return view('front.auth.register', compact('login'));
});
Route::post('/login', [Front\HomeController::class, 'login']);
Route::post('/register', [Front\HomeController::class, 'register']);
Route::get('/logout', [Front\HomeController::class, 'logout']);

// user dashboard routes
Route::prefix('/dashboard')->group(function (){
    Route::get('/setting', function (){ return view('front.dashboard.setting');})->middleware('auth');
    Route::get('/cart',[Front\CartController::class, 'show']);
    Route::get('/orders',[Front\OrderController::class, 'showOrderList']);
});
// cart
Route::prefix('/cart')->group(function (){
    Route::get('/add/{userId}/{productId}', [Front\CartController::class, 'add'])->middleware('auth');
    Route::get('/delete/{userId}/{productId}', [Front\CartController::class, 'delete'])->middleware('auth');
    Route::get('/destroy/{userId}/{restaurantId}', [Front\CartController::class, 'destroy'])->middleware('auth');
    Route::get('/update', [Front\CartController::class, 'update'])->middleware('auth');
});
// Order routes
Route::prefix('/order')->group(function (){
    Route::get('/place-order/{userId}/{restaurantId}', [Front\OrderController::class, 'show'])->middleware('auth');
    Route::post('/place-order', [Front\OrderController::class, 'placeOrder'])->middleware('auth');
    Route::get('/order-detail/{orderId}', [Front\OrderController::class, 'orderDetail'])->middleware('auth');
});
