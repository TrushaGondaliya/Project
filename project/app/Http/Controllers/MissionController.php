<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Cms;
use App\Models\Mission;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Ui\Presets\React;
use App\Http\Middleware\AuthUser;
use App\Models\City;
use App\Models\Country;
use App\Models\Favourite;
use App\Models\Media;
use App\Models\Missionskill;
use App\Models\Skill;
use App\Models\Theme;
use PhpParser\Node\Expr\List_;
use Termwind\Components\Li;

class MissionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function home(Request $request)
    {
        if (Auth::user()->status == '0') {
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
                                $missions = Mission::all();
                                break;
                        }
                    }   
            }

            if (request()->has('search') && !empty(request()->input('search'))) {
                $missions = Mission::where('title', 'LIKE', '%' . request()->input('search') . '%')->orwhere('description', 'LIKE', '%' . request()->input('search') . '%');
            }
            if (request()->has('country') && !empty(request()->input('country'))) {
                $name = Country::where('name', request()->input('country'))->pluck('country_id');
                $missions=Mission:: where(['country_id' => $name]);
            }
            if (request()->has('theme') && !empty(request()->input('theme'))) {
                $name = Theme::whereIn('title', request()->input('theme'))->pluck('mission_theme_id')->toArray();
                $missions=Mission:: whereIn('theme_id' , $name);
            }
            if (request()->has('skill') && !empty(request()->input('skill'))) {  
                $skill_id = Skill::whereIn('skill_name', request()->input('skill'))->pluck('skill_id');
                $mission_id = Missionskill::whereIn('skill_id', $skill_id)->pluck('mission_id')->toArray();
                $missions = Mission::whereIn('mission_id', $mission_id);
            }
                if (request()->has('city') && !empty(request()->input('city'))) {
                $name = City:: whereIn('name', request()->input('city'))->pluck('city_id')->toArray();
                $missions = Mission::whereIn('city_id', $name);
            }
            $missions = $missions->paginate(6)->withQueryString();
            $m_id = Application::all();
            return view('home', compact('missions', 'm_id'));
        } else {
            return redirect('admin/user')->with('message', 'you are logged in as admin user');
        }
    }
}
