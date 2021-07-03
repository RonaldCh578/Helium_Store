<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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

/*Route::get('/', function () {
    return view('index');
});*/

/*Route::resource('/', EventController::class, 'show');*/
Route::get('/', [EventController::class, 'show']);

Route::get('/category/{categoria}', [EventController::class, 'showCategories']);

Route::get('/event_detail/{id}', [EventController::class, 'showDetails']);

Route::get('/confirmation', function () {
    return view('confirmation');
});

Route::get('/information', function () {
    return view('pay_contact_info');
});

Route::get('/shop_info', function () {
    return view('shop_info');
});

