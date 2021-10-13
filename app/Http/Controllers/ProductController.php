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
        

        return view('product.index',compact('products'));
    }

   


    public function create()
    {
        $categories = Category::orderBy('title')->where('is_deleted',false)->get(['id','title']);

        $product = new Product();

        return view('product.create',compact('categories','product'));

        
    }

   


    public function store(StoreProductRequest $request)
    {
        $product = Product::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'price' => $request['price'],
            'category_id' => $request['category_id'],
            
        ]);


        $image_name = time()."-".$request->file('image')->getClientOriginalName();

        Image::create([

            'image' => $image_name,
            'product_id' => $product->id, 

        ]);

        $request->file('image')->storeAs('images/',$image_name);

        return redirect()->route('products.show',$product->id)->with("success" , "Product Created");

    }

   


    public function show(Product $product)
    {
        

        return view('product.show', compact('product'));
    }

    


    public function edit(Product $product)
    {
        $categories =  Category::where('is_deleted' ,false)->get();
        
        return view('product.edit',compact('product','categories'));
    }




    public function update(Request $request, Product $product)
    {
        
            $product['name'] = $request['name'];
            $product['description'] = $request['description'];
            $product['price'] = $request['price'];
            $product['category_id'] = $request['category_id'];

           
            
            

            if($request->file('image')){
                $image = Image::find($product->id);
                $image_name = time()."-".$request->file('image')->getClientOriginalName();
                
                $image ->name = $image_name;
                
                $request->file('image')->storeAs('images/',$image_name);
                $image ->save();

            }

            $product->save();

            return redirect()->route('products.index')->with("success","Product Updated");
      
    }

  


    public function destroy(Product $product)
    {
        $product ->is_deleted = true;
        $product ->save();
        
        return redirect()->route('products.index')->with("success","Product Deleted");
    }
}
