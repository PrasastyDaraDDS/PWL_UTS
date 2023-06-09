<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RotiController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get("/logout",[LoginController::class,"logout"]);
Route::middleware(["auth"])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource("/roti",RotiController::class);
    Route::get('/', function () {
        return view('welcome');
    });
});
