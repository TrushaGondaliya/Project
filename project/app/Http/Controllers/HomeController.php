<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Mission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class HomeController extends Controller
{


       function list()
       {
              $missions = Mission::all();
              return view('list', ['missions' => $missions]);
       }
       function grid()
       {
              return view('home');
       }
       function mission_listing()
       {
              $missions = Mission::paginate(6);
              $count = count(Mission::all());
              $max_count = ceil($count / 6);
              $m_id = Application::all();
              return view('mission_listing', compact('missions', 'max_count','m_id'));
       }
}
