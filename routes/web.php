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
        Route::post('/send', 'sendContact')->name('contact.send');
        Route::get('/admin/all', 'getAllContacts')->name('SviKontakti');
        Route::get('/admin/delete/{contact}', 'delete')->name('contact.delete');
    });

    Route::controller(ProductsController::class)->prefix('/products')->group(function() {
        Route::get('/all','index')
            ->name('SviProizvodi');
        Route::get('/delete/{product}','delete')
            ->name('BrisanjeProizvoda');
        Route::get('/add','newProduct')
            ->name('AddProduct');
        Route::post('/save','addProduct')
            ->name('SnimanjeProizvoda');
        Route::get('/edit/{product}','indexEdit')
            ->name('EditovanjeProizvoda');
        Route::post('/edit/save/{product}','editProduct')
            ->name('SnimanjeEditovanogProizvoda');
    });

require __DIR__.'/auth.php';
