<?php

namespace App\Http\Controllers;

use App\Mail\InviteEmail;
use App\Models\Mission;
use App\Models\MissionInvite;
use App\Models\Story;
use App\Models\StoryInvite;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class InviteController extends Controller
{
    function abc($id){
        $time = Mission::find($id);
        return response()->json([
            'status' => 200,
            'invite' => $time,
        ]);
    }

    function inviteStory($id)
    {
        $story = Story::find($id);
        return response()->json([
            'status' => 200,
            'invite' => $story,
        ]);
    }
    function invite(Request $request)
    {
        $invite = new MissionInvite;
        if (MissionInvite::where('mission_id', '=', $request->mission_id)->where('from_user_id', '=', Auth::user()->user_id)->where('to_user_id', '=', $request->user_id)->get()->isEmpty()) {
        $invite->mission_id = $request->mission_id;
        $invite->from_user_id = Auth::user()->user_id;
        $invite->to_user_id = $request->user_id;
        $invite->save();
        $email = User::where('user_id', Auth::user()->user_id)->pluck('email');
        $send = User::where('user_id', $request->user_id)->pluck('email');
        $misison = Mission::where('mission_id', $request->mission_id)->pluck('title');
        $data=[
            'From'=>$email,
            'Message'=>$misison,
        ];
        Mail::to($send)->send(new InviteEmail($data));
    }
    else{
        return redirect()->back()->with('message', 'already invited!');
    }
        return redirect()->back()->with('message', 'invite successfully!');
    }

    function invite_story(Request $request)
    {
        $invite = new StoryInvite;
        $invite->story_id = $request->story_id;
        $invite->from_user_id = Auth::user()->user_id;
        $invite->to_user_id = $request->user_id;
        $invite->save();
        $email = User::where('user_id', Auth::user()->user_id)->pluck('email');
        $send = User::where('user_id',$request->user_id)->pluck('email');
        $story = Story::where('story_id', $request->story_id)->pluck('title');
        $data=[
            'From'=>$email,
            'Message'=>$story,
        ];
        Mail::to($send)->send(new InviteEmail($data));
        return redirect()->back()->with('message', 'invite successfully!');
    }
}
