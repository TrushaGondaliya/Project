<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class CmsController extends Controller
{
    function add(){
        return view('admin.CMS.cms-add');
    }

    function index(){
        $users=User::paginate(6);
        $count=count(User::all());
        $max_count=ceil($count/6);
        return view('admin.CMS.view',compact('users','max_count'));
    }
}
