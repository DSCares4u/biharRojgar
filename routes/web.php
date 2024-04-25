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
    return view('home.index');
});

Route::get('/get-job/t&c', function () {
    return view('home.getJobT&C');
});

Route::get('/get-job', function () {
    return view('home.getJob');
});

Route::get('/hire/t&c', function () {
    return view('home.hireT&C');
});
Route::get('/hire', function () {
    return view('home.hire');
});
