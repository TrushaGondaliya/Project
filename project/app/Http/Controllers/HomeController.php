<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class HomeController extends Controller
{
       
  
       function list(){
        $missions=DB::select('select * from missions');
     return view('list',['missions'=>$missions]);
       
       }

       function grid(){
        return view('home');
       }

       function mission_listing(){
              $missions=Mission::paginate(6);
              $count=count(Mission::all());
              $max_count=ceil($count/6);
        return view('mission_listing',compact('missions','max_count'));
       }
}
