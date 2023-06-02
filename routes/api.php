<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth')->group(function () {
    Route::post('/users', [App\Http\Controllers\Frontend\FormController::class, 'store']);
    Route::get('/users', [App\Http\Controllers\Frontend\FormController::class, 'jsonIndex']);
});

// Catch unauthorized requests
Route::fallback(function () {
    return response()->json(['error' => 'Unauthorized.'], 401);
});


