<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HirerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthOtpController;
use App\Http\Controllers\UserController;
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

Route::post('/search-all', [HomeController::class, 'search'])->name('home.search.index');

Route::get('/get-job/t&c',[HomeController::class,'getJobTC']);
Route::post('/logout', [AuthOtpController::class, 'logout'])->name('logout');

Route::middleware("auth")->group(function (){
    Route::get('/add-candidate',[HomeController::class,'addCandidate']);
    Route::get('/address',[HomeController::class,'address']);
    Route::get('/documents',[HomeController::class,'documents']);

    // Route::get('/profile',[HomeController::class,'profile']);

    Route::get('/manual-form',[HomeController::class,'manualForm']);

    Route::get('/viewSarkariJobForm/{id}',[HomeController::class,'viewSarkariJobForm']);
    Route::get('/viewPrivateJobForm/{id}',[HomeController::class,'viewPrivateJobForm']);
    Route::get('/sarkari-job/confirm',[HomeController::class,'sarkariJobConfirm']);
    Route::get('/private-job/confirm',[HomeController::class,'PrivateJobConfirm']); 
    Route::get('/checkApplicationStatus/{jobId}', [JobController::class, 'checkApplicationStatus'])->name('checkApplicationStatus');
    Route::get('/checkApplicationStatus/{jobId}', [SarkariJobApplyController::class, 'checkApplicationStatus'])->name('checkApplicationStatus');
      
});

Route::get('/pro', function() {
    return view('home.Profile-new');
});

Route::get('/profile',[HomeController::class,'profile']);
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

Route::post('/register',[AuthOtpController::class,'register'])->name('register.store');
Route::post('/login',[AuthOtpController::class,'login'])->name('login.store');

Route::get('/login',[HomeController::class,'login']);

Route::get('/get-district-and-state', [JobController::class, 'getDistrictAndState']);

// Route::get('/sarkari-job-form', function () {
//     return view('home.sarkariJobForm');
// });

// Route::get('/admin',[AdminController::class,'dashboard']);


// Route::middleware(['admin'])->group(function () {
    Route::get('/admin',[AdminController::class,'manageCandidate']);
    Route::get('/admin/manage-candidate',[AdminController::class,'manageCandidate']);
    Route::get('/admin/manage-candidate/register',[AdminController::class,'registerCandidate']);
    Route::get('/admin/manage-candidate/insert',[AdminController::class,'insertCandidate']);
    // Route::get('/admin/manage-candidate/insert/{id}',[AdminController::class,'insertCandidate']);
    Route::get('/admin/manage-candidate/edit/{id}',[AdminController::class,'editCandidate']);

    Route::get('/admin/manage-hire',[AdminController::class,'manageHire']);
    Route::get('/admin/manage-hire/edit/{id}',[AdminController::class,'editHire']);
    Route::get('/admin/manage-hire/insert',[AdminController::class,'insertHire']);
    Route::get('/admin/manage-hire/plan',[AdminController::class,'manageHirePlan']);
    Route::get('/admin/manage-hire/plan/insert',[AdminController::class,'insertHirePlan']);
    Route::get('/admin/manage-candidate/plan',[AdminController::class,'manageCandidatePlan']);
    Route::get('/admin/manage-candidate/plan/insert',[AdminController::class,'insertCandidatePlan']);
    Route::get('/admin/manage-hire-company',[AdminController::class,'manageHireCompany']);

    Route::get('/admin/manage-yojna',[AdminController::class,'manageYojna']);
    Route::get('/admin/manage-yojna/insert',[AdminController::class,'insertYojna']);
    Route::get('/admin/manage-yojna/{id}',[AdminController::class,'editYojna']);

    Route::get('/admin/manage/yojna-category',[AdminController::class,'manageYojnaCategory']);
    Route::get('/admin/manage/yojna-category/insert',[AdminController::class,'insertYojnaCategory']);

    Route::get('/admin/manage/sarkari-job',[AdminController::class,'manageSarkariJob']);
    Route::get('/admin/manage/sarkari-job/insert',[AdminController::class,'insertSarkariJob']);
    Route::get('/admin/manage/sarkari-job/{id}',[AdminController::class,'editSarkariJob']);

    Route::get('/admin/manage/manual-job',[AdminController::class,'manageManualJob']);
    Route::get('/admin/manage/manual-job/insert',[AdminController::class,'insertManualJob']);

    Route::get('/admin/manage/yojna-form',[AdminController::class,'manageYojnaForm']);
    Route::get('/admin/manage/yojna-form/insert',[AdminController::class,'insertYojnaForm']);
    Route::get('/admin/manage/yojna-form/{id}',[AdminController::class,'viewYojnaForm']);

    Route::get('/admin/manage/sarkari-job-form',[AdminController::class,'manageSarkariJobForm']);
    Route::get('/admin/manage/sarkari-job-form/insert',[AdminController::class,'insertSarkariJobForm']);
    Route::get('/admin/manage/sarkari-job-form/{id}',[AdminController::class,'viewSarkariJobForm']);

    Route::get('/admin/manage/private-job-form',[AdminController::class,'managePrivateJobForm']);
    Route::get('/admin/manage/private-job-form/insert',[AdminController::class,'insertPrivateJobForm']);
    Route::get('/admin/manage/private-job-form/{id}',[AdminController::class,'viewPrivateJobForm']);

    Route::get('/admin/manage/trash/sarkari-job',[AdminController::class,'manageSarkariJobTrash']);
    Route::get('/admin/manage/trash/yojna-category',[AdminController::class,'manageYojnaCategoryTrash']);
    Route::get('/admin/manage/trash/yojna',[AdminController::class,'manageYojnaTrash']);
    Route::get('/admin/manage/trash/candidate',[AdminController::class,'manageCandidateTrash']);
    Route::get('/admin/manage/trash/role',[AdminController::class,'manageRoleTrash']);
    Route::get('/admin/manage/trash/hire',[AdminController::class,'manageHireTrash']);
    Route::get('/admin/manage/trash/hire-plan',[AdminController::class,'manageHirePlanTrash']);
// });

Route::middleware(['hirer'])->group(function () {
    Route::get('/home-hirer',[HirerController::class,'hirerHome']);
    Route::get('/hirer/job-post',[HirerController::class,'hirerJob']);
    Route::get('/hirer/job-post/insert',[HirerController::class,'insertJobRolePage']);
    Route::get('/hirer/job-post/edit/{id}',[HirerController::class,'showJobRole']);
    Route::get('/hirer/application/edit/{id}',[HirerController::class,'showApplication']);
    Route::post('/hirer/job-post/insert-form',[HirerController::class,'insertJobRole']);
    Route::post('/hirer/job-post/edit/{id}',[HirerController::class,'updateJobRole']);
    Route::post('/hirer/application/edit/{id}',[HirerController::class,'updateApplication']);
    Route::get('/hirer/applications',[HirerController::class,'applications']);
    Route::get('/hirer/pending-applications',[HirerController::class,'pendingApplications']);
    Route::get('/hirer/rejected-applications',[HirerController::class,'rejectedApplications']);
    Route::get('/hirer/profile',[HirerController::class,'profilePage']);
    Route::get('/hirer/plans',[HirerController::class,'hirerPlans']);
    Route::post('/hirer/update-job-status/{id}',[HirerController::class,'updateJobStatus'])->name('update-job-status');
});


Route::get('/admin/login-page', function () {
    return view('auth.login');
});

// Route::get('/register-page', function () {
//     return view('auth.register');
// });
// Route::post('/register',[UserController::class,"adminRegister"])->name("admin.register");


Route::match(['get',"post"],'/admin-login',[UserController::class,"adminLogin"])->name("admin.login");
// Route::post('/logout',[UserController::class,"logout"])->name("logout");

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('optimize:clear');

    return "All Caches are cleared by @Roni";
});

