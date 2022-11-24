<?php

namespace App\Http\Controllers\Admin;

use App;
use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Mission;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminmissionController extends Controller
{
    function index(Request $request)
    {
        $missions=$request['search'];
        if($missions!=" ")
        {
            $missions=Mission::where('title','LIKE','%' .$missions. '%')->paginate(6);
            $count=count(Mission::all());
            $max_count=ceil($count/6);
            return view('admin.mission.index',compact('missions','max_count'));
        }
    
       
    }

    function create()
    {
        return view('admin.mission.create');
    }

    function application(Request $request)
    {
          
            $application=Application::where('approval_status','=','PENDING ')->orwhere('approval_status','=','DECLINE ')->paginate(6);
            $count = count(Application::all());
        $max_count = ceil($count / 6); 
        return view('admin.mission.application',compact('application','max_count'));

        
       
    }

    function approve($id)
    {
       
        $app=Application::find($id);
      
       if($app)
       {
        $data=[
            'approval_status'=>'APPROVE'
        ];
        $app->update($data);
       }
        return redirect('admin/application')->with('message','status updated!');
    }
    
    function decline($id)
    {
        // dd('jedj');
        $app=Application::find($id);
      
       if($app)
       {
        $data=[
            'approval_status'=>'DECLINE'
        ];
        $app->update($data);
       }
        return redirect('admin/application')->with('message','status updated!');
    }

    function create_app()
    {
        
        $mission=Mission::all();
        $user=User::all();
        return view('admin/mission/create_application',compact('mission','user'));
    }

    function add_app(Request $request)
    {
       
        $this->validate($request,[
            'mission_id'=>'required',
            'user_id'=>'required'
        ]);
        $mission_id=$request->input('mission_id');
        $user_id=$request->input('user_id');
      
        $data=array('mission_id'=>$mission_id,'user_id'=>$user_id);
        DB::table('mission_application')->insert($data);
        return redirect('admin/application')->with('message','application added successfully!');
        
    }
}
