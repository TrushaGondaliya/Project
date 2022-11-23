@extends('layouts.master')


@section('content')


<div class="container">
@if($errors->any())
                            <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                            <div>{{$error}}</div>
                            @endforeach
                            </div>
                           
                            @endif



<form action="{{url('admin/add-story')}}" method="POST">
            @csrf
        
        <table class="cms-table">
            <thead>
                <tr>
                    <th>Add</th>
                </tr>
            </thead>
            <tbody>
                <td>

                <span class="cms-label">Story Title</span>
                <input class="cms-input" placeholder="Enter Story Title" name="title">
                <br><br>
                <span class="cms-label">Mission ID</span>
                
                <select  class="cms-input" id="" name="mission_id">
                @foreach($mission as $item)
                    <option value="{{$item->mission_id}}">{{$item->mission_id}}</option>
            @endforeach
                
                </select>
                <br><br>

<span class="cms-label" >User ID</span>
<select  id="" class="cms-input" name="user_id">
@foreach($user as $item)
    <option value="{{$item->user_id}}">{{$item->user_id}}</option>
@endforeach
    </select>

            
                </td>
            </tbody>
        </table>
        <div class="cms_btn">
                <input type="button" class="cms_btn1" value="Cancel" name="" id="">
                <input type="submit" class="cms_btn2" name="" value="Save" id="">
                </div>
                </form>
</div>     

        @endsection