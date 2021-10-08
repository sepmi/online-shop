<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{

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

    public function store(Request $request)
    {
        $category = Category::create([
            'name' => $request['name']
        ]);
        return redirect()->route('categories.index')->with('success','category is created successfully!');
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
        dd($category);
        //$category->name = $request['name'];
        //$category->save();
        //return redirect()->route('categories.index')->with('success','category id updated successfully!');
    }

    
    public function destroy($id)
    {
        //
    }
}
