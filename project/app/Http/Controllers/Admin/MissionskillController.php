<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;

class MissionskillController extends Controller
{
    function index(Request $request)
    {
      
        
        $skill=$request['search'];
        if($skill!=" ")
        {
            $skill=Skill::where('skill_name','LIKE','%' .$skill. '%')->paginate(6);
            $count=count(Skill::all());
            $max_count=ceil($count/6);
        
        return view('admin/mission_skill/view',compact('skill','max_count'));
        }
    }

    function create()
    {
        return view('admin/mission_skill/create');
    }

    function add_skill(Request $request)
    {
        $request->validate([
            'skill_name'=>'required',
            'status'=>'required'
        ]);

        $skill_name=$request->input('skill_name');
        $status=$request->input('status');
        $data=array('skill_name'=>$skill_name,'status'=>$status);
        DB::table('skill')->insert($data);
        return redirect('admin/skill')->with('message','added successfully!');
    }

    function edit($id)
    {
        $skills=Skill::where('skill_id',$id)->get();
        return view('admin/mission_skill/edit',compact('skills'));
    }

    function update(Request $request,$id)
    {
        $request->validate([
            'skill_name'=>'required',
            'status'=>'required'
        ]);

        $skill_name=$request->input('skill_name');
        $status=$request->input('status');
        $data=array('skill_name'=>$skill_name,'status'=>$status);
        DB::table('skill')->where('skill_id',$id)->update($data);
        return redirect('admin/skill')->with('message','updated successfully!');
    }

    function delete(Request $request)
    {
        $id=Skill::where('skill_id',$request->skill_id);
        $id->delete();
       
        return redirect('admin/skill')->with('message','deleted successfully!');
    }

}

