<?php

namespace App\Http\Controllers;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class LostController extends Controller
{
    function lost(Request $req){
        
        $email=$req->input('email');
  
    $checklogin=DB::table('users')->where(['email'=>$email])->first();
        // dd($email);
        if($email[0]->email==$req->input('email')){
            return redirect('send-email')->with(['email'=>$checklogin->email]);
        }
    }
}
