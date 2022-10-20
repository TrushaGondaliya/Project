<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PolicyController extends Controller
{
    function policy_page(){
        return view('policy_page');
    }
}
