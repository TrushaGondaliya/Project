<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use App\Models\Mission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavouriteController extends Controller
{
    function favourite(Mission $mission){

        if(Auth::check()){
            if(in_array(auth()->user()->favourites,$mission->favourites))
            {
                auth()->user()->favourites->create([
                    'mission_id'=>$mission->mission_id,
                ]);
            }
        }
        else{
            return redirect('login');
        }
    }
}
