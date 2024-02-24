<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',[\App\Http\Controllers\HomeController::class,'index'])->name('home-index');

Route::get('/login',[\App\Http\Controllers\HomeController::class,'login'])->name('login');
Route::post('/login',[\App\Http\Controllers\HomeController::class,'checkLogin'])->name('post-login');

Route::get('/register',[\App\Http\Controllers\HomeController::class,'register'])->name('home-register');
Route::post('/register',[\App\Http\Controllers\HomeController::class,'checkRegister']);

Route::group(['prefix'=>'admin'],function (){
    Route::get('/home',[\App\Http\Controllers\AdminController::class,'index'])->name('admin-index');
    Route::get('/product',[\App\Http\Controllers\ProductController::class,'index'])->name('product-index');
    Route::get('/product/input',[\App\Http\Controllers\ProductController::class,'create'])->name('product-input');
    Route::post('/product/input',[\App\Http\Controllers\ProductController::class,'input'])->name('product-post');

});
Route::resources(['product' => \App\Http\Controllers\ProductController::class]);
