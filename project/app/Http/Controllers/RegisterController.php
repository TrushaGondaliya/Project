<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    function register()
    {
        return view('register');
    }

    function add(RegisterRequest $request)
    {
        $data=$request->validated();
        $user = new User;
        $user->first_name = $data['first_name'];
        $user->last_name = $data['last_name'];
        $user->phone_number = $data['phone_number'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->save();
      return redirect('register')->with('message','user added succssfully');
    }
}
