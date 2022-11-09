<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavouriteController extends Controller
{
    function favourite(Request $request){
        if(Auth::check()){
            Favourite::create([
                'user_id'=>Auth::user()->user_id,
                'mission_id'=>$request->mission_id
            ]);
        }
        else{
            return redirect('login');
        }
    }
}
