<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request){
        return view(
            'products.index',
            ['products' => Product::all()]
        );
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(SaveProductRequest $request)
    {
        Product::create($request->validated());
        return redirect()->route('products.index')->with('status', 'Product created successfully');
    }


    public function show(Product $products){
        return view('products.show', compact('products'));
    }



    public function edit(Product $products){
        return view('products.edit', compact('products'));
    }

    public function update(SaveProductRequest $request, Product $product){

        $product->update($request->validated());

        return redirect()->route('products.index')->with('status', "Product updated successfully");
    }

    public function delete(string $id){
        return Product::findOrFail($id)->delete();
    }
}
