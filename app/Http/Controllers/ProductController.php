<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController
{
public function index()
{
    return view('products'); // Mengarahkan ke products.blade.php
}
}