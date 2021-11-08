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
    return view('welcome');
});


Route::get('/index', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('index');
});

Route::get('/loginIn', function () {
    return view('loginIn');
});

// Route::get('/index2', function () {
//     return view('index2');
// });

Auth::routes();

Route::get('/loginIn', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Lo comento por repetición
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
