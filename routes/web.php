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

Route::get('/sarkari-job', function () {
    return view('home.sarkariJob');
});

Route::get('/sarkari-job-form', function () {
    return view('home.sarkariJobForm');
});

Route::get('/address', function () {
    return view('home.address');
});
Route::get('/documents', function () {
    return view('home.documents');
});

Route::get('/sarkari-yojna', function () {
    return view('home.sarkariYojna');
});

Route::get('/private-job', function () {
    return view('home.privateJob');
});
