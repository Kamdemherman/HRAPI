<?php

use App\Http\Controllers\Auth\AuthController;

use App\Http\Controllers\GenericEntityController;

use Illuminate\Support\Facades\Route;

// Routes d'authentification
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

// Routes protégées par authentification
Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
   });


    Route::prefix('c')->group(function () {
    Route::get('{table}', [GenericEntityController::class, 'index']);
    Route::get('{table}/{id}', [GenericEntityController::class, 'show']);
    Route::post('{table}', [GenericEntityController::class, 'store']);
    Route::put('{table}/{id}', [GenericEntityController::class, 'update']);
    Route::delete('{table}/{id}', [GenericEntityController::class, 'destroy']);
});



// Route::get('/c={table}', [GenericEntityController::class, 'index']);
// Route::get('/c={table}/{id}', [GenericEntityController::class, 'show']);
// Route::post('/c={table}', [GenericEntityController::class, 'store']);
// Route::put('/c={table}/{id}', [GenericEntityController::class, 'update']);
// Route::delete('/c={table}/{id}', [GenericEntityController::class, 'destroy']);


   



