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

    function edit_goal(Request $request){
        dd($request->input('mission_id'));
    }
}
