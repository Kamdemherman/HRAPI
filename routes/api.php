<?php

use App\Http\Controllers\Auth\AuthController;

use App\Http\Controllers\GenericEntityController;

use Illuminate\Support\Facades\Route;

use App\Http\Middleware\CheckHttpMethod;

// Routes d'authentification
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

// Routes protégées par authentification
Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
   });

   Route::post('/test', 'TestController@store')->middleware('reject.empty.body');
   
    // Route::get('{table}', [GenericEntityController::class, 'index']);
    // Route::get('{table}/{id}', [GenericEntityController::class, 'show']);
    // Route::post('{table}', [GenericEntityController::class, 'store']);
    // Route::put('{table}/{id}', [GenericEntityController::class, 'update']);
    // Route::delete('{table}/{id}', [GenericEntityController::class, 'destroy']);


Route::prefix('c')-> middleware([CheckHttpMethod::class])->group(function () {
    Route::get('{table}', [GenericEntityController::class, 'index']);
    Route::get('{table}/{id}', [GenericEntityController::class, 'show']);
    Route::post('{table}', [GenericEntityController::class, 'store']);
    Route::put('{table}/{id}', [GenericEntityController::class, 'update']);
    Route::delete('{table}/{id}', [GenericEntityController::class, 'destroy']);
});





   



