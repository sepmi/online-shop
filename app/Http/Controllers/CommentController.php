<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
   

    public function store(Request $request,$product_id)
    {
        
        Comment::create([
            'comment' => $request->comment,
            'user_id' => Auth::user()->id,
            'product_id' => $product_id 
        ]);

        return back();
    }

    
    public function show(Comment $comment)
    {
        //
    }

   
    public function edit(Comment $comment)
    {
        //
    }

    
    public function update(Request $request, Comment $comment)
    {
        //
    }

   
    public function destroy(Comment $comment)
    {
        $comment->delete();

        return back();
    }
}
