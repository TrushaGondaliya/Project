<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class BannerController extends Controller
{
    function index(Request $request)
    {
        $banner=$request['search'];
        if($banner!=" ")
        {
            $banner=Banner::where('title','LIKE','%' .$banner. '%')->paginate(6);
            $count = count(Banner::all());
        $max_count = ceil($count / 6); 
        return view('admin/banner/index',compact('banner','count','max_count'));

        }
    }

    function create()
    {
        return view('admin/banner/create');
    }

    function add_banner(BannerRequest $request)
    {

        $data = $request->validated();

        $banner = new Banner;
        $banner->title=$data['title'];
        $banner->text=$data['text'];
        if ($request->hasfile('image')) {
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move('uploads/banner/', $filename);
        $banner->image = $filename;}
        $banner->sort_order = $request->input('sort_order');
      
        $banner->save();


        return redirect('admin/banner')->with('message', 'Banner added successfully!');
    }

    function edit($id)
    {
        $banner=Banner::where('banner_id',$id)->get();
        return view('admin/banner/edit',compact('banner'));
    }

    function update(BannerRequest $request,$id)
    {
        $data = $request->validated();

        $banner = Banner::find($id);
        $banner->title=$data['title'];
        $banner->text=$data['text'];
        if ($request->hasfile('image')) 
        {
            $destination = 'uploads/user/' . $banner->image;
        if (File::exists($destination))
        {
            File::delete($destination);
        }
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move('uploads/banner/', $filename);
        $banner->image = $filename;}
      
        $banner->update();


        return redirect('admin/banner')->with('message', 'Banner updated successfully!');
    }

    function delete(Request $request)
    {
        Banner::where('banner_id',$request->banner_id)->delete();
        return redirect('admin/banner')->with('message','deleted successfully!');
    }
}
