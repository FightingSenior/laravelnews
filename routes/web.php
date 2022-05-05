<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');

Route::get('category', 'HomeController@category');

Route::get('post', 'HomeController@post');

Route::get('admin', 'AdminController@index');

Route::get('viewcategory', 'AdminController@viewCategory');

Route::post('addcategory','CrudController@insertData');

Route::get('edit-category/{id}','AdminController@editCategory');