<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\City;
use App\Models\Country;
use App\Models\Mission;
use App\Models\User;
// use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Exists;
use PHPUnit\Framework\Constraint\Count;

class UserController extends Controller
{

  
    function user(Request $request)
    {
        $users=$request['search']??" ";
        if($users!=" ")
        {
            $users=User::where('first_name','LIKE','%' .$users. '%')->orwhere('last_name','LIKE','%' .$users. '%')->orwhere('email','LIKE','%' .$users. '%')->paginate(6);
            $count = count(User::all());
        $max_count = ceil($count / 6); 
        return view('admin.users.view', compact('users', 'max_count'));
        }
        if($users==" "){
            $users=User::paginate(6);
            $count = count(User::all());
        $max_count = ceil($count / 6); 
        return view('admin.users.view', compact('users', 'max_count'));
        }
        
    }

    function create()
    {

        return view('admin/users/create');
    }

    function add_user(UserRequest $request)
    {

        $data = $request->validated();

        $user = new User;
        $user->first_name = $data['first_name'];
        $user->last_name = $data['last_name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $file = $request->file('avtar');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move('uploads/user/', $filename);
        $user->avtar = $filename;
        $user->employee_id = $data['employee_id'];
        $user->department = $data['department'];
        $user->city_id=City::whereName($request->input('city'))->first()->city_id;
       $user->country_id=Country::whereName($request->input('country'))->first()->country_id;
        $user->profile_text = $data['profile_text'];
        $user->status=$data['status'];
        $user->save();
        return redirect('admin/user')->with('message', 'user added succesfully');
    }

    function edit(Request $request,$user_id)
    {
        
        $user = User::where('user_id', $user_id)->get();
        return view('admin.users.edit', compact('user'));
    }

    function update(UserRequest $request, $user_id)
    {
        $data = $request->validated();

        $user = User::find($user_id);
        $user->first_name = $data['first_name'];
        $user->last_name = $data['last_name'];
        $user->email = $data['email'];
        $destination = 'uploads/user/' . $user->avtar;
        if (File::exists($destination))
        {
            File::delete($destination);
        }
        $file = $request->file('avtar');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move('uploads/user/', $filename);
        $user->avtar = $filename;
        $user->employee_id = $data['employee_id'];
        $user->department = $data['department'];
       
       $user->city_id=City::whereName($request->input('city'))->first()->city_id;
       $user->country_id=Country::whereName($request->input('country'))->first()->country_id;

        $user->profile_text = $data['profile_text'];
        $user->status=$data['status'];
        $user->update();
        return redirect('admin/user')->with('message', 'user updated succesfully');
    }

    function delete(Request $request)
    {
        DB::table('mission_application')->where('user_id', $request->user_id)->delete();
        DB::table('story')->where('user_id', $request->user_id)->delete();

        DB::table('users')->where('user_id', $request->user_id)->delete();
        return redirect('admin/user')->with('message', 'deleted successfully');
    }


    function edit_admin()
    {
        $user = Auth::user();
        return view('admin/users/edit_profile',compact('user'));
    }
    function update_admin(UserRequest $request)
    {
        $data = $request->validated();

        $user = Auth::user();
        $user->first_name = $data['first_name'];
        $user->last_name = $data['last_name'];
        $user->email = $data['email'];
        $destination = 'uploads/user/' . $user->avtar;
        if (File::exists($destination))
        {
            File::delete($destination);
        }
        $file = $request->file('avtar');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move('uploads/user/', $filename);
        $user->avtar = $filename;
        $user->employee_id = $data['employee_id'];
        $user->department = $data['department'];
       
       $user->city_id=City::whereName($request->input('city'))->first()->city_id;
       $user->country_id=Country::whereName($request->input('country'))->first()->country_id;

        $user->profile_text = $data['profile_text'];
        $user->status=$data['status'];
        $user->update();
        return redirect('admin/user')->with('message', 'user updated succesfully');
    }
}
