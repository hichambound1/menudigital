<?php

use App\Http\Controllers\Api\v1\AuthController;
use App\Http\Controllers\Api\v1\CategoryController;
use App\Http\Controllers\Api\v1\DishController;
use Illuminate\Support\Facades\Route;


// public routes

 // public auth routes
 Route::post('/register', [AuthController::class, 'register']);
 Route::post('/login', [AuthController::class, 'login']);
 Route::get('/category', [CategoryController::class, 'index']);
 Route::get('/alldishes', [DishController::class, 'alldishes']);

 // protected route

 Route::middleware(['auth:sanctum'])->group(function () {

    Route::get('/mydishes/{id}', [DishController::class, 'mydishes']);
    Route::post('/dish/store', [DishController::class, 'store']);
    Route::put('/dish/update/{id}', [DishController::class, 'update']);
    Route::put('/user/update/', [AuthController::class, 'update']);
    Route::delete('/dish/delete/{id}', [DishController::class, 'delete']);


    Route::post('/logout', [AuthController::class, 'logout']);

});




// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

