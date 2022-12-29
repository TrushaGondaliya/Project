<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    

        function rating(Request $request,$id)
        {
         
            $stars_rated= $request->input('star');
               
                    $existing_rating=Rating::where('user_id',Auth::user()->user_id)->where('mission_id',$id)->first();
                    if($existing_rating){
                        $existing_rating->rating=$stars_rated;
                        $existing_rating->update();
                    }else{
                        
                            $rating=new Rating;
                            $rating->user_id=Auth::user()->user_id;
                            $rating->mission_id=$id;
                            $rating->rating=$stars_rated;
                            $rating->save();
                        
                     }
                
                return redirect()->back();
        }
 
}
