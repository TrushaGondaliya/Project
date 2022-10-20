<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StorieslistingController extends Controller
{
    function stories_listing(){
        return view('stories_listing');
    }
}
