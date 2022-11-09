<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class LostController extends Controller
{
    function lost(Request $req){
        
        $email=User::where('email',$req->input('email'))->first();
        // dd($email);
        if($email[0]->email==$req->input('email')){
            return redirect('send-email');
        }
    }

    function sendResetLink(Request $request){
        $request->validate([
            'email'=>'required|email|exists:users,email',
        ]);

        $token=Str::random();
        DB::table('password_resets')->insert([
            'email'=>$request->email,
            'token'=>$token,
            'created_at'=>Carbon::now(),
        ]);
        $action_link=route('reset',['token'=>$token,'email'=>$request->email]);
        $body="we are send mail to ".$request->email." . you can reset your password";
        Mail::send('email-forgot',['action_link'=>$action_link,'body'=>$body],function($message) use ($request){
            $message->from('trushagondaliya30@gmail.com','abc');
            $message->to($request->email,'name')->subject('reset');
        });

        return ['success'];

    }

    function reset(Request $request, $token=null){
        return view('reset')->with(['token'=>$token,'email'=>$request->email]);
    }

    function resetPassword(Request $request){
        $request->validate([
            'email'=>'required|email|exists:users,email',
            'password'=>'required|min:5',
            'password_confirmation'=>'required',
        ]);

        $check_token=DB::table('password_resets')->where([
            'email'=>$request->email,
            'token'=>$request->token,
        ])->first();
        if(!$check_token){
            return ['error'];
        }else{

            User::where('email','=',$request->email)->update([
                    'password'=>Hash::make($request->password),
          

                    
            ]);

            DB::table('password_resets')->where([
                'email'=>$request->email
            ])->delete();

            return ['success'];
        }

    }

}
