<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class UserController extends Controller
{
    public function index(){

        $users = User::all();

        return view('users.index', compact('users'));

    }

    public function show(User $user){

        return view('users.show', compact('user'));
    }
}
