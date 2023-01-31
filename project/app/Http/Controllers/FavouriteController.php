<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use App\Models\Mission;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Exists;

class FavouriteController extends Controller
{
    function favourite($id)
    {

        if (Auth::check()) {
            if (Favourite::where('mission_id', '=', $id)->where('user_id', '=', Auth::user()->user_id)->get()->isEmpty()) {
                $user_id = Auth::user()->user_id;
                $mission_id = $id;
                $data = array('user_id' => $user_id, 'mission_id' => $mission_id);
                DB::table('favourite_mission')->Insert($data);
                return redirect()->back();
            } else {
                Favourite::where('mission_id', '=', $id)->where('user_id', '=', Auth::user()->user_id)->delete();
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }
}
