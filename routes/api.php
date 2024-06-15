<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HireController;
use App\Http\Controllers\HirePlanController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SarkariJobApplyController;
use App\Http\Controllers\SarkariJobController;
use App\Http\Controllers\YojnaController;
use App\Http\Controllers\YojnaCategoryController;
use App\Http\Controllers\YojnaFormController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CandidateController;
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
Route::get('/hire-role',[HireController::class,'roleIndex'])->name('role.index');
Route::get('/hire-role/view/{id}',[HireController::class,'roleShow']);
Route::get('/hire/view/{id}',[HireController::class,'show']);
Route::post('/hire-role/edit/{id}',[HireController::class,'roleUpdate']);
Route::delete('/hire/delete/{id}',[HireController::class,'destroy']);

Route::post('/hire-plan',[HirePlanController::class,'store'])->name('hire.plan.store');
Route::get('/hire-plan',[HirePlanController::class,'index'])->name('hire.plan.index');
Route::get('/hire-plan/view/{id}',[HirePlanController::class,'show']);
Route::put('/hire-plan/edit/{id}',[HirePlanController::class,'update']);
Route::delete('/hire-plan/delete/{id}',[HirePlanController::class,'destroy']);

Route::post('/manual-job',[JobController::class,'manualStore'])->name('manual.job.store');
Route::get('/manual-job',[JobController::class,'manualJobIndex'])->name('manual.job.index');
Route::get('/manual-job/view/{id}',[JobController::class,'manualJobShow']);
Route::put('/manual-job/edit/{id}',[JobController::class,'manualJobUpdate']);
Route::delete('/manual-job/delete/{id}',[JobController::class,'manualJobDelete']);

Route::post('/job',[JobController::class,'store'])->name('job.store');
Route::get('/job',[JobController::class,'index'])->name('job.index');
Route::get('/job/view/{id}',[JobController::class,'show']);
Route::put('/job/edit/{id}',[JobController::class,'update']);
Route::delete('/job/delete/{id}',[JobController::class,'destroy']);

Route::post('/sarkari-job-apply',[SarkariJobApplyController::class,'store'])->name('sarkari.job.apply.store');
Route::get('/sarkari-job-apply',[SarkariJobApplyController::class,'index'])->name('sarkari.job.apply.index');
Route::get('/sarkari-job-apply/view/{id}',[SarkariJobApplyController::class,'show']);
Route::put('/sarkari-job-apply/edit/{id}',[SarkariJobApplyController::class,'update']);
Route::delete('/sarkari-job-apply/delete/{id}',[SarkariJobApplyController::class,'destroy']);

Route::post('/candidate',[CandidateController::class,'store'])->name('candidate.store');
Route::get('/candidate',[CandidateController::class,'index'])->name('candidate.index');
Route::get('/candidate/view/{id}',[CandidateController::class,'show']);
Route::put('/candidate/edit/{id}',[CandidateController::class,'update']);
Route::delete('/candidate/delete/{id}',[CandidateController::class,'destroy']);

Route::post('/address',[AddressController::class,'store'])->name('address.store');
Route::get('/address',[AddressController::class,'index'])->name('address.index');
Route::get('/address/view/{id}',[AddressController::class,'show']);
Route::put('/address/edit/{id}',[AddressController::class,'update']);
Route::delete('/address/delete/{id}',[AddressController::class,'destroy']);

Route::post('/document',[DocumentController::class,'store'])->name('document.store');
Route::get('/document',[DocumentController::class,'index'])->name('document.index');
Route::get('/document/view/{id}',[DocumentController::class,'show']);
Route::post('/document/edit/{id}',[DocumentController::class,'update']);
Route::delete('/document/delete/{id}',[DocumentController::class,'destroy']);

Route::post('/yojna',[YojnaController::class,'store'])->name('yojna.store');
Route::get('/yojna',[YojnaController::class,'index'])->name('yojna.index');
Route::get('/yojna/view/{id}',[YojnaController::class,'show']);
Route::post('/yojna/edit/{id}',[YojnaController::class,'update']);
Route::delete('/yojna/delete/{id}',[YojnaController::class,'destroy']);

Route::post('/admin/yojna/category',[YojnaCategoryController::class,'store'])->name('yojna.category.store');
Route::get('/admin/yojna/category',[YojnaCategoryController::class,'index'])->name('yojna.category.index');
Route::get('/admin/yojna/category/view/{id}',[YojnaCategoryController::class,'show']);
Route::put('/admin/yojna/category/edit/{id}',[YojnaCategoryController::class,'update']);
Route::delete('/admin/yojna/category/delete/{id}',[YojnaCategoryController::class,'destroy']);

Route::post('/admin/manage/yojna-form',[YojnaFormController::class,'store'])->name('yojna.form.store');
Route::get('/admin/manage/yojna-form',[YojnaFormController::class,'index'])->name('yojna.form.index');
Route::get('/admin/manage/yojna-form/view/{id}',[YojnaFormController::class,'show']);
Route::put('/admin/manage/yojna-form/edit/{id}',[YojnaFormController::class,'update']);
Route::delete('/admin/manage/yojna-form/delete/{id}',[YojnaFormController::class,'destroy']);

Route::post('/admin/sarkari-job',[SarkariJobController::class,'store'])->name('sarkari-job.store');
Route::get('/admin/sarkari-job',[SarkariJobController::class,'index'])->name('sarkari-job.index');
Route::get('/admin/sarkari-job/view/{id}',[SarkariJobController::class,'show']);
Route::post('/admin/sarkari-job/edit/{id}',[SarkariJobController::class,'update']);
Route::delete('/admin/sarkari-job/delete/{id}',[SarkariJobController::class,'destroy']);
