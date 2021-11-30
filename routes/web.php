<?php

use App\Http\Controllers\Admin\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('user')->middleware(['auth', 'verified'])->group(function () {
	Route::view('profile', 'profile.show');
});

Route::prefix('user')->middleware(['auth', 'verified'])->group(function () {
	Route::view('profile', 'profile.show');
});

Route::prefix('admin')->middleware(['auth', 'verified', 'auth.is-admin'])->group(function () {
    Route::get('/', [AdminController::class, 'index']);
});

Route::view('dashboard', 'dashboard')
	->name('dashboard')
	->middleware(['auth', 'verified']);

Route::prefix('user')->middleware(['auth', 'verified'])->group(function () {
	Route::view('profile', 'profile.show');
});
