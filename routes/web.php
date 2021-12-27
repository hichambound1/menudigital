<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::middleware(['auth'])->group(function () {

    Route::get('dashboard/home', [DashboardController::class, 'index'])->name('dashboard.home');


    Route::post('/dish/photo', [DishController::class, 'add_photo'])->name('dish.photo');
    Route::resource('user', UserController::class);
    Route::resource('dish', DishController::class);
    Route::resource('category', CategoryController::class);
    // Route::resource('admin', AdminController::class);
    Route::resource('role', RoleController::class);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
