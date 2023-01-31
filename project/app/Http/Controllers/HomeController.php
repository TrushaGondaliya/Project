<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Mission;
use App\Models\Cms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\City;
use App\Models\Country;
use App\Models\Favourite;
use App\Models\Media;
use App\Models\Missionskill;
use App\Models\Skill;
use App\Models\Theme;
use App\Models\Goal;
use App\Models\User;
use App\Models\Rating;



class HomeController extends Controller
{


       function list(Request $request)
       {
              $missions = Mission::latest();

                if (!empty($request->sort)) {
                    if ($request->sort != 0) {
                        switch ($request->sort) {
                            case 'Newest':
                                $missions = Mission::orderBy('created_at', 'desc');
                                break;
                            case 'Oldest':
                                $missions = Mission::orderBy('created_at', 'asc');
                                break;
                            case 'Lowest available seats':
                                $missions = Mission::orderBy('seat_left', 'asc');
                                break;
                            case 'Highest available seats':
                                $missions = Mission::orderBy('seat_left', 'desc');
                                break;
                            case 'My favourites':
                                $fav_m = DB::table("favourite_mission")->where('user_id', Auth::user()->user_id)->where('deleted_at',null)->pluck('mission_id');
                                $missions = Mission::whereIn('mission_id', $fav_m);
                                break;
                            case 'Registration deadline':
                                $missions = Mission::orderBy('end_date', 'desc');
                                break;
                            default:
                                $missions = Mission::latest();
                                break;
                        }
                    }   
            }
         
            $missions=$missions->get();
            $application=Application::where('user_id',Auth::user()->user_id)->pluck('mission_id');
                $app=Application::where('user_id','!=',Auth::user()->user_id)->pluck('mission_id');
                $favourite=Favourite::all();
                $media=Media::all();
                $mission=Mission::all();
                $country=Country::all();
                $city=City::all();
                $users=User::all();
                $goal=Goal::all();
                $rate=Rating::selectRaw('mission_id, avg(rating) as times_added')
                            ->groupBy('mission_id')
                            ->orderByDesc('times_added')->get();
              $m_id = Application::all();
              return view('list', compact('missions','rate','goal','users', 'm_id','country','city','application','mission','favourite','media'));
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
