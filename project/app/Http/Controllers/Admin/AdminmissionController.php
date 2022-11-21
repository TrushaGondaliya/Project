<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Mission;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class AdminmissionController extends Controller
{
    function index()
    {
        $missions=Mission::paginate(6);
        $count=count(Mission::all());
        $max_count=ceil($count/6);
        return view('admin.mission.index',compact('missions','max_count'));
    }

    function create()
    {
        return view('admin.mission.create');
    }

    function application()
    {
        $application=Application::paginate(6);
        $count=count(User::all());
        $max_count=ceil($count/6);
        return view('admin.mission.application',compact('application','max_count'));
    }
}
