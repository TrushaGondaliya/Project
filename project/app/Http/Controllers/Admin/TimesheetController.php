<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TimesheetController extends Controller
{
    function timesheet(){
        return view('admin.timesheet');
    }

    function edit(){
        return view('admin.edit-time');
    }
}
