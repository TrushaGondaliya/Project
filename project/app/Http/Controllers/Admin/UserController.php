<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function user(){
        $users=User::paginate(6);
        $count=count(User::all());
        $max_count=ceil($count/6);
        return view('admin.users.view',compact('users','max_count'));
    }
}
