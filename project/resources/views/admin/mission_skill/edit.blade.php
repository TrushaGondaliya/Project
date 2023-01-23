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
        @foreach($skills as $item)
    <form action="{{url('admin/update-skill/'.$item->skill_id)}}" method="POST" enctype="multipart/form-data" >
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
                    
                    <label class="cms-label">Skill Name</label>
                    <input class="cms-input" type="text" name="skill_name" value="{{$item->skill_name}}">
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
        <a href="skill" style="text-decoration: none;">
                <input type="button" class="cms_btn1" value="Cancel" name="" id="">
        </a>
                <input type="submit" class="cms_btn2" name="" value="Save" id="">
                </div>
        
                </form>
                @endforeach

    </div>
</div>

@endsection