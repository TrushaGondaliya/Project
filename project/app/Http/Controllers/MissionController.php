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
      
        $missions=Mission::paginate(6);
        $count=count(Mission::all());
        $max_count=ceil($count/6);
  return view('home',compact('missions','max_count'));
 
    }
   
    
}
