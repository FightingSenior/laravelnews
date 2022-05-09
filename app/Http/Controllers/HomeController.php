<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $categories = DB::table('categories')->where('status', true)->get();
        view()->share([
            'categories' => $categories
        ]);
    }
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
