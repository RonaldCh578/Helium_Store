<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CustomAuthController;

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

//ADMINISTRADOR
Route::get('/dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('/login', [CustomAuthController::class, 'index'])->name('login');
Route::post('/custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('/registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('/custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('/signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::post('/dashboard', [EventController::class, 'dashboard'])->name('auth.index');
Route::get('/dashboard/create', [EventController::class, 'create'])->name('auth.create');
Route::post('/dashboard/store', [EventController::class, 'store'])->name('events.store');
Route::post('/dashboard/{id}', [EventController::class, 'destroy'])->name('events.destroy');
Route::get('/dashboard/show/{id}', [EventController::class, 'showEvent'])->name('events.show');
//Route::get('/dashboard/edit/{id}', [EventController::class, 'editEvent'])->name('events.edit');


//USUARIO

Route::get('/', [EventController::class, 'show']);

Route::get('/category/{categoria}', [EventController::class, 'showCategories']);

Route::get('/event_detail/{id}', [EventController::class, 'showDetails']);

Route::post('shop_info', [EventController::class, 'showShopInfo']);

Route::post('pay_info', [EventController::class, 'sendData']);

Route::post('confirmation', [EventController::class, 'sendDataConfirmation']);


Route::view("event_detail", "shop_info");

Route::view("shop_info", "pay_info");

Route::view("pay_info", "confirmation");


/*Route::get('/confirmation', function () {
    return view('confirmation');
});

Route::get('/information', function () {
    return view('pay_contact_info');
});*/

