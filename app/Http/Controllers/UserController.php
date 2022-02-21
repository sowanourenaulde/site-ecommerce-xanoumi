<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\Models\User;

class UserController extends Controller
{
    public function index(){
        $users=User::all();
        return view('admin.users.utilisateurs',compact('users'));
    }
}
