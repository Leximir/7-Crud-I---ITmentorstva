<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// First Page
    Route::get("/", [\App\Http\Controllers\HomepageController::class , 'index']);

    Route::get("about" , [\App\Http\Controllers\AboutController::class , 'index']);

    Route::get("/contact" , [\App\Http\Controllers\ContactController::class , 'index']);

    Route::post("/send-contact" , [\App\Http\Controllers\ContactController::class , 'sendContact']);

    Route::get("/shop" , [\App\Http\Controllers\ProductsController::class , 'indexClient']);
// Admin
    // Contacts
        Route::get("/admin/all-contacts" , [\App\Http\Controllers\ContactController::class , 'getAllContacts'])
            ->name('SviKontakti');

        Route::get("/admin/delete-contact/{contact}" , [\App\Http\Controllers\ContactController::class , 'delete'])
            ->name('BrisanjeKontakta');
    // Products
        Route::get('/admin/all-products' , [\App\Http\Controllers\ProductsController::class , 'index'] )
            ->name('SviProizvodi');

        Route::get('/admin/delete-product/{product}' , [\App\Http\Controllers\ProductsController::class , 'delete'])
            ->name('BrisanjeProizvoda');

        Route::get("/admin/add-product" , [\App\Http\Controllers\ProductsController::class , 'newProduct']);
        Route::post("/admin/product/save" , [\App\Http\Controllers\ProductsController::class , 'addProduct'])
            ->name('SnimanjeProizvoda');

        Route::get('admin/product/edit/{product}' , [\App\Http\Controllers\ProductsController::class , 'indexEdit'])
            ->name('EditovanjeProizvoda');

        Route::post('admin/product/edit/save/{product}' , [\App\Http\Controllers\ProductsController::class , 'editProduct'])
            ->name('SnimanjeEditovanogProizvoda');





require __DIR__.'/auth.php';
