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

Route::get('/', function () {
    return view('index');
});

Route::get('/categories', function () {
    return view('categories/categories');
});

Route::get('/categories-entry', function () {
    return view('categories/categories-entry');
});

Route::get('/categories-edit', function () {
    return view('categories/categories-edit');
});

Route::get('/categories-delete', function () {
    return view('categories/categories-delete');
});
