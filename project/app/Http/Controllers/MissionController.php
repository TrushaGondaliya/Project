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
use App\Models\Country;
use App\Models\Favourite;
use App\Models\Media;
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
           

            if ($request->ajax()) {
                if (!empty($request->country)  ) {
                    $missions->where(['country_id' => $request->country]);
                    $missions = $missions->paginate(6)->withQueryString();
                    $m_id = Application::all();
                    return view('home', compact('missions', 'm_id'))->render();
                    }      
            }
            if ($request->ajax()) {
                if (!empty($request->sort)) {
                    if ($request->sort != 0) {
                        switch ($request->sort) {
                            case '1':
                                $missions = Mission::orderBy('created_at', 'desc');
                                break;
                            case '2':
                                $missions = Mission::orderBy('created_at', 'asc');
                                break;
                            case '3':
                                $missions = Mission::orderBy('seat_left', 'asc');
                                break;
                            case '4':
                                $missions = Mission::orderBy('seat_left', 'desc');
                                break;
                            case '5':

                                $fav_m = DB::table("favourite_mission")->where('user_id', Auth::user()->user_id)->pluck('mission_id');
                                $missions = Mission::whereIn('mission_id', $fav_m);
                                break;
                            case '6':
                                $missions = Mission::orderBy('end_date', 'desc');
                                break;
                            default:
                                $missions = Mission::all();
                                break;
                        }
                    }
                }
            }

            if ($request->ajax()) {
                if (!empty($request->city)) {
                    $search_array =  request()->city;
                    $missions = Mission::whereIn('city_id', $search_array);
                    $missions = $missions->paginate(6);
                    $m_id = Application::all();
                    return view('home', compact('missions', 'm_id'));
                }
            }

            if (request()->has('search') && !empty(request()->input('search'))) {
             
                $missions = Mission::where('title', 'LIKE', '%' . request()->input('search') . '%')->orwhere('description', 'LIKE', '%' . request()->input('search') . '%');
            }
            $missions = $missions->paginate(6)->withQueryString();
            $m_id = Application::all();
            return view('home', compact('missions', 'm_id'));
        } else {
            return redirect('admin/user')->with('message', 'you are logged in as admin user');
        }
    }
}
