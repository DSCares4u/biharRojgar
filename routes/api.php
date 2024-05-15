<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HireController;
use App\Http\Controllers\HirePlanController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\YojnaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\DocumentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/register',[UserController::class,'store'])->name('register.store');
Route::post('/login',[UserController::class,'login'])->name('login.submit');
Route::get('/register',[UserController::class,'index'])->name('register.index');
Route::get('/register/view/{id}',[UserController::class,'show']);
Route::put('/register/edit/{id}',[UserController::class,'update']);
Route::delete('/register/delete/{id}',[UserController::class,'destroy']);

Route::post('/hire',[HireController::class,'store'])->name('hire.store');
Route::get('/hire',[HireController::class,'index'])->name('hire.index');
Route::get('/hire/view/{id}',[HireController::class,'show']);
Route::put('/hire/edit/{id}',[HireController::class,'update']);
Route::delete('/hire/delete/{id}',[HireController::class,'destroy']);

Route::post('/hire-plan',[HirePlanController::class,'store'])->name('hire.plan.store');
Route::get('/hire-plan',[HirePlanController::class,'index'])->name('hire.plan.index');
Route::get('/hire-plan/view/{id}',[HirePlanController::class,'show']);
Route::put('/hire-plan/edit/{id}',[HirePlanController::class,'update']);
Route::delete('/hire-plan/delete/{id}',[HirePlanController::class,'destroy']);

Route::post('/job',[JobController::class,'store'])->name('job.store');
Route::get('/job',[JobController::class,'index'])->name('job.index');
// Route::get('/job/view/{id}',[JobController::class,'show']);
Route::put('/job/edit/{id}',[JobController::class,'update']);
Route::delete('/job/delete/{id}',[JobController::class,'destroy']);
Route::get('/job/view',[JobController::class,'show'])->middleware('auth');

Route::post('/address',[AddressController::class,'store'])->name('address.store');
Route::get('/address',[AddressController::class,'index'])->name('address.index');
Route::get('/address/view/{id}',[AddressController::class,'show']);
Route::put('/address/edit/{id}',[AddressController::class,'update']);
Route::delete('/address/delete/{id}',[AddressController::class,'destroy']);

Route::post('/document',[DocumentController::class,'store'])->name('document.store');
Route::get('/document',[DocumentController::class,'index'])->name('document.index');
Route::get('/document/view/{id}',[DocumentController::class,'show']);
Route::put('/document/edit/{id}',[DocumentController::class,'update']);
Route::delete('/document/delete/{id}',[DocumentController::class,'destroy']);

Route::post('/yojna',[YojnaController::class,'store'])->name('yojna.store');
Route::get('/yojna',[YojnaController::class,'index'])->name('yojna.index');
Route::get('/yojna/view/{id}',[YojnaController::class,'show']);
Route::put('/yojna/edit/{id}',[YojnaController::class,'update']);
Route::delete('/yojna/delete/{id}',[YojnaController::class,'destroy']);

Route::get('/job/view', function () {
    $id = auth()->id();
    $controller = app()->make('App\Http\Controllers\StudentApiController');
    return $controller->show($id);
})->middleware('auth');


Route::put('/job/edit', function (Request $req) {
    $id = auth()->id();
    $controller = app()->make('App\Http\Controllers\StudentApiController');
    return $controller->upgrade($req,$id);
})->middleware('auth');
