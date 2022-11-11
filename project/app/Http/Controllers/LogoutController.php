<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    //
    public function destroy(){
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}
