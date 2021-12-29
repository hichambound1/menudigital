<?php

use App\Http\Controllers\Api\v1\AuthController;
use App\Http\Controllers\Api\v1\CategoryController;
use App\Http\Controllers\Api\v1\DishController;
use App\Http\Controllers\Api\v1\NewslatterController;
use Illuminate\Support\Facades\Route;


// public routes

 // public auth routes
 Route::post('/send/email/forgetpassword', [AuthController::class, 'sendemailforgetpassword']);
 Route::post('/news', [NewslatterController::class, 'store']);
 Route::get('/email/forgetpassword/reset/{token}', [AuthController::class, 'resetpass'])->name('reset.password');
 Route::put('update/thepass', [AuthController::class, 'updatepass'])->name('updatepass');
 Route::post('/register', [AuthController::class, 'register']);
 Route::post('/login', [AuthController::class, 'login']);
 Route::get('/category', [CategoryController::class, 'index']);
 Route::get('/alldishes', [DishController::class, 'alldishes']);
 Route::get('/oneresto/{id}', [DishController::class, 'oneresto']);

 // protected route
 Route::get('/dish/photos/{id}', [DishController::class, 'dish_photos']);

 Route::get('/dish/{id}', [DishController::class, 'dish']);
 Route::middleware(['auth:sanctum'])->group(function () {

    Route::get('/mydishes/{id}', [DishController::class, 'mydishes']);
    Route::post('/dish/store', [DishController::class, 'store']);
    Route::post('/add_photo', [DishController::class, 'add_photo']);
    Route::put('/dish/update/{id}', [DishController::class, 'update']);
    Route::put('/user/update/', [AuthController::class, 'update']);
    Route::delete('/dish/delete/{id}', [DishController::class, 'delete']);
    Route::delete('/delete/gallery/{id}', [DishController::class, 'delete_gallery']);


    Route::post('/logout', [AuthController::class, 'logout']);

});




// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

