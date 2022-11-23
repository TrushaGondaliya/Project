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
    <form action="{{url('admin/add-skill')}}" method="POST" enctype="multipart/form-data" >
                        @csrf
        <table class="cms-table">
            <thead>
                <tr>
                    <th>Add</th>
                </tr>
            </thead>
      
            <tbody>
                <td>
                    
                    <label class="cms-label">Skill Name</label>
                    <input class="cms-input" type="text" name="skill_name">
                    <label class="cms-label" >Status</label>
                    <select class="cms-input" name="status">
                        <option value="1">1</option>
                        <option value="0">0</option>
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
</div>

@endsection