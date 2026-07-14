<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Wajib dipanggil agar Model Product bisa digunakan

class ProductController
{
    public function index()
    {
        // Mengambil data produk beserta relasi kategorinya, dibatasi 10 data per halaman
        $products = Product::with('category')->paginate(10);
        
        // Mengirim variabel $products ke file tampilan products.blade.php
        return view('products', compact('products'));
    }
}