<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController
{
    public function index()
    {
        return view('home');
    }
}