<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;

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

Route::get('/clear', function() {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');

    return "Cleared!";

});

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function(){
    return view('dashboard');
})->name('dashboard');
//Route::get('/dashboard', function(){
//    return view('dashboard');
//})->name('dashboard');

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::middleware(['auth:sanctum', 'verified'])->get('/home', function(){
    return view('home');
})->name('home');
