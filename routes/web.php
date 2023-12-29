<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\HomeController;
use App\Http\Controllers\guru\GuruController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\genie\GenieController;
use App\Http\Controllers\member\MemberController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('auth.home')->middleware('admin');
Route::get('/member/home', [MemberController::class, 'index'])->name('member.home')->middleware('member');


// Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::prefix('admin')->name('admin.')->middleware(['admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
});


Route::prefix('member')->name('member.')->middleware(['member'])->group(function () {
    Route::get('/dashboard', [MemberController::class, 'index'])->name('dashboard');
    Route::get('/logout', [MemberController::class, 'logout'])->name('logout');

});

Route::prefix('guru')->name('guru.')->middleware(['guru'])->group(function () {
    Route::get('/dashboard', [GuruController::class, 'index'])->name('dashboard');
    Route::get('/logout', [GuruController::class, 'logout'])->name('logout');

});

Route::prefix('genie')->name('genie.')->middleware(['genie'])->group(function () {
    Route::get('/dashboard', [GenieController::class, 'index'])->name('dashboard');
    Route::get('/logout', [GenieController::class, 'logout'])->name('logout');
});


