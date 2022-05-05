<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function viewCategory()
    {
        $data = DB::table('categories')->get();
        return view('admin.categories.category', ['data' => $data]);
    }

    public function editCategory($id)
    {
        $singledata = DB::table('categories')->where('category_id', $id)->first();
        $data = DB::table('categories')->get();
        return view('admin.categories.edit_category', ['data' => $data]);
    }
}
