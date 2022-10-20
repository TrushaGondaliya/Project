<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MemberController extends Controller
{
    //
    function list(){
        $data=User::all();
        return view('list',['users'=>$data]);
    }
    function delete($id){
        $data=User::find($id);
        $data->delete();
        return redirect('list');
    }

    function showData($id){
        $data=User::find($id);
        return view('edit',['data'=>$data]);
    }

    function edit(Request $req){
        $data=User::find($req->id);
        $data->username=$req->username;
        $data->password=$req->password;
        $data->user_role=$req->user_role;
        $data->save();
        return redirect('list');
    }
   
}
