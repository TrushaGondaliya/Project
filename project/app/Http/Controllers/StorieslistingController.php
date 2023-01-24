<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;

class StorieslistingController extends Controller
{
    function stories_listing(){
        $story = Story::where('status','published')->paginate(6);
        return view('stories_listing',compact('story'));
    }
}
