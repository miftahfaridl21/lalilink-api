<?php

use App\Http\Controllers\Api\LinkController;
use App\Http\Controllers\Api\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [LoginController::class, 'index']);
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth:sanctum');
Route::get('/linkapp', [LinkController::class, 'index'])->middleware('auth:sanctum');

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
