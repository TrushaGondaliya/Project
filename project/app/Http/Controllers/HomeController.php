<?php

namespace App\Http\Controllers;

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
        $missions=DB::select('select * from missions');
        return view('mission_listing',['missions'=>$missions]);
       }
}
