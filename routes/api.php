<?php

use App\Http\Controllers\Api\v1\AuthController;
use App\Http\Controllers\Api\v1\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// public routes

 // public auth routes
 Route::post('/register', [AuthController::class, 'register']);
 Route::post('/login', [AuthController::class, 'login']);

// protected route

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/category', [CategoryController::class, 'index']);




    Route::post('/logout', [AuthController::class, 'logout']);

});




// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

