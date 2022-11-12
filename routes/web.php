<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\brandController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\categoriesController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\transactionsController;

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
    return view('landingpage.home');
});

Route::get('/home', function () {
    return view('landingpage.home');
});

Route::get('/service', function () {
    return view('landingpage.service');
});

Route::get('/product', function () {
    return view('landingpage.product');
});

Route::get('/about', function () {
    return view('landingpage.about');
});

Route::get('/login', function () {
    return view('landingpage.loginform');
});

//---------------routing admin page--------------
Route::get('/administrator', function () {
    return view('admin.home');
});

Route::resource('brand',brandController::class);
Route::resource('cart',cartController::class);
Route::resource('categories',categoriesController::class);
Route::resource('products',productsController::class);
Route::resource('transactions',transactionsController::class);