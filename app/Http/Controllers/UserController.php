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
    
}
