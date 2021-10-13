<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   
    public function userMode(){
        $users = User::all();
        foreach($users as $user){
            if ($user ->id == 1){
                $user ->is_admin = 0;
                $user ->save();
            }
        }
            return back();
    }

    public function adminMode(){
        $users = User::all();
        foreach($users as $user){
            if ($user ->id == 1){
                $user ->is_admin = 1;
                $user ->save();
            }
        }
        return back();
    }

    public function storeUser(Request $request){

        User::create([
            
            'email' => $request['email'],
            'password' => $request['password'],
            'fname' => $request['fname'],
            'lname' => $request['lname'],


        ]);

        return redirect()->route('index')->with('success', 'User Created');
    }
    
    public function loginCheck(Request $request){
        $users = User::get(['email','password']);
        foreach($users as $user){
            if(($user ->email == $request['email'])&($user ->password == $request['password'])){
                
                
                return redirect()->route('login')->with("success-login","Loged in");
            }
        }  
        
        return back()->with("success-fail-login","Failed");

        
    }
}
