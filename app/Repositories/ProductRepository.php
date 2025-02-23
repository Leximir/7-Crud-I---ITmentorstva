<?php

namespace App\Repositories;

use App\Models\Products;

class ProductRepository
{
    // DI - Dependency Injection
    // Imamo stalan pristup Product modelu

    private $productModel;

    public function __construct()
    {
        $this->productModel = new Products();
    }
    public function test()
    {
        dd('123456789');
    }

    public function createNew($request){
        $this->productModel->create([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'amount' => $request->get('amount'),
            'price' => $request->get('price'),
            'image' => $request->get('image'),
        ]);
    }
    public function getProductById($id){
        return $this->productModel->where(['id' => $id])->first();
    }

    public function editProductById($product, $request){
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->amount = $request->get('amount');
        $product->price = $request->get('price');
        $product->image = $request->get('image');
        $product->save();
    }
}
