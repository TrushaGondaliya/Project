<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\User;
use App\Models\Skill;
use App\Models\Userskill;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class UsereditController extends Controller
{
    function view_profile()
    {
        $uskill=Userskill::where('user_id', Auth::user()->user_id);
        $userskill =$uskill->pluck('skill_id')->toArray(); 
        $country=Country::all();
        $city=City::all();  
        $skill=Skill::all();
        return view('edit_profile',compact('userskill','country','city','skill'));
    }
   function edit_profile(Request $request){
      $user=$request->validate([
        'first_name'=>'required',
        'last_name'=>'required',
        'employee_id'=>'required',
        'department'=>'required',
        'title'=>'required',
        'profile_text'=>'required',
        'city'=>'required',
        'country'=>'required',
        'why_i_volunteer'=>'required'
      ]);
        $user = User::find(Auth::user()->user_id);
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->employee_id = $request->input('employee_id');
        if ($request->hasfile('avtar')) {
            $destination = 'uploads/user/' . $user->avtar;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('avtar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/user/', $filename);
            $user->avtar = $filename;
        }
        $user->department = $request->input('department');
        $user->title = $request->input('title');

        $user->profile_text = $request->input('profile_text');
        $user->why_i_volunteer = $request->input('why_i_volunteer');
       $user->city_id=City::whereName($request->input('city'))->first()->city_id;
       $user->country_id=Country::whereName($request->input('country'))->first()->country_id;

     
        $user->linked_in_url = $request->input('linked_in_url');
        $user->update();

        foreach ($request->skill_id as $index) {
            $id = Auth::user()->user_id;
                
            $skill_id =$index;
            $skill=array(
                'user_id'=>$id,
                'skill_id'=>$skill_id
            );
            DB::table('user_skill')->where('user_id',$id)->updateOrInsert($skill);
            }
        return redirect('edit_profile')->with('message','updated successfully!');
    }

    function edit(Request $request)
    {
      
        $request->validate([

            'old_password' => ['required', new MatchOldPassword],

            'new_password' => ['required'],

            'confirm_password' => ['same:new_password'],

        ]);
        User::find(auth()->user()->user_id)->update(['password'=> Hash::make($request->new_password)]);

        return redirect('edit_profile')->with('message','password updated successfully!');
       
    }
}
