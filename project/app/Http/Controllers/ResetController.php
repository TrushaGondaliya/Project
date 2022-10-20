<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class ResetController extends Controller
{
    function reset(){
        return view('reset');
    }
}
