<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
class UserController extends Controller
{
    public function hasMany(){
        $users=User::with('post')->get();
        //return $users;
        return view('hasmany',compact('users'));
    }


    //many to many
    public function manyToMany(){
        $users=User::with('roles')->get();
        //return $users;
        return view('manyToMany',compact('users'));
    }


    //hasOneThrough
    public function hasOneThrough(){
        $users=User::with('phone')->get();
        return $users;
    }
}
