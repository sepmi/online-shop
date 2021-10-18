<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{

    public function problem(){
        $products = Product::all();
        return view('pages.user',compact('products'));
    }
    public function index()
    {
        $categories = Category::get();
        return view('categories.index',compact('categories'));
        
    }
    public function create()
    {
        $category = new Category();
        return view('categories.create',compact('category'));
    }

    public function store(StoreCategoryRequest $request)
    {
        $category = Category::create([
            'name' => $request['name']
        ]);
        return redirect()->route('categories.index')->with("success","category is created successfully!");
    }

    
    public function show(Category $category)
    {
        return view('categories.show',compact('category'));
    }

    public function edit(Category $category)
    {
        return view('categories.edit',compact('category'));
    }

    
    public function update(Request $request,Category $category)
    {
        
        $category->name = $request['name'];
        $category->save();
        return redirect()->route('categories.show',$category->id)->with('success','category id updated successfully!');
    }

    
    public function destroy(Category $category)
    {
        $category->is_deleted = true ;
        $category->save();
        return redirect()->route('categories.index')->with('deleted','Category is deleted successfully!');
    }
}
