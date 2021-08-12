<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/');
});


//todo search controller
Route::get('/',[ProductController::class,'index']);

Route::post('/login',[UserController::class,'login']);
Route::get('detail/{id}',[ProductController::class,'detail']);

Route::get('search',[ProductController::class,'search']);
Route::get('category',[ProductController::class,'section']);
Route::post('cart',[ProductController::class,'add_to_cart']);
Route::get('cartlist',[ProductController::class,'cartList'] );
Route::get('removeitem/{id}',[ProductController::class,'removeItem'] );
Route::post('ordernow',[ProductController::class,'orderNow'] );
Route::post('processpayment',[ProductController::class,'processPayment'] );
Route::get('myorders',[ProductController::class,'myOrders'] );
Route::get('ordernow',function(){
    return redirect('cartlist');
} );

