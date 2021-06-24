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

Route::get('/event_detail', function () {
    return view('event_detail');
});

Route::get('/confirmation', function () {
    return view('confirmation');
});

Route::get('/information', function () {
    return view('pay_contact_info');
});

Route::get('/shop_info', function () {
    return view('shop_info');
});

Route::get('/category', function () {
    return view('category');
});
