<?php

namespace App\Http\Controllers;

use App\Models\Story;
use App\Models\Media;
use Illuminate\Http\Request;

class StorieslistingController extends Controller
{
    function stories_listing(){
        $media=Media::all();
        $story = Story::where('status','PUBLISHED')->where('published_at','!=',null)->paginate(6);
        return view('stories_listing',compact('story','media'));
    }
}
