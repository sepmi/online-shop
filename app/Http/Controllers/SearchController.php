<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchResult(Request $request){
        
        $results = Product::SearchTitleProduct($request->search);

        if($results->count() > 0){
            dd($results);
        }else{
            dd('noting found');
        }
    }
}
