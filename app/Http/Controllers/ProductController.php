<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Image;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all('id','name','image','description','price');
        return view('products.index',compact('products'));
    }

    public function create()
    {
        $product = new Product();
        return view('products.create');
    }

    public function store(Request $request)
    {
        $product = Product::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'price' => $request['price'],
            'category_id' => $request['category_id']
        ]);
        $image = $request['image']; 
        Image::create([
            'image' => $image,
            'product_id' => $product['id']
        ]);
        return redirect()->route('products.show',$product->id)->with('success','product is created successfully!');
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $product->name = $request['name'];
        $product->image = $request['image'];
        $product->price = $request['price'];
        $product->description = $request['description'];
        $product->save();
        return redirect()->route('products.index')->with('success','product is updated successfully!');
    }

    public function destroy(Product $product)
    {
        //
    }
}
