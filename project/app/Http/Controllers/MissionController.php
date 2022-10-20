<?php

namespace App\Http\Controllers;
use App\Models\Mission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MissionController extends Controller
{
    public function home(){
     $missions=DB::select('select * from missions');
     return view('home',['missions'=>$missions]);
    }
}
