<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Page\AccountController;
use App\Http\Controllers\Page\ChartController;
use App\Http\Controllers\Page\DeviceController;
use App\Http\Controllers\Page\ReportController;
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
    return view('welcome');
});

Route::get('/dashboard', [UserController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/account', [AccountController::class, 'index'])->middleware(['auth', 'verified'])->name('account');

Route::get('/chart',[ChartController::class, 'index'])->middleware(['auth', 'verified'])->name('chart');
Route::get('/device',[DeviceController::class, 'index'])->middleware(['auth', 'verified'])->name('device');
Route::get('/report',[ReportController::class, 'index'])->middleware(['auth', 'verified'])->name('report');
Route::get('/descripsion-report',[ReportController::class, 'desReport'])->middleware(['auth', 'verified'])->name('desReport');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('auth/facebook', [SocialController::class, 'facebookRedirect']);
Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);

require __DIR__.'/auth.php';