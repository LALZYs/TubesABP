<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RadminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LadminController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomtypeController;
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
    return view('layout.index');
})->name('index');

Route::get('/login', function () {
    return view('login.LoginAS');
})->name('login');

Route::get('/register', function () {
    return view('register.RegisterAS');
})->name('register');

Route::get('/ladmin', function () {
    return view('login.ladmin');
})->name('ladmin');

Route::get('/ltourguide', function () {
    return view('login.ltourguide');
})->name('ltourguide');

Route::get('/radmin', function () {
    return view('register.radmin');
})->name('radmin');

Route::get('/about', function () {
    return view('about.about');
})->name('about');

Route::get('/loggedmin', function () {
    return view('loggedmin.layout');
})->name('loggedmin');


Route::post('/radmin',[RadminController::class,'store']);
Route::post('/loggedmin',[LadminController::class,'store']);

Route::get('admin', function () {
    return view('dashboard');
});
//  roomType route
Route::get('admin/roomtype/{id}/delete', [RoomtypeController::class, 'destroy']);
Route::resource('admin/roomtype', RoomtypeController::class);

//  room route
Route::get('admin/room/{id}/delete', [RoomController::class, 'destroy']);
Route::resource('admin/room', RoomController::class);


