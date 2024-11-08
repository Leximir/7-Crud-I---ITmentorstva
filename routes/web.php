<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('welcome' , [
        'pageTitle' => 'Home'
    ]);
});

Route::get('/shop', function() {
    return view('shop' , [
        'pageTitle' => 'Shop'
    ]);
});

Route::get('/contact', function() {
    return view('contact' , [
        'pageTitle' => 'Contact'
    ]);
});

Route::get('/about', function() {
    return view('about' , [
        'pageTitle' => 'About'
    ]);
});
