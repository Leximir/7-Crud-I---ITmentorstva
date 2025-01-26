<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        return view('admin-products' , [
            'pageTitle' => 'All Products' ,
            'allProducts' => Products::all()
        ]);
    }
    public function indexClient() {
        return view('shop' , [
            'pageTitle' => 'Shop' ,
            'allProducts' => Products::all()
        ]);
    }
    public function indexEdit(Request $request , Products $product){

        return view('edit-product' , compact('product') , [
            'pageTitle' => 'Edit Product' ,
        ]);
    }
    public function delete($product){
        $singleProduct = Products::where(['id' => $product])->first(); // SELECT * FROM products WHERE id = $product LIMIT 1

        if($singleProduct === null){
            die('Ovaj proizvod ne postoji');
        }

        $singleProduct->delete();

        return redirect()->back();
    }
    public function newProduct(){
        return view('newproduct' , [
            'pageTitle' => 'New Product'
        ]);
    }
    public function addProduct(Request $request){
        $request->validate([
            'name' => "required|string|unique:products",
            'description' => "required|string",
            'amount' => "required|int|min:0",
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

        return redirect()->route('SviProizvodi');
    }
    public function editProduct(Request $request , Products $product){
        $request->validate([
            'name' => "required|string|unique:products",
            'description' => "required|string",
            'amount' => "required|int|min:0",
            'price' => "required|numeric",
            'image' => "string"
        ]);


        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->amount = $request->get('amount');
        $product->price = $request->get('price');
        $product->image = $request->get('image');
        $product->save();

        return redirect()->route('SviProizvodi');
    }

}
