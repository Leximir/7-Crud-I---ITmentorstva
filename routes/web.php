<?php

use Illuminate\Support\Facades\Route;

Route::get("/", [\App\Http\Controllers\HomepageController::class , 'index']);

Route::get("about" , [\App\Http\Controllers\AboutController::class , 'index']);

Route::get("/contact" , [\App\Http\Controllers\ContactController::class , 'index']);

Route::get("/admin/all-contacts" , [\App\Http\Controllers\ContactController::class , 'getAllContacts']);
Route::get("/admin/delete-contact/{contact}" , [\App\Http\Controllers\ContactController::class , 'delete']);
Route::get('/admin/all-products' , [\App\Http\Controllers\ProductsController::class , 'index'] );
Route::get('/admin/delete-product/{product}' , [\App\Http\Controllers\ProductsController::class , 'delete']);
Route::get("/admin/add-product" , [\App\Http\Controllers\ProductsController::class , 'newProduct']);
Route::post("/admin/add-product" , [\App\Http\Controllers\ProductsController::class , 'addProduct']);

Route::post("/send-contact" , [\App\Http\Controllers\ContactController::class , 'sendContact']);

Route::get("/shop" , [\App\Http\Controllers\ProductsController::class , 'indexClient']);


