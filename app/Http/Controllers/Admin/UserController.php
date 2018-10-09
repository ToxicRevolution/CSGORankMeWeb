<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;
class UserController extends Controller
{
    public function getUser(Request $request){

    }
    public function listUsers(){
        return User::get();
    }
    public function createUser(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' =>   'required|min:8|max:100',
        ]);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    public function deleteUser(){

    }
    public function editUser(){

    }
}
