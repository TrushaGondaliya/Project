<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;
use Throwable;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    function login(Request $req){
       
          
    $email=$req->input('email');
    $password=$req->input('password');
    $checklogin=DB::table('users')->where(['email'=>$email,'password'=>$password])->first();
       if($checklogin){
        
        return redirect('home')->with(['name'=>$checklogin->first_name]);

       }else{
        return ['you have entered wrong credentials'];
       }
        }
}
