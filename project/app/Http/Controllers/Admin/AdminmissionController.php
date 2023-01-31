<?php

namespace App\Http\Controllers\Admin;

use App;
use App\Http\Controllers\Controller;
use App\Http\Requests\MissionRequest;
use App\Models\Application;
use App\Models\City;
use App\Models\Country;
use App\Models\Document;
use App\Models\Favourite;
use App\Models\Goal;
use App\Models\Media;
use App\Models\Mission;
use App\Models\Missionskill;
use App\Models\Skill;
use App\Models\Story;
use App\Models\Theme;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class Missionenum
{
    public static $enumvalue = [
        'DAILY' => 'DAILY',
        'WEEKLY' => 'WEEKLY',
        'WEEK-END' => 'WEEK-END',
        'MONTHLY' => 'MONTHLY'
    ];
}
class AdminmissionController extends Controller
{
    function index(Request $request)
    {
        $missions = Mission::latest();
        if (request()->has('search') && !empty(request()->input('search'))) {
            $missions = Mission::where('title', 'LIKE', '%' . request()->input('search') . '%');
            }
            
            $missions = $missions->paginate(6)->withQueryString();
            return view('admin/mission/index', compact('missions'));
        
    }

    function delete(Request $request)
    {
        Mission::where('mission_id', $request->mission_id)->delete();
        Media::where('mission_id', $request->mission_id)->delete();
        Document::where('mission_id', $request->mission_id)->delete();
        Missionskill::where('mission_id', $request->mission_id)->delete();
        Favourite::where('mission_id', $request->mission_id)->delete();
        Goal::where('mission_id', $request->mission_id)->delete();
        Application::where('mission_id', $request->mission_id)->delete();
        Story::where('mission_id', $request->mission_id)->delete();

        return redirect('admin/mission')->with('message', 'deleted successfully!');
    }

    function create()
    {
        $data['countries'] = Country::get(["name","country_id"]);
        $theme=Theme::all();
        $skill=Skill::all();
        $enumvalue=Missionenum::$enumvalue;
        return view('admin.mission.create',$data,compact('enumvalue','theme','skill') );
    }
    public function getCity(Request $request)
    {
        $data['cities'] = City::where("country_id",$request->country_id)->get(["name","city_id"]);
        return response()->json($data);
    }


    function add_mission(MissionRequest $request)
    {
        $data = $request->validated();
        $mission = new Mission;
        $mission->city_id = $data['city'];
        $mission->country_id = $data['country'];
        $mission->title = $data['title'];
        $mission->description = $data['description'];
        $mission->short_description = $data['short_description'];
        $mission->organization_name = $data['organization_name'];
        $mission->organization_detail = $data['organization_detail'];
        $mission->start_date = $data['start_date'];
        $mission->end_date = $data['end_date'];
        $mission->mission_type=$data['mission_type'];
        $mission->seat_left = $data['seat_left'];
        $mission->theme_id = Theme::whereTitle($request->input('theme_title'))->first()->mission_theme_id;
        $mission->availability = $request->input('availability');
        $mission->save();

        if($mission->mission_type=="goal"){
        $goal=new Goal;
        $goal->mission_id=$mission->mission_id;
        $goal->goal_objective_text=$data['goal_objective_text'];
        $goal->goal_value=$data['goal_value'];
        $goal->save();
        }

        foreach ($request->skill_id as $index) {
            $skill = new Missionskill;
            $skill->mission_id = $mission->mission_id;
            $skill->skill_id = $index;
            $skill->save();
        }

        if ($request->hasFile('image')) {
            $files = $request->file('image');
            foreach($files as $file){
                $media = new Media;
                $media->mission_id = $mission->mission_id;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move('uploads/mission/', $filename);
                $media->media_path = $filename;
                $media->media_name = $file->getClientOriginalName();
            $media->media_type = $file->getClientMimeType();
            $media->save();
            }
            }
        
        if ($request->hasfile('document')) {
            $files=$request->file('document');
            foreach($files as $file){
                $document = new Document;
                $document->mission_id = $mission->mission_id;
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/mission/', $filename);
            $document->document_path = $filename;
        $document->document_name = $file->getClientOriginalName();
        $document->document_type = $file->getClientMimeType();
        $document->save();
    }
        }
        return redirect('admin/mission')->with('message', 'mission added succesfully!');
    }

    function edit($id)
    {
        $missions = Mission::where('mission_id', $id)->get();
        $mskill=Missionskill::where('mission_id', $id);
        $missionskill =$mskill->pluck('skill_id')->toArray();
        $media = Media::where('mission_id', $id)->get();
        $document = Document::where('mission_id', $id)->get();
        $goal=Goal::where('mission_id',$id)->first();
        $data['countries'] = Country::get(["name","country_id"]);
        $theme=Theme::all();
        $skill=Skill::all();
        return view('admin/mission/edit',$data, compact('missions', 'skill','theme','missionskill', 'goal','media', 'document'))->with('enumvalue', Missionenum::$enumvalue);
    }

    function update(MissionRequest $request, $id)
    {
        $data = $request->validated();
        $mission = Mission::find($id);
        $mission->city_id = $data['city'];
        $mission->country_id = $data['country'];
        $mission->title = $data['title'];
        $mission->description = $data['description'];
        $mission->short_description = $data['short_description'];
        $mission->organization_name = $data['organization_name'];
        $mission->organization_detail = $data['organization_detail'];
        if ($request->date('start_date')) {
            $mission->start_date = $data['start_date'];
        }
        if ($request->date('end_date')){
        $mission->end_date = $data['end_date'];
    }
        $mission->mission_type=$data['mission_type'];
        $mission->seat_left = $data['seat_left'];
        $mission->theme_id = Theme::whereTitle($request->input('theme_title'))->first()->mission_theme_id;
        $mission->availability = $request->input('availability');
        $mission->update();

        if($mission->mission_type=="goal"){
            $goal=Goal::where('mission_id',$id);
            $mission_id=$mission->mission_id;
            $goal_objective_text=$data['goal_objective_text'];
            $goal_value=$data['goal_value'];
            $goal=array('mission_id'=>$mission_id,'goal_objective_text'=>$goal_objective_text,'goal_value'=>$goal_value);
            DB::table('goal_mission')->where('mission_id', $id)->updateOrInsert($goal);
            }

        foreach ($request->skill_id as $index) {
        $mission_id = $id; 
        $skill_id =$index;
        $skill=array(
            'mission_id'=>$mission_id,
            'skill_id'=>$skill_id
        );
        DB::table('mission_skill')->where('mission_id',$id)->updateOrInsert($skill);
        }

        if ($request->hasFile('image')) {
            $files = $request->file('image');
            foreach($files as $file){
                $media = Media::where('mission_id',$id);
                $mission_id = $id;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move('uploads/mission/', $filename);
                $media_path = $filename;
                $media_name = $file->getClientOriginalName();
                $media_type = $file->getClientMimeType();
                $media = array('mission_id' => $mission_id, 'media_path' => $media_path, 'media_name' => $media_name, 'media_type' => $media_type);
                DB::table('mission_media')->where('mission_id', $id)->updateOrInsert($media);
            }
            }
       
            if ($request->hasfile('document')) {
                $files=$request->file('document');
                foreach($files as $file){
                    $document = Document::where('mission_id',$id);
                    $mission_id = $id;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move('uploads/mission/', $filename);
                $document_path = $filename;
            $document_name = $file->getClientOriginalName();
            $document_type = $file->getClientMimeType();
            $document = array('mission_id' => $mission_id, 'document_path' => $document_path, 'document_name' => $document_name, 'document_type' => $document_type);
            DB::table('mission_document')->where('mission_id', $id)->updateOrInsert($document);
        }
            }

        return redirect('admin/mission')->with('message', 'mission updated succesfully!');
    }

    function application(Request $request)
    {
        $application = Application::where('approval_status', '=', 'PENDING ')->orwhere('approval_status', '=', 'DECLINE ');
        $mission_id = Application::where('approval_status', '=', 'PENDING ')->orwhere('approval_status', '=', 'DECLINE ')->pluck('mission_id');
        $title = Mission::whereIn('mission_id', $mission_id)->pluck('title');
        if (request()->has('search') && !empty(request()->input('search'))) {
            $mission = Mission::where('title', 'LIKE', '%' . request()->input('search') . '%')->pluck('mission_id');
            $application = Application::whereIn('mission_id', $mission);
            }
            $application = $application->paginate(6)->withQueryString();
            return view('admin.mission.application', compact('application'));  
    }

    function approve($id)
    {
        $app = Application::find($id);
        if ($app) {
            $data = [
                'approval_status' => 'APPROVE'
            ];
            $app->update($data);
        }
        return redirect('admin/application')->with('message', 'status updated!');
    }

    function decline($id)
    {
        $app = Application::find($id);
        if ($app) {
            $data = [
                'approval_status' => 'DECLINE'
            ];
            $app->update($data);
        }
        return redirect('admin/application')->with('message', 'status updated!');
    }

    function create_app()
    {
        $mission = Mission::all();
        $user = User::all();
        return view('admin/mission/create_application', compact('mission', 'user'));
    }

    function add_app(Request $request,$id)
    {
        $mission_id = $id;
        $user_id = Auth::user()->user_id;
        if(Application::where('mission_id',$mission_id)->where('user_id',$user_id)->get()->isEmpty()){
            $data = array('mission_id' => $mission_id, 'user_id' => $user_id);
            DB::table('mission_application')->insert($data);
            return redirect('home')->with('message', 'application added successfully!');
        }
        else{
        return redirect('home')->with('message', 'application already added!');
       }
    }
}
