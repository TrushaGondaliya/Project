<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MissionthemeController extends Controller
{
    function create()
    {
        return view('admin.mission_theme.create');
    }

    function index(Request $request){
        $theme = Theme::latest();
        if (request()->has('search') && !empty(request()->input('search'))) {
            $theme = Theme::where('title', 'LIKE', '%' . request()->input('search') . '%');
            }
            $theme = $theme->paginate(6)->withQueryString();
       
        return view('admin.mission_theme.view',compact('theme'));

        
    }

    function add_theme(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
  
        ]);
       
        $title=$request->input('title');
      
        $status=$request->input('status');
        $data=array('title'=>$title,'status'=>$status);
        DB::table('mission_theme')->insert($data);
        return redirect('admin/theme')->with('message','Mission Theme added Successfully!');
    }

    function edit($id)
    {
        $theme = Theme::where('mission_theme_id', $id)->get();
        return view('admin.mission_theme.edit', compact('theme'));
    }

    function update(Request $request,$id)
    {
        $this->validate($request,[
            'title'=>'required',
  
        ]);
        $title=$request->input('title');
        $status=$request->input('status');
        $data=array('title'=>$title,'status'=>$status);
        DB::table('mission_theme')->where('mission_theme_id',$id)->update($data);
        return redirect('admin/theme')->with('message','Mission Theme updated Successfully!');
    }

    function delete(Request $request)
    {
        $id=Theme::where('mission_theme_id',$request->mission_theme_id);

        $id->delete();
        return redirect('admin/theme')->with('message','delete successfully!');
    }
}
