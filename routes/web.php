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

// HOMEPAGE
Route::get('/', function () {

    return view('home', [
        'title' => 'Classe 45 first Laravel',
    ]);
});

// ABOUT US
Route::get('/about', function () {

    return view('about', [
        'about' => 'Test pagina about',
    ]);
});