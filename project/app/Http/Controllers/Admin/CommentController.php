<?php

namespace App\Http\Controllers\Admin;
use App\Models\Comments;
use App\Models\Mission;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class CommentController extends Controller
{
    function index(){
        $comments=Comments::where('approval_status','!=','PUBLISHED');
        if (request()->has('search') && !empty(request()->input('search'))) {
            $mission = Mission::where('title', 'LIKE', '%' . request()->input('search') . '%')->pluck('mission_id');
            $comments = Comments::where('comment', 'LIKE', '%' . request()->input('search') . '%')->where('approval_status','!=','PUBLISHED')->orwhereIn('mission_id', $mission)->where('approval_status','!=','PUBLISHED');
            }
            $comments=$comments->paginate(6);
        return view('admin/comment/index',compact('comments'));
    }

    function approve($id)
    {
        $comment = Comments::find($id);
        if ($comment) {
            $data = [
                'approval_status' => 'PUBLISHED'
            ];
            $comment->update($data);
        }
        return redirect('admin/comment')->with('message', 'status updated!');
    }

    function decline($id)
    {
        $comment = Comments::find($id);
        if ($comment) {
            $data = [
                'approval_status' => 'DECLINE'
            ];
            $comment->update($data);
        }
        return redirect('admin/comment')->with('message', 'status updated!');
    }
}
