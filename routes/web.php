<?php

use App\Http\Middleware\CheckFromName;
use App\Http\Controllers\Admin\ProductController As AdminProductController ;
use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\HomeController::class,'index'] )->name('products.index');

// Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])-> middleware('name.check:admin'); 
Route::get('/products', [App\Http\Controllers\ProductController::class, 'index']); 
Route::get('/products/{id}', [App\Http\Controllers\ProductController::class, 'show']); 

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact']); 
Route::get('/cart', [App\Http\Controllers\CartController::class, 'AddCart']); 
Route::post('/send_massage', [App\Http\Controllers\HomeController::class, 'sendMassage']); 

Route::prefix('auth')->group(function(){

    Route::get('Login',[App\Http\Controllers\AuthController::class,'login'])->name('auth.login');
    Route::post('Login',[App\Http\Controllers\AuthController::class,'loginSubmit'])->name('login.submit');
    Route::post('logout',[App\Http\Controllers\AuthController::class,'logout'])->name('auth.logout');
    Route::get('register',[App\Http\Controllers\AuthController::class,'register'])->name('auth.register');
    Route::post('register',[App\Http\Controllers\AuthController::class,'createUser'])->name('auth.create.user');

});

// admin


Route::prefix('admin')->middleware('auth')->group(function(){

    Route::resource('products',AdminProductController::class);

});