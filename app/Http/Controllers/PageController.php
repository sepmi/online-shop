<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class PageController extends Controller
{
    public function homePage(){
        
        return view('pages.index');

    }

    public function loginPage(){

        return view('pages.login');
    }


    
}
