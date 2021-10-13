<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Image;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index',compact('products'));
    }

    public function create()
    {
        $product = new Product();
        $categories = Category::get();
        return view('products.create',compact('categories','product'));
    }

    public function store(StoreProductRequest $request)
    {
        $product = Product::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'price' => $request['price'],
            'category_id' => $request['category_id']
        ]);
        $image_name = time().'_'. $request->file('image')->getClientOriginalName(); 
        Image::create([
            'image' => $image_name,
            'product_id' => $product['id']
        ]);
        $request->file('image')->storeAs('images/',$image_name);        
        return redirect()->route('products.index')->with('success','product is created successfully!');
    }

    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::get();
        return view('products.edit',compact('product','categories'));
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
        $product->is_deleted =true;
        $product->save();
    }
}
