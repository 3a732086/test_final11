<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('home.index');
    }

    public function iindex()
    {
        return view('home.index');
    }

    public function personal()
    {
        return view('products.personal');
    }

    public function multiple()
    {
        return view('products.multiple');
    }

    public function single()
    {
        return view('products.single');
    }

}
