<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mission;
use App\Models\Story;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoryController extends Controller
{
    function story(Request $request){
        $story = Story::where('status','=','draft')->orwhere('status','=','pending');
        if (request()->has('search') && !empty(request()->input('search'))) {
            $story=Story::where('title','LIKE','%' .request()->input('search'). '%');    
            }
        $story = $story->paginate(6)->withQueryString();
        
        return view('admin.story.index',compact('story'));
        
    }

    function published($id)
    {
       
        $app=Story::find($id);
      
       if($app)
       {
        $data=[
            'status'=>'published',
            'published_at'=>Carbon::now()->toDateTimeString()
        ];
        $app->update($data);
       }
        return redirect('admin/story')->with('message','status updated!');
    }
    
    function decline($id)
    {
       
        $app=Story::find($id);
      
       if($app)
       {
        $data=[
            'status'=>'DECLINE'
        ];
        $app->update($data);
       }
        return redirect('admin/story')->with('message','status updated!');
    }

    function create_story()
    {
        $mission=Mission::all();
        $user=User::all();
        return view('admin/story/create',compact('mission','user'));
    }

    function add_story(Request $request)
    {
       
        $this->validate($request,[
            'mission_id'=>'required',
            'user_id'=>'required'
        ]);
        $title=$request->input('title');
        $mission_id=$request->input('mission_id');
        $user_id=$request->input('user_id');
      
        $data=array('title'=>$title,'mission_id'=>$mission_id,'user_id'=>$user_id);
        DB::table('story')->insert($data);
        return redirect('admin/story')->with('message','story added successfully!');
        
    }

    function delete(Request $request){
        Story::where('story_id',$request->story_id)->delete();
        return redirect()->back()->with('message','story deleted successfully!');
    }
}
