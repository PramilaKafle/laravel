<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
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
    return redirect('login');
});
Route::view("/register",'register');
Route::post("/login",[UserController::class,'login']);
Route::post("/register",[UserController::class,'register']);
Route::get("/",[ProductController::class,'index']);
Route::get("/detail/{id}",[ProductController::class,'detail']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartList']);
Route::get("removecart/{id}",[ProductController::class,'removeCart']);
Route::get("ordernow",[ProductController::class,'orderNow']);
Route::post("orderplace",[ProductController::class,'orderPlace']);

//admin
Route::get('admin',[AdminController::class,'index']);
Route::post('admin.auth',[AdminController::class,'auth']);

// Route::group(['middleware'=>'admin_auth'],function(){
    Route::get('admin.dashboard',[AdminController::class,'dashboard']);
   Route::get('admin.category',[CategoryController::class,'index']);
   Route::post('admin.insert',[CategoryController::class,'Insert']);
   
   Route::get('/admin.editproduct/{id}', [CategoryController::class, 'editProduct'])->name('admin.editproduct');
   Route::post('/admin.update/{id}',[CategoryController::class,'Update'])->name('admin.update');

Route::delete('/admin.deleteproduct/{id}', [CategoryController::class, 'deleteProduct']);

Route::get('/admin.logout', function () {
    Session::forget('ADMIN_LOGIN');
    return redirect('admin');
});




//});

