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
    
}
