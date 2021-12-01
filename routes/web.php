<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'index']);

Route::prefix('user')->middleware(['auth', 'verified'])->group(function () {
    Route::view('profile', 'profile.show');
});

Route::prefix('user')->middleware(['auth', 'verified'])->group(function () {
    Route::view('profile', 'profile.show');
});

Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified', 'auth.is-admin'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/conferences', [AdminController::class, 'conferences'])->name('conferences');
    Route::get('/users', [AdminController::class, 'users'])->name('users');
    Route::delete('/delete/{user:id}', [AdminController::class, 'deleteUser'])->name('users.destroy');
});

Route::get('dashboard', DashboardController::class)
    ->name('dashboard')
    ->middleware(['auth', 'verified']);

Route::prefix('user')->middleware(['auth', 'verified'])->group(function () {
    Route::view('profile', 'profile.show');
});

Route::prefix('conferences')->name('conferences.')->group(function () {
    Route::get('/', [ConferenceController::class, 'index'])->name('index');
    Route::get('/past', [ConferenceController::class, 'past'])->name('past');
    Route::get('/show/{conference:slug}', [ConferenceController::class, 'show'])->name('show');
    Route::get('/attend/{conference:slug}', [ConferenceController::class, 'attend'])->name('attend');
    Route::get('/decline/{conference:slug}', [ConferenceController::class, 'decline'])->name('decline');
    Route::delete('/delete/{conference:slug}', [ConferenceController::class, 'destroy'])->name('destroy');
});
