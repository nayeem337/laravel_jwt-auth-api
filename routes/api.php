<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

// Public API Routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/refresh', [AuthController::class, 'refresh']);


// Protected API Routes
Route::middleware('auth:api')->group(function () {

    Route::get('/me', function (Request $request) {

        return response()->json([
            'success' => true,
            'user' => $request->user(),
        ]);

    });

    Route::post('/logout', [AuthController::class, 'logout']);

});
