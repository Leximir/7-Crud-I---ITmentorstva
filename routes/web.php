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

    Route::controller(ContactController::class)->group(function(){
        Route::get('/contact', 'index');
        Route::post('/send', 'sendContact')->name('SendContact');
        Route::get('/admin/all', 'getAllContacts')->name('SviKontakti');
        Route::get('/admin/delete/{contact}', 'delete')->name('BrisanjeKontakta');
    });

    Route::controller(ProductsController::class)->group(function() {
        Route::get('/admin/all-products','index')
            ->name('SviProizvodi');
        Route::get('/admin/delete-product/{product}','delete')
            ->name('BrisanjeProizvoda');
        Route::get('/admin/add-product','newProduct');
        Route::post('/admin/product/save','addProduct')
            ->name('SnimanjeProizvoda');
        Route::get('admin/product/edit/{product}','indexEdit')
            ->name('EditovanjeProizvoda');
        Route::get('admin/product/edit/save/{product}','editProduct')
            ->name('SnimanjeEditovanogProizvoda');
    });

require __DIR__.'/auth.php';
