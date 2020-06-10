<?php

use Illuminate\Support\Facades\Route;

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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', function () {
    return view('user.profile');
})->middleware('auth');
Route::middleware(['auth','IsVendor'])->group(function (){
    

    Route::resource('/ads', 'AdsController');
    
    

   

    Route::PUT('/idcardtype', 'UserController@updateIDcardType')->name('idcardtype');

    Route::PUT('/idcardfront', 'UserController@updateIDcardFront')->name('idcardfront');

    Route::PUT('/idcardback', 'UserController@updateIDcardBack')->name('idcardback');

    Route::PUT('/updatephoto', 'UserController@updatephoto')->name('updatephoto');

    Route::PUT('/updateaccount', 'UserController@UpdateAccount')->name('updateaccount');

    Route::PUT('/changepassword', 'UserController@changePassword')->name('changepassword');
});
Route::get('/', 'user\ProductController@index')->name('productIndex');
Route::get('/cart/{slug}', 'CartController@addToCart')->name('addToCart');

Route::get('/cart-remove/{id}', 'CartController@remove')->name('remove');
Route::get('/cart', function () {
    return view('cart.cart');
});
Route::get('/check-out', function () {
    if(!session('cart')){
        return redirect()->back()->with('success','no item in cart!');
            }  else{
    return view('cart.check-out');
}})->middleware('auth');
Route::resource('/orders', 'OrderController');

Route::get('/my-orders', 'OrderController@myorder')->middleware('auth');

Route::resource('/categories', 'CategoryController');
Route::PUT('/updatemyprofile', 'UserController@UpdatePersonaLDetails')->name('UpdatePersonaLDetails');
Route::get('/register/vendor', function () {
    return view('auth.vendor-register');
});

Route::get('/all-products', 'admin\ProductsController@index')->name('allProducts');
Route::get('/all-orders', 'admin\ProductsController@Orders')->name('allOrders');
Route::get('/all-users', 'admin\UsersController@index')->name('allUsers');
Route::get('/users/{id}', 'admin\UsersController@UserProfile')->name('UserProfile1');
Route::get('/{slug}', 'user\ProductController@single');
