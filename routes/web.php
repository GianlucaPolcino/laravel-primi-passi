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

Route::get('home', function () {
    return view('home');
})->name('home');

Route::get('another-page', function () {
    return view('page-2');
})->name('page-2');

Route::get('third-page', function () {
    $data = [
        'name' => 'Gianluca',
    ];
    return view('page-3', $data);
})->name('page-3');

