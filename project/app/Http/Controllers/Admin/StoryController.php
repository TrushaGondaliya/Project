<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Story;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    function story(){
        $story=Story::paginate(6);
        $count=count(Story::all());
        $max_count=ceil($count/6);
        return view('admin.story.index',compact('story','max_count'));
    }
}
