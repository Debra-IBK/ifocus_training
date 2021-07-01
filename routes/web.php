<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Portal\Dashboard;
use App\Http\Controllers\Portal\PaymentProcesser;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Portal\ZoomController;

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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified')->name('home');

Route::namespace('App\Http\Controllers\Portal')->prefix('portal')->name('portal.')->middleware('verified')->group(function(){

    Route::get('/home', [Dashboard::class, 'index'])->middleware('verified')->name('home');
    Route::get('/replay', [Dashboard::class, 'replay_videos'])->middleware('verified')->name('replay');
    Route::get('/zoom', [ZoomController::class, 'index'])->name('zoom');
    Route::get('/join-zoom', [ZoomController::class, 'join_zoom'])->name('join-zoom');
    Route::get('/profile', [Dashboard::class, 'profile'])->name('profile');
    Route::get('/make-payment', [Dashboard::class, 'make_payment'])->name('make-payment');
    Route::get('/payment-receipt', [Dashboard::class, 'payment_receipt'])->name('payment-receipt');
    Route::post('process-payment', [PaymentProcesser::class, '__invoke'])->name('process-payment');
    Route::post('capture-payment', [PaymentProcesser::class, 'captureOrder'])->name('capture-payment');
    
});

Route::post('process-payment', [App\Http\Controllers\Portal\PaymentProcesser::class, '__invoke'])->name('portal.process-payment');
Route::post('capture-payment', [App\Http\Controllers\Portal\PaymentProcesser::class, 'captureOrder'])->name('portal.capture-payment');

Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->name('admin.')->middleware('auth')->group(function(){
    Route::get('/home', [DashboardController::class, 'index'])->middleware('auth')->name('home');
    Route::get('/create_course', [CourseController::class, 'index'])->middleware('auth')->name('create_course');
    Route::post('/create_course', [CourseController::class, 'submit_course'])->middleware('auth')->name('create_course');

    Route::resource('users', 'UsersManagementContoller');
});



