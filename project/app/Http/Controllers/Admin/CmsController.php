<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CmsRequest;
use App\Models\Cms;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CmsController extends Controller
{
    function add()
    {
        return view('admin/CMS/cms-add');
    }

    function cms_add(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        $title = $request->input('title');
        $description = $request->input('description');
        $slug = $request->input('slug');
        $status = $request->input('status');
        $data = array('title' => $title, 'description' => $description, 'slug' => $slug, 'status' => $status);
        DB::table('cms_page')->insert($data);
        return redirect('admin/cms')->with('message', 'cms added successfully!');
    }

    function index(Request $request)
    {
        $cms = Cms::latest();
        if (request()->has('search') && !empty(request()->input('search'))) {
            $cms = Cms::where('title', 'LIKE', '%' . request()->input('search') . '%');
            }
            $cms = $cms->paginate(6)->withQueryString();
            return view('admin.CMS.view', compact('cms'));
    }

    function edit($id)
    {
        $cms = Cms::where('cms_page_id', $id)->get();
        return view('admin.CMS.cms-edit', compact('cms'));
    }

    function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'slug' => 'nullable',
            'status' => 'nullable'
        ]);

        $title = $request->input('title');
        $description = $request->input('description');
        $slug = $request->input('slug');
        $status = $request->input('status');
        $data = array('title' => $title, 'description' => $description, 'slug' => $slug, 'status' => $status);
        DB::table('cms_page')->where('cms_page_id', $id)->update($data);
        return redirect('admin/cms')->with('message', 'cms updated successfully!');
    }


    function delete(Request $request)
    {
        Cms::where('cms_page_id', $request->cms_page_id)->delete();
        return redirect('admin/cms')->with('message', 'deleted successfully');
    }
}
