<?php

use Illuminate\Support\Facades\Route;

Route::get("/", [\App\Http\Controllers\HomepageController::class , 'index']);
Route::get("about" , [\App\Http\Controllers\AboutController::class , 'index']);
Route::get("/contact" , [\App\Http\Controllers\ContactController::class , 'index']);
Route::get("/shop" , [\App\Http\Controllers\ShopController::class , 'index']);
