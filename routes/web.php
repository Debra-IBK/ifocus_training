<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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
    return view('auth.register');
});

//Auth::routes();
Auth::routes(['verify' => true]);


// Only verified users may access this route...
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified')->name('home');
Route::get('/replay', [App\Http\Controllers\Portal\Dashboard::class, 'replay_videos'])->middleware('verified')->name('replay');
Route::get('/payment-receipt', [App\Http\Controllers\Portal\Dashboard::class, 'payment-receipt'])->middleware('verified')->name('payment-receipt');
Route::get('/assignment', [App\Http\Controllers\Portal\Assignment::class, 'assignment'])->middleware('verified')->name('assignment');



Route::post('process-payment', [App\Http\Controllers\Portal\PaymentProcesser::class, '__invoke'])->name('portal.process.payment');
Route::post('capture-payment', [App\Http\Controllers\Portal\PaymentProcesser::class, 'captureOrder'])->name('portal.capture.payment');


Route::get('/create_course', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->middleware('auth')->name('create_course');
Route::post('/create_course', [App\Http\Controllers\Admin\DashboardController::class, 'submit_course'])->middleware('auth')->name('create_course');

