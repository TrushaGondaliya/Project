<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;

class StoriesdetailsController extends Controller
{
    function stories_detail(Request $request,$id){
        $stories = Story::where('story_id', $id)->get();
        return view('stories_detail',compact('stories'));
    }
}
