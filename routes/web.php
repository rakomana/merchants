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

Route::get('/careers', function () {
    return view('careers');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/my-page', function () {
    return view('my-page');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/get-a-quote', function () {
    return view('get-a-quote');
});

Route::get('/face-to-face-payments', function () {
    return view('face-to-face-payments');
});

Route::get('/online-payments', function () {
    return view('online-payments');
});

Route::get('/quote', function () {
    return view('quote');
});


