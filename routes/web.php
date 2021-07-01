<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Portal\ZoomController;
use App\Http\Controllers\Portal\CourseController;

use App\Http\Controllers\Portal\PaymentProcesser;
use App\Http\Controllers\Portal\PaymentController;
use App\Http\Controllers\Portal\DashboardController;
use App\Http\Controllers\Admin\CourseController as AdminCourse;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;


// use Illuminate\Foundation\Auth\EmailVerificationRequest;
// use App\Http\Controllers\Admin\CourseController;
// use App\Http\Controllers\Portal\Dashboard;
// use App\Http\Controllers\Portal\PaymentProcesser;
// use App\Http\Controllers\Admin\DashboardController;

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
    return view('auth.login');
});

//Auth::routes();
Auth::routes(['verify' => true]);


// Only verified users may access this route...
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('portal')->name('portal.')->middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('index');

    Route::prefix('payment')->name('payment.')->group(function () {
        Route::get('create', [PaymentController::class, 'create'])->name('create');
        Route::post('process', [PaymentProcesser::class, 'createOrder'])->name('process');
        Route::get('captured/{payment:paypal_id}', [PaymentProcesser::class, 'capturedOrder'])->withoutMiddleware(['auth', 'verified'])->name('captured')->whereAlphaNumeric('payment');
    });
    
    Route::prefix('course')->name('course.')->group(function () {
        Route::get('/', [CourseController::class, 'index'])->name('index');
    });

    Route::get('/replay', [Dashboard::class, 'replay_videos'])->name('replay');
    Route::get('/zoom', [ZoomController::class, 'index'])->name('zoom');
    Route::get('/join-zoom', [ZoomController::class, 'join_zoom'])->name('join-zoom');
    Route::get('/profile', [Dashboard::class, 'profile'])->name('profile');
    // Route::get('/make-payment', [Dashboard::class, 'make_payment'])->name('make-payment');
    Route::get('/payment-receipt', [Dashboard::class, 'payment_receipt'])->name('payment-receipt');
});

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminDashboard::class, 'index'])->middleware('auth')->name('home');

    Route::get('/create_course', [AdminCourse::class, 'index'])->middleware('auth')->name('create_course');
    Route::post('/create_course', [CourseController::class, 'submit_course'])->middleware('auth')->name('create_course');

    Route::resource('users', 'UsersManagementContoller');
});
