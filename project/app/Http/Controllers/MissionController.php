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
use App\Models\Media;

class MissionController extends Controller
{

    public function __construct()
    {   
        $this->middleware('auth');
    }
    public function home(Request $request){  
        if(Auth::user()->status=='0'){
            $missions = Mission::latest();
        
        if(request()->has('search') && !empty(request()->input('search'))){
        $missions->where('title','LIKE','%' .request()->input('search'). '%')->orwhere('description','LIKE','%' .request()->input('search'). '%');
    }

        $missions = $missions->paginate(6)->withQueryString();
        $count=count($missions);
        $m_id=Application::all();
        $max_count=ceil($count/6);
        return view('home',compact('missions','m_id','count','max_count'));
        }
    
    else {
        return redirect('admin/user')->with('message','you are logged in as admin user');
    }
}


}
