<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

// Route Halaman Utama (/)
Route::get('/', function () {
    return view('welcome');
});

// Route /products
Route::get('/products', [ProductController::class, 'index']);

// Route /cart (menggunakan closure sederhana sementara)
Route::get('/cart', function () {
    return "Ini adalah halaman Keranjang";
});

// Route /checkout
Route::get('/checkout', [OrderController::class, 'index']);