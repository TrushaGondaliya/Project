<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Mockery\Generator\StringManipulation\Pass\Pass;
use PhpParser\Node\Stmt\Use_;
use Illuminate\Support\Facades\Validator;

class ResetController extends Controller
{
    // function reset(Request $request,$token=null){
    //    return view('reset')->with(['token'=>$token,'email'=>$request->email]);
        
    // }


    // function update(Request $request){
    //     $users=User::find($request->email);
    //    dd($users);
    //    $users->password=$request->new_password;
    //    $users->confirm_password=$request->confirm_password;
    //    $users->save();
    //    return redirect()->back();  

    
    // }



     
}
