<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class VolunteeringController extends Controller
{
    //
    function vol(Request $request,$id){
        return view('volunteering',compact('id'));
    }

}
