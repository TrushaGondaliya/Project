<?php

namespace App\Http\Controllers;

use App\Models\Story;
use App\Models\Storymedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SharestoryController extends Controller
{
    function share(){
        return view('share');
    }

    function add_story(Request $request)
    {
       
        $data= $request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);

        $story = new Story;
        $story->user_id = Auth::user()->user_id;
        $story->mission_id = $request->input( 'mission_id');
        $story->description = $data['description'];
        $story->title = $data['title'];
        $story->save();

        if ($request->hasFile('image')) {
            $files = $request->file('image');
            foreach($files as $file){
                $media = new Storymedia;
                $media->story_id = $story->story_id;
                $filename =  $file->getClientOriginalName();
                $file->move('uploads/story/', $filename);
                $media->path = $filename;
            $media->type = $file->getClientMimeType();
            $media->save();
            }
            }
        return redirect('share')->with('message', 'story added successfully');

    }

}
