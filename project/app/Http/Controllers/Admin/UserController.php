<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function user(){
        $users=User::all();
        return view('admin.users.view',compact('users'));
    }
}
