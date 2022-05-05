<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    public function category()
    {
        return view('home.category');
    }
    public function post()
    {
        return view('home.article');
    }
}
