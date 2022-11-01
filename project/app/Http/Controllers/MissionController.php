<?php

namespace App\Http\Controllers;
use App\Models\Mission;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Ui\Presets\React;

class MissionController extends Controller
{
    public function home(){
     $missions=DB::select('select * from missions');
     return view('home',['missions'=>$missions]);
    }
   
    
}
