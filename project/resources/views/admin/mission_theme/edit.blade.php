@extends('layouts.master')


@section('content')
<div class="container-fluid">
@if($errors->any())
                            <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                            <div>{{$error}}</div>
                            @endforeach
                            </div>
                           
                            @endif
    <div>
    @foreach($theme as $item)
    <form action="{{url('admin/update-theme/'.$item->mission_theme_id)}}" method="POST" enctype="multipart/form-data" >
    @csrf
                        @method('PUT')
        <table class="cms-table">
            <thead>
                <tr>
                    <th>Add</th>
                </tr>
            </thead>
            <tbody>
                <td>
                    
                    <label class="cms-label">Theme Name</label>
                    <input class="cms-input" type="text" name="title" value="{{$item->title}}">
                    <span class="cms-label">User Skills</span>
                   
                    <label class="cms-label" >Status</label>
                    <select class="cms-input" name="status">
                <option value="{{$item->status}}">{{$item->status}}</option>
                @if($item->status==0){
                    <option value="1">1</option>
                }
                @elseif($item->status==1)
                <option value="0">0</option>

                @endif

            </select>
             
                </td>
            </tbody>

        </table>
        <div class="cms_btn">
        <a href="theme" style="text-decoration: none;">
                <input type="button" class="cms_btn1" value="Cancel" name="" id="">
            </a>
                <input type="submit" class="cms_btn2" name="" value="Save" id="">
                </div>
        
                </form>
            @endforeach


    </div>
</div>

@endsection