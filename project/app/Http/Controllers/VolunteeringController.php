<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Comments;
use Illuminate\Support\Facades\Auth;


class VolunteeringController extends Controller
{
    //
    function vol(Request $request,$id){
        $missions = Mission::where('mission_id', $id)->get();
        $comments=Comments::all();
        return view('volunteering',compact('id','missions','comments'));
    }

    function com(Request $request){
        $comments=new Comments;
        $comments->mission_id=$request->mission_id;
        $comments->user_id=Auth::user()->user_id;
        $comments->comment=$request->input('comment');
        $comments->save();
        return redirect()->back();
    }

}
