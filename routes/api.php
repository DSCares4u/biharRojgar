<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HireController;
use App\Http\Controllers\JobController;

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


Route::post('/hire',[HireController::class,'store'])->name('hire.store');
Route::get('/hire',[HireController::class,'index'])->name('hire.index');
Route::get('/hire/view/{id}',[HireController::class,'show']);
Route::put('/hire/edit/{id}',[HireController::class,'update']);
Route::delete('/hire/delete/{id}',[HireController::class,'destroy']);

Route::post('/job',[JobController::class,'store'])->name('job.store');
Route::get('/job',[JobController::class,'index'])->name('job.index');
Route::get('/job/view/{id}',[JobController::class,'show']);
Route::put('/job/edit/{id}',[JobController::class,'update']);
Route::delete('/job/delete/{id}',[JobController::class,'destroy']);