<?php

namespace App\Http\Controllers;
use App\Models\Mission;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\In;
use Symfony\Component\Console\Input\Input;

class searchController extends Controller
{
    
    

    public function view(Request $request){
        $search=$request['search'];
        if($search!=" "){
            $missions=Mission::where('title','LIKE','%' .$search. '%')->orwhere('discription','LIKE','%' .$search. '%')->get();
        return view('search',['missions'=>$missions]);
        }
      


    }
}
