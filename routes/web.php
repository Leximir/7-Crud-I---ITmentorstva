<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

    Route::get("/", [HomepageController::class , 'index']);

    Route::get("about" , [AboutController::class , 'index']);

    Route::get("/shop" , [ProductsController::class , 'indexClient']);

    Route::controller(ContactController::class)->name('contact')->group(function(){
        Route::get('/contact', 'index')->name('index');
        Route::post('/send', 'sendContact')->name('send');
        Route::get('/admin/all', 'getAllContacts')->name('all');
        Route::get('/admin/delete/{contact}', 'delete')->name('delete');
    });

    Route::controller(ProductsController::class)->prefix('/products')->name('products')->group(function() {
        Route::get('/all','index')
            ->name('all');
        Route::get('/delete/{product}','delete')
            ->name('delete');
        Route::get('/add','newProduct')
            ->name('add');
        Route::post('/save','addProduct')
            ->name('save');
        Route::get('/edit/{product}','indexEdit')
            ->name('edit');
        Route::post('/edit/save/{product}','editProduct')
            ->name('edit.save');
    });

require __DIR__.'/auth.php';
