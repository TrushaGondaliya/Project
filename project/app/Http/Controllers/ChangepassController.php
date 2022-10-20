<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChangepassController extends Controller
{
    function change_pass(){
        return view('change_pass');
    }
}
