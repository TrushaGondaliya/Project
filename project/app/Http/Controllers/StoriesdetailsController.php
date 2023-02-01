<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;
use App\Models\Media;
use App\Models\Mission;
use App\Models\User;

class StoriesdetailsController extends Controller
{
    function stories_detail(Request $request,$id){
        $media=Media::all();
        Story::where('story_id',$id)->increment('count');
        $stories = Story::where('story_id', $id)->get();
        $missions=Mission::all();
        $users=User::all();
        return view('stories_detail',compact('stories','users','missions','media'));
    }
}
