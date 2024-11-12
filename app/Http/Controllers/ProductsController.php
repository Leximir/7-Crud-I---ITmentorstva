<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        return view('shop' , [
            'pageTitle' => 'Shop' ,
            'allProducts' => Products::all()
        ]);
    }
}
