<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front;
use App\Http\Controllers\Admin;
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

/*
 * FRONT ROUTES
 * */

//    index route
Route::get('/', [Front\HomeController::class, 'index'])->name('showIndex');
Route::get('/how-it-work', [Front\HowItWorkController::class, 'howItWork']);
Route::get('/search-found', [Front\HomeController::class, 'search']);
Route::get('/search-not-found', [Front\HomeController::class, 'searchNotFound']);

// restaurant routes
Route::get('/restaurant-detail', [Front\RestaurantDetailController::class, 'restaurantDetail']);
Route::get('/register-reservation/{userId}', [Front\RegisterReservationController::class, 'registerReservation'])->middleware('auth');
Route::get('/restaurant-found', [Front\RestaurantController::class, 'showResult']);

//register restaurant
Route::post('/register-reservation/add',[Front\RegisterReservationController::class,'add']);

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
    Route::get('/setting',[Front\HomeController::class, 'showAccountSetting'])->middleware('auth');
    Route::post('/setting/update-profile', [Front\HomeController::class, 'updateProfile'])->middleware('auth');
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
    Route::post('/cancel', [Front\OrderController::class, 'cancelOrder'])->middleware('auth');
});

/*
 * ADMIN ROUTES
 * */

// index route
Route::get('/admin-dashboard', [Admin\HomeController::class, 'show'])->middleware('auth')->name('showAdmin');

//Order routes
Route::get('/admin-order', [Admin\OrderController::class, 'showOrders'])->middleware('auth');
Route::get('/admin-order/{id}', [Admin\OrderController::class, 'orderDetail'])->middleware('auth');
Route::get('/order-start-delivery/{orderId}', [Admin\OrderController::class, 'startDelivery'])->middleware('auth');
Route::post('/admin-order/mark-order-delivered',[Admin\OrderController::class,'markDelivered']);
Route::post('/admin-order/accept', [Admin\OrderController::class, 'acceptOrder'])->middleware('auth');
Route::post('/admin-order/reject', [Admin\OrderController::class, 'rejectOrder'])->middleware('auth');

// Product routes
Route::get('/admin-product', [Admin\ProductController::class, 'showProducts'])->middleware('auth');
Route::get('/admin-product-edit/{id}', [Admin\ProductController::class, 'productEditShow'])->middleware('auth');
Route::get('/admin-add-product', [Admin\ProductController::class, 'showAdd'])->middleware('auth');
Route::get('/admin-delete-product/{productId}',[Admin\ProductController::class, 'deleteProduct'])->middleware('auth');
Route::get('/admin-product-edit/images/delete/{productImageId}',[Admin\ProductController::class, 'deleteImage'])->middleware('auth');
Route::post('/admin-product-edit/images', [Admin\ProductController::class, 'editImages']);
Route::post('/admin-product-edit/info', [Admin\ProductController::class, 'editInfo']);
Route::post('/admin-add-product', [Admin\ProductController::class, 'addProduct']);

//Restaurant routes
Route::get('/admin-restaurant', [Admin\RestaurantController::class,'showRestaurantInfo'])->middleware('auth');
Route::get('/admin-restaurant/edit-images/delete/{RestaurantImageId}',[Admin\RestaurantController::class, 'deleteImage'])->middleware('auth');
Route::post('/admin-restaurant/edit-avatar', [Admin\RestaurantController::class, 'editAvatar']);
Route::post('/admin-restaurant/edit-images', [Admin\RestaurantController::class, 'editImages']);
Route::post('/admin-restaurant/edit-info', [Admin\RestaurantController::class, 'editInfo']);
/*
 * MANAGEMENT ROUTES
 * */

Route::get('/management-dashboard', [Admin\ManagementController::class,'showDashboard'])->name('showManagement')->middleware('auth');
Route::get('/management-restaurants', [Admin\ManagementController::class,'showRestaurants'])->middleware('auth');
Route::get('/management-restaurant-detail/{id}', [Admin\ManagementController::class,'showDetail'])->middleware('auth');
Route::get('/management-restaurant-detail/status/{id}/{status}', [Admin\ManagementController::class,'updateStatus'])->middleware('auth');

