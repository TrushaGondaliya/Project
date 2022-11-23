<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use App\Models\Mission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Exists;

class FavouriteController extends Controller
{
    function favourite(Request $request,$id){

        if(Auth::check()){
          $request->validate([
            'id'=>'unique:favourite_mission'
          ]);
        $user_id=Auth::user()->user_id;
        $mission_id= $request->id;
        // dd($mission_id);
        $data=array('user_id'=>$user_id,'mission_id'=>$mission_id);
        DB::table('favourite_mission')->insert($data);
        return redirect('home');
        }
        else{
            return redirect('login');
        }
    }
}
