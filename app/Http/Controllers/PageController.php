<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController
{
    public function index()
    {
        // Mengarahkan ke halaman utama (welcome.blade.php)
        return view('welcome');
    }
}