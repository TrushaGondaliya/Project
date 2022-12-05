<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class UsereditController extends Controller
{
    function view_profile()
    {
        return view('edit_profile');
    }
   function edit_profile(Request $request){
      
        $user = User::find(Auth::user()->user_id);
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->employee_id = $request->input('employee_id');
        
        $destination = 'uploads/user/' . $user->avtar;
        if (File::exists($destination))
        {
            File::delete($destination);
        }
        $file = $request->file('avtar');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move('uploads/user/', $filename);
        $user->avtar = $filename;
        $user->department = $request->input('department');
        $user->title = $request->input('title');

        $user->profile_text = $request->input('profile_text');
        $user->why_i_volunteer = $request->input('why_i_volunteer');
       $user->city_id=City::whereName($request->input('city'))->first()->city_id;
       $user->country_id=Country::whereName($request->input('country'))->first()->country_id;

     
        $user->linked_in_url = $request->input('linked_in_url');
        $user->update();
        return redirect('edit_profile')->with('message','updated successfully!');
    }
}
