<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DeliverController;
use App\Http\Controllers\FlowerController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CourierController;


Route::get('/', function () {
    return view('pages.auth.login');
});

//
Route::middleware(['auth'])->group(function(){
    Route::get('home', function(){
        return view('pages.dashboard');
    })->name('home');

    Route::resource('user', UserController::class);
    Route::resource('customer', CustomerController::class);
    Route::resource('flower', FlowerController::class);
    Route::resource('delivery', DeliverController::class);
    Route::resource('orderdetail', OrderDetailController::class);
    Route::resource('payment', PaymentController::class);
    Route::resource('order', OrderController::class);
    
    Route::resource('courier', CourierController::class);
});
