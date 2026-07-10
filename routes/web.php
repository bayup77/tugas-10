<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

// Mengelola Halaman (menggunakan PageController)
Route::get('/', [PageController::class, 'index']);

// Mengelola Produk (menggunakan ProductController)
Route::get('/products', [ProductController::class, 'index']);

// Route lainnya yang sudah kamu buat sebelumnya
Route::get('/cart', function () {
    return "Ini adalah halaman Keranjang";
});
Route::get('/checkout', [OrderController::class, 'index']);