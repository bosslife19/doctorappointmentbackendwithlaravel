<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\SliderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("/sliders", [SliderController::class, 'index']);

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/doctors', [DoctorController::class, 'index']);