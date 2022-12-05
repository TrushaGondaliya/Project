<?php

namespace App\Http\Controllers;
use App\Models\Mission;
use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\In;
use Symfony\Component\Console\Input\Input;

class searchController extends Controller
{
    
    

    public function view(Request $request,$id){
        $search=$id;
       
        if($search!=" "){
            $missions=Mission::where('city_id','LIKE','%' .$search. '%')->get();
            $count=count(Mission::all());
            $max_count=ceil($count/6);
        return view('search',compact('missions','max_count'));
        }
    }
    public function theme(Request $request,$id){
        $search=$id;
        $search_id=Theme::whereTitle($search)->first()->mission_theme_id;
        if($search!=" "){
            $missions=Mission::where('theme_id','LIKE','%' .$search_id. '%')->get();
            $count=count(Mission::all());
            $max_count=ceil($count/6);
        return view('search',compact('missions','search','max_count'));
        }
    }

    public function search_drop(Request $request)
    {
       
            // $filter_country=$request->get('filter_country');
            // $mission=DB::table('mission')
            // ->join('country','mission.country','=','country.country_id')
            // ->where(function($query) use ($filter_country){
            //     if($filter_country!="all"){
            //         $query->where('mission.country',$filter_country);
            //     }
            // })
            // ->orderBy('mission.mission_id','desc')->paginate(6);
            // return view('home',compact('mission'))->render();
        
       
        $filter_country=$request->get('filter_country');
        // print_r($filter_country);
        
        if($filter_country!=" "){
            $missions=Mission::where('country_id','LIKE','%' .$filter_country. '%')->get();
            $count=count(Mission::all());
        $max_count=ceil($count/6);
        return view('search',compact('missions','max_count'));  
    }
}
}
