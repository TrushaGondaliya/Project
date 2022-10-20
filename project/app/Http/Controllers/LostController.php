<?php

namespace App\Http\Controllers;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Throwable;

class LostController extends Controller
{
    function lost(Request $req){
        
        $email=User::where('email',$req->input('email'))->get();
        dd($email);
        if($email[0]->email==$req->input('email')){
            return redirect('send-email');
        }
    }
}
