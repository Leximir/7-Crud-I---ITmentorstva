<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProductRequest;
use App\Models\Products;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    private $productRepo;
    public function __construct()
    {
        $this->productRepo = new ProductRepository();
    }

    public function index() {
        return view('admin-products' , [
            'pageTitle' => 'All Products' ,
            'allProducts' => Products::all()
        ]);
    }
    public function permalink(Products $product){
        return view('permalink',[
            'product' => $product,
            'pageTitle' => $product->name
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

        $singleProduct = $this->productRepo->getProductById($product);

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
    public function addProduct(SaveProductRequest $request){

        $this->productRepo->createNew($request);

        return redirect()->route('products.all');
    }
    public function editProduct(SaveProductRequest $request , Products $product){

        $this->productRepo->editProductById($product, $request);

        return redirect()->route('products.all');
    }
}
