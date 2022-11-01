<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function register()
    {
        return view('register');
    }

    function add(Request $request)
    {
        $user = new User;
        $user->first_name = $request->fname;
        $user->last_name = $request->lname;
        $user->phone_num = $request->num;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->confirm_password = $request->confirm_password;
        $result = $user->save();
        if ($result) {
            return redirect('register');
        } else {
            return ["error"];
        }
    }
}
