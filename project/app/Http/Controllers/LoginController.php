<?php


namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    
    function login(Request $req){
        try{
          
    $email=User::where('email',$req->input('email'))->get();
    $password=User::where('password',$req->input('password'))->get();
       if($email[0]->email==$req->input('email') && $password[0]->password==$req->input('password')){
        
        return redirect('home');

       }}catch(Throwable $e){
        report($e);
        dd('You have entered wrong credentials');
       }
        }
}
