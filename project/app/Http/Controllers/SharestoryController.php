<?php

namespace App\Http\Controllers;

use App\Models\Story;
use App\Models\Storymedia;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Mission;

class SharestoryController extends Controller
{
    function share(){
        $missions=Mission::all();
        $story=Story::where('user_id',Auth::user()->user_id)->where('status','DRAFT')->first();
        $media=Storymedia::all();
        return view('share',compact('missions','story','media'));
    }

    function add_story(Request $request)
    {
       
        $data= $request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);
        if(Application::where('mission_id',$request->mission_id)->where('user_id',Auth::user()->user_id)->where('approval_status','APPROVE')->get()->isEmpty()){
            return redirect()->back()->with('message','First apply for mission or misison not approved by admin');
        }
        else{
        if($request->has('submit')){
       
        if(Story::where('user_id',Auth::user()->user_id)->where('mission_id',$request->mission_id)->where('status','DRAFT')->get()->isEmpty()){
        $story=new Story;
        $story->user_id = Auth::user()->user_id;
        $story->mission_id = $request->input( 'mission_id');
        $story->description = $data['description'];
        $story->title = $data['title'];
        $story->status="PENDING";
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
        }
        else{
            $story=Story::where('user_id',Auth::user()->user_id)->where('mission_id',$request->mission_id)->where('status','DRAFT')->first();
            $story->status='PENDING';
            $story->update();
            }
        return redirect('share')->with('message', 'story added successfully');
        }
        elseif($request->has('save')){
        $story = new Story;
        $story->user_id = Auth::user()->user_id;
        $story->mission_id = $request->input( 'mission_id');
        $story->description = $data['description'];
        $story->title = $data['title'];
        $story->status="DRAFT";
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
            return redirect()->back()->with('message','story save as draft');
        }
    }
    }

}