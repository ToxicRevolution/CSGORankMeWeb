<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class UserController extends Controller
{
    public function getUser(Request $request){

    }
    public function listUsers(){
        return User::paginate();
    }
    public function createUser(){

    }
    public function deleteUser(){

    }
    public function editUser(){

    }
}
