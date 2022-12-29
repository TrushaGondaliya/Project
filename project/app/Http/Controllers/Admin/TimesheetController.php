<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Timesheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TimesheetController extends Controller
{
    function timesheet(Request $request){
        $timesheet = Timesheet::all();
        return view('admin.timesheet',compact('timesheet'));
    }


    function add(Request $request){
        $timesheet = new Timesheet;
        $timesheet->user_id = Auth::user()->user_id;
        $timesheet->mission_id = $request->input('mission_id');
        $timesheet->date_volunteered = $request->input('date_volunteered');
        $timesheet->time=$request->input('time');
        $timesheet->notes = $request->input('notes');
        $timesheet->save();
        return redirect()->back();
    }

    function add_goal(Request $request)
    {
        $timesheet = new Timesheet;
        $timesheet->user_id = Auth::user()->user_id;
        $timesheet->mission_id = $request->input('mission_id');
        $timesheet->date_volunteered = $request->input('date_volunteered');
        $timesheet->action=$request->input('action');
        $timesheet->notes = $request->input('notes');
        $timesheet->save();
        return redirect()->back();

    }

    function edit_goal($id){
        $time = Timesheet::find($id);
        return response()->json([
            'status' => 200,
            'time' => $time,
        ]);
    }

    function edit_time($id){
        $time = Timesheet::find($id);
        return response()->json([
            'status' => 200,
            'time' => $time,
        ]);
    }

    function update_time(Request $request)
    {
        $id = $request->input('id');
        $timesheet =Timesheet::find($id);
        $timesheet->user_id = Auth::user()->user_id;
        $timesheet->mission_id = $request->input('mission_id');
        $timesheet->date_volunteered = $request->input('date_volunteered');
        $timesheet->time=$request->input('time');
        $timesheet->notes = $request->input('notes');
        $timesheet->update();
        return redirect()->back();
    }

    
    function update_goal(Request $request)
    {
        $id = $request->input('id');
        $timesheet =Timesheet::find($id);
        $timesheet->user_id = Auth::user()->user_id;
        $timesheet->mission_id = $request->input('mission_id');
        $timesheet->date_volunteered = $request->input('date_volunteered');
        $timesheet->action=$request->input('action');
        $timesheet->notes = $request->input('notes');
        $timesheet->update();
        return redirect()->back();
    }

    function delete_time(Request $request)
    {
        Timesheet::where('timesheet_id', $request->timesheet_id)->delete();
        return redirect()->back();
    }
}
