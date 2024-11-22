<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\PaymentMethodController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\SettingController;

Route::post('login', [AuthController::class, 'login']);

Route::apiResource('products', ProductController::class)->middleware(['auth:sanctum']);
Route::get('products/barcode/{barcode}', [ProductController::class, 'showByBarcode'])->middleware(['auth:sanctum']);
Route::get('payment-methods', [PaymentMethodController::class, 'index'])->middleware(['auth:sanctum']);
Route::apiResource('orders', OrderController::class)->middleware(['auth:sanctum']);
Route::get('setting', [SettingController::class, 'index'])->middleware(['auth:sanctum']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


