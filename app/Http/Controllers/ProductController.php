<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view(
            'products.index',
            ['products' => Product::all()]
        );
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:120',
            'description' => 'string|nullable',
            'size' => 'required|numeric',
        ]);
        Product::create($request->only(['name', 'description', 'size']));
        return redirect()->route('products.index');
    }


    public function show(Product $products){
        return view('products.show', compact('products'));
    }



    public function edit(Product $products){
        return view('products.edit', compact('products'));
    }

    public function update(Request $request, string $id){
        $product = Product::findOrFail($id);
        $validated = $request->validate([
            'name' => 'sometimes|max:120',
            'description' => 'sometimes|string|nullable',
            'size' => 'sometimes|numeric',
        ]);

        $product->update($validated);
        
        return redirect()->route('products.index');
    }

    public function delete(string $id){
        return Product::findOrFail($id)->delete();
    }
}
