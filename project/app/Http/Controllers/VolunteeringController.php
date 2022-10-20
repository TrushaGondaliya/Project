<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class VolunteeringController extends Controller
{
    //
    function volunteering(){
        $missions=DB::select('select * from missions');
        return view('volunteering',['missions'=>$missions]);
    }
}
