<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuejaController;
use App\Http\Controllers\ClienteController;
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
    return view('auth.login');
});
Route::get('/login', function (){

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/Quejas', QuejaController::class);//->middleware(["auth"]);
Route::resource('/Cliente', ClienteController::class);//->middleware(["auth"]);

