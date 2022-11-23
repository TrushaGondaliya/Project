<?php

namespace App\Http\Controllers;

use App\Models\Cms;
use Illuminate\Http\Request;

class navbarController extends Controller
{
    function view()
    {
        $cms=Cms::all();
        return view('home',compact('cms'));
    }
}
