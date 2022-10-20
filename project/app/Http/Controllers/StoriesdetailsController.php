<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoriesdetailsController extends Controller
{
    function stories_detail(){
        return view('stories_detail');
    }
}
