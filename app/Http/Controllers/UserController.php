<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   

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

    public function checkAccount(){
        
        $user = Auth::user();
        
        return view('user.index',compact('user'));
    }

    public function storeAccount(Request $request,User $user){
        
        $user['fname'] = $request['fname'];
        $user['lname'] = $request['lname'];
        $user['email'] = $request['email'];
        $user->save();
        return redirect()->route('index')->with("success","Information updated");
    }
}
