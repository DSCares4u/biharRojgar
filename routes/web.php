<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


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

Route::get('/',[HomeController::class,'index']);

Route::get('/get-job',[HomeController::class,'getJob']);
Route::get('/get-job/t&c',[HomeController::class,'getJobTC']);

Route::get('/hire',[HomeController::class,'hire']);
Route::get('/hire/t&c',[HomeController::class,'hireTC']);

Route::get('/sarkari-yojna', function () {
    return view('home.sarkariYojna');
});
Route::get('/sarkari-yojna-form', function () {
    return view('home.sarkariYojnaForm');
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

Route::get('/sarkari-job', function () {
    return view('home.sarkariJob');
});

Route::get('/private-job', function () {
    return view('home.privateJob');
});

Route::get('/job-app-forms', function () {
    return view('home.jobAppForms');
});

Route::get('/sarkari-job-apply-form', function () {
    return view('home.sarkariJobApplyForm');
});

Route::get('/admin',[AdminController::class,'dashboard']);

Route::get('/admin/manage-candidate',[AdminController::class,'manageCandidate']);
Route::get('/admin/manage-candidate/insert',[AdminController::class,'insertCandidate']);

Route::get('/admin/manage-hire',[AdminController::class,'manageHire']);
Route::get('/admin/manage-hire/insert',[AdminController::class,'insertHire']);
Route::get('/admin/manage-hire/plan',[AdminController::class,'manageHirePlan']);
Route::get('/admin/manage-hire/plan/insert',[AdminController::class,'insertHirePlan']);

Route::get('/admin/manage-yojna',[AdminController::class,'manageYojna']);
Route::get('/admin/manage-yojna/insert',[AdminController::class,'insertYojna']);
