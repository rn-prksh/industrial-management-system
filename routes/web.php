<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\ViewController;

Route::get('/', function () {
    return view('index');
});
Route::get(
    '/new_customer',
    [CustomerController::class, 'create']
);
Route::post(
    '/new_customer',
    [CustomerController::class, 'store']
);


Route::get(
    '/delivery',
    [DeliveryController::class, 'create']
);
Route::post(
    '/delivery',
    [DeliveryController::class, 'store']
);


Route::get(
    '/view',
    [ViewController::class, 'create']
);
Route::post(
    '/view',
    [ViewController::class, 'store']
);
Route::get(
    '/dview',
    [ViewController::class, 'dcreate']
);
Route::post(
    '/dview',
    [ViewController::class, 'dstore']
);
