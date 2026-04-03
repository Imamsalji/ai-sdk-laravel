<?php

use App\Http\Controllers\Api\AIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/ai/chat', [AIController::class, 'chat']);
