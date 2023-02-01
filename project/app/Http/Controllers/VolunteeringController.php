<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Support\Facades\DB;
use App\Models\Application;
use App\Models\Favourite;
use App\Models\Media;
use App\Models\Country;
use App\Models\City;
use App\Models\Goal;
use App\Models\User;
use App\Models\Rating;
use Illuminate\Http\Request;
use App\Models\Comments;
use App\Models\Document;
use App\Models\Missionskill;
use Illuminate\Support\Facades\Auth;


class VolunteeringController extends Controller
{
    //
    function vol(Request $request,$id){
        $missions = Mission::where('mission_id', $id)->get();
        $comments=Comments::where('approval_status','PUBLISHED')->get();
        $application=Application::where('user_id',Auth::user()->user_id)->pluck('mission_id');
                $app=Application::where('user_id','!=',Auth::user()->user_id)->pluck('mission_id');
                $favourite=Favourite::all();
                $media=Media::all();
                $media1=Media::all();
                $mission=Mission::all();
                $country=Country::all();
                $city=City::all();
                $users=User::all();
                $goal=Goal::all();
                $goal1=Goal::all();
                $documents=Document::all();
                $skills=Missionskill::all();
                $volunteers=Application::all();
                $rate=Rating::selectRaw('mission_id, avg(rating) as times_added')
                            ->groupBy('mission_id')
                            ->orderByDesc('times_added')->get();
                            $rated=Rating::selectRaw('mission_id, avg(rating) as times_added')
                            ->groupBy('mission_id')
                            ->orderByDesc('times_added')->get();
        return view('volunteering',compact('id','media1','volunteers','skills','documents','goal1','rated','missions','comments','rate','goal','users','country','city','application','mission','favourite','media'));
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
