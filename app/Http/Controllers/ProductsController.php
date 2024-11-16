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
    public function indexAdmin(){
        return view('admin-products' , [
            'pageTitle' => "New Product" ,
            'allProducts' => Products::all()
        ]);
    }

    public function newProduct(Request $request) {
        $request->validate([
            'name' => "required|string",
            'description' => "required|string",
            'amount' => "required|int",
            'price' => "required|numeric",
            'image' => "string"
        ]);

        Products::create([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'amount' => $request->get('amount'),
            'price' => $request->get('price'),
            'image' => $request->get('image'),
        ]);

        return redirect('/shop');
    }
}
