<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthOtpController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SarkariJobApplyController;

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

Route::get('/',[HomeController::class,'index'])->name('home');


Route::get('/get-job/t&c',[HomeController::class,'getJobTC']);
Route::post('/logout', [AuthOtpController::class, 'logout'])->name('logout');

Route::middleware("auth")->group(function (){
    Route::get('/add-candidate',[HomeController::class,'addCandidate']);
    Route::get('/address',[HomeController::class,'address']);
    Route::get('/documents',[HomeController::class,'documents']);

    Route::get('/manual-form',[HomeController::class,'manualForm']);

    Route::get('/viewSarkariJobForm/{id}',[HomeController::class,'viewSarkariJobForm']);
    Route::get('/viewPrivateJobForm/{id}',[HomeController::class,'viewPrivateJobForm']);
    Route::get('/sarkari-job/confirm',[HomeController::class,'sarkariJobConfirm']);
    Route::get('/private-job/confirm',[HomeController::class,'PrivateJobConfirm']); 
    Route::get('/checkApplicationStatus/{jobId}', [JobController::class, 'checkApplicationStatus'])->name('checkApplicationStatus');
    Route::get('/checkApplicationStatus/{jobId}', [SarkariJobApplyController::class, 'checkApplicationStatus'])->name('checkApplicationStatus');
      
});

Route::get('/hire',[HomeController::class,'hire']);
Route::get('/hire/t&c',[HomeController::class,'hireTC']);
Route::get('/hire/pay-later',[HomeController::class,'hirePayLater']);

Route::get('/sarkari-job',[HomeController::class,'sarkariJob']);
Route::get('/private-job',[HomeController::class,'privateJob']);

Route::get('/sarkari-yojna',[HomeController::class,'sarkariYojna']);
Route::get('/sarkari-yojna-form/{id}',[HomeController::class,'sarkariYojnaForm']);

Route::get('/sarkari-job-apply-form',[HomeController::class,'sarkariJobApplyForm']);
Route::get('/job-app-forms',[HomeController::class,'jobAppForms']);

Route::get('/register',[HomeController::class,'register']);
Route::get('/login',[HomeController::class,'login']);

Route::controller(AuthOtpController::class)->group(function(){

    Route::get('/otp/login','login')->name('otp.login');
    Route::post('/otp/generate', 'generate')->name('otp.generate');
    Route::get('/otp/verification/{user_id}', 'verification')->name('otp.verification');
    Route::post('/otp/login', 'loginWithOtp')->name('otp.getlogin');
});

Route::get('/get-district-and-state', [JobController::class, 'getDistrictAndState']);

// Route::get('/sarkari-job-form', function () {
//     return view('home.sarkariJobForm');
// });

Route::get('/admin',[AdminController::class,'dashboard']);

Route::get('/admin/manage-candidate',[AdminController::class,'manageCandidate']);
Route::get('/admin/manage-candidate/insert',[AdminController::class,'insertCandidate']);

Route::get('/admin/manage-hire',[AdminController::class,'manageHire']);
Route::get('/admin/manage-hire/edit/{id}',[AdminController::class,'editHire']);
Route::get('/admin/manage-hire/insert',[AdminController::class,'insertHire']);
Route::get('/admin/manage-hire/plan',[AdminController::class,'manageHirePlan']);
Route::get('/admin/manage-hire/plan/insert',[AdminController::class,'insertHirePlan']);

Route::get('/admin/manage-yojna',[AdminController::class,'manageYojna']);
Route::get('/admin/manage-yojna/insert',[AdminController::class,'insertYojna']);

Route::get('/admin/manage/yojna-category',[AdminController::class,'manageYojnaCategory']);
Route::get('/admin/manage/yojna-category/insert',[AdminController::class,'insertYojnaCategory']);

Route::get('/admin/manage/sarkari-job',[AdminController::class,'manageSarkariJob']);
Route::get('/admin/manage/sarkari-job/insert',[AdminController::class,'insertSarkariJob']);

Route::get('/admin/manage/manual-job',[AdminController::class,'manageManualJob']);
Route::get('/admin/manage/manual-job/insert',[AdminController::class,'insertManualJob']);

Route::get('/admin/manage/yojna-form',[AdminController::class,'manageYojnaForm']);
Route::get('/admin/manage/yojna-form/insert',[AdminController::class,'insertYojnaForm']);
