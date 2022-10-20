<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    function add(Request $request){
       $stars_rated= $request->input('product_rating');
        $mission_id=$request->input('user_id');
        $mission_check=Mission::where('mission_id',$mission_id)->where('status','0')->first();
        if($mission_check){
            $existing_rating=Rating::where('user_id',Auth::id())->where('mission_id',$mission_id)->first();
            if($existing_rating){
                $existing_rating->stars_rated=$stars_rated;
                $existing_rating->update();
            }else{
                Rating::create([
                    'user_id'=>Auth::id(),
                    'mission_id'=>$mission_id,
                    'stars_rated'=>$stars_rated
                ]);
            }
            dd('done');
           
        }

   
    }
}
