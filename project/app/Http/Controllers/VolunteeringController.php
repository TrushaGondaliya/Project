<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class VolunteeringController extends Controller
{
    //
    function vol(Request $request,$id){
        $missions = Mission::where('mission_id', $id)->get();
    
        return view('volunteering',compact('id','missions'));
    }

}
