<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CourseListContoller;
use App\Http\Controllers\Admin\CourseOfferContoller;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ExamController;
use App\Http\Controllers\Admin\FacilityContoller;
use App\Http\Controllers\Admin\FeeAmountController;
use App\Http\Controllers\Admin\FeeCategoryController;
use App\Http\Controllers\Admin\GradpointController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\PaymentDetalisController;
use App\Http\Controllers\Admin\ResultInfocontroller;
use App\Http\Controllers\Admin\SemesterController;
use App\Http\Controllers\Admin\StudentRegistarionController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\StudentProfileController;
use App\Http\Middleware\OnlyAdmin;
use App\Models\Admin;
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



Route::get('/', [HomeController::class, 'index'])->name("home");
Route::get("/user/logout", [HomeController::class, 'Logout'])->name('user.logout');
Route::get("/coursereg", [HomeController::class, 'couresreg'])->name('coursereg');
Route::resource('/profiles',StudentProfileController::class);
Route::get("/shownotice",[ExamController::class,'shownotice'])->name("shownotice");
Route::get("/showcourseoffers",[CourseOfferContoller::class,'showcourseoffers']);
Route::get("/showresult",[ResultInfocontroller::class,'showresult'])->name("showresult");
Route::post("/coursereg", [HomeController::class, 'CoureRegForm'])->name('couresreg.store');
Route::get("/payment",[PaymentDetalisController::class,'index']);
Route::post("/payment",[PaymentDetalisController::class,'Addpayment'])->name('add.payment');
Route::get("/application",[ContactController::class,'index']);
Route::post("/application",[ContactController::class,'Application'])->name('application.form');






// --------------------Admin Route------------------
  Route::prefix('/admin')->middleware(['auth', OnlyAdmin::class])->group(function () {
  Route::get("/dashboard", [DashboardController::class, 'index']);
  Route::resource("/groups", GroupController::class);
  Route::resource("/semesters", SemesterController::class);
  Route::resource("/facilitis", FacilityContoller::class);
  Route::resource("/courselists", CourseListContoller::class);
  Route::get("/import",[CourseListContoller::class,'Import']);
  Route::post("/import",[CourseListContoller::class,'Import_Form'])->name('import.store');
  Route::resource("/coursoffers", CourseOfferContoller::class);
  // Route::resource("/coursoffers", CourseOfferContoller::class);
  Route::get("/payments_detlais",[PaymentDetalisController::class,'DetalisGet']);
  Route::resource("/feamouts",FeeAmountController::class);
  Route::get("/course_offer/detalis/{semester_id}",[CourseOfferContoller::class,'DetalisCourse'])->name('courseoffer.detalis');
  Route::resource("/coursreg_form",StudentRegistarionController::class);
  Route::get("/coursreg_form/detalis/{student_reg}",[StudentRegistarionController::class,'DetalisCourseReg'])->name('course.reg.details');
  Route::get('/application_detalis',[ContactController::class,'ApplicationDetalis']);

  Route::resource("/resultinfos",ResultInfocontroller::class);
  Route::resource("/gradpoints", GradpointController::class);
  Route::resource("/teachers", TeacherController::class);
});


Route::prefix('admin')->group(function(){




  
});










require __DIR__ . '/auth.php';

