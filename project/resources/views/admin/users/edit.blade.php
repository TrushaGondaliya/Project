@extends('layouts.master')


@section('content')
<script src="https://cdn.tiny.cloud/1/2rhq7jsykq3ivygjslzmxricmi3x9kqp0ca6ihkwe585n1iq/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>


<script>
    tinymce.init({
      selector: 'textarea#editor',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      toolbar: ' bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
      menubar:false
    });
  </script>
<div class="container-fluid">
@if($errors->any())
                            <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                            <div>{{$error}}</div>
                            @endforeach
                            </div>
                           
                            @endif
    <div>
    @foreach($user as $item)
    <form action="{{url('admin/update-user/'.$item->user_id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
        <table class="cms-table">
            <thead>
                <tr>
                    <th>Edit</th>
                </tr>
            </thead>
          
            <tbody>
                <td>
                  
                    <label class="cms-label">First Name</label>
                    <input class="cms-input" type="text" value="{{$item->first_name}}" name="first_name">
                    <label class="cms-label">Last Name</label>
                    <input class="cms-input" type="text" value="{{$item->last_name}}" name="last_name">
                    <label class="cms-label">Email</label>
                    <input class="cms-input" type="text" value="{{$item->email}}" name="email">
                    <label class="cms-label">Password</label>
                    <input class="cms-input" type="text" value="{{$item->password}}" disabled name="password">
                    <label class="cms-label">Avtar</label>
                    <input class="cms-input" type="file" name="avtar" value="{{$item->avtar}}">
                    <label class="cms-label">Employee Id</label>
                    <input class="cms-input" type="text" value="{{$item->employee_id}}" name="employee_id">
                    <label class="cms-label">Department</label>
                    <input class="cms-input" type="text" value="{{$item->department}}" name="department">
                    <label class="cms-label">City_id</label>
                    <input class="cms-input" type="text" value="{{$item->city_id}}" name="city_id">
                    <label class="cms-label">Country_id</label>
                    <input class="cms-input" type="text" value="{{$item->country_id}}" name="country_id">

                    <label class="cms-label">Profile Text</label>
                    <div class="cms-textarea">
                <textarea name="profile_text" class="text-area" id="editor" cols="" rows=""></textarea>
            </div>
                </td>
            </tbody>
        </table>
        <div class="cms_btn">
                <input type="button" class="cms_btn1" value="Cancel" name="" id="">
                <input type="submit" class="cms_btn2" name="" value="Save" id="">
                </div>
                </form>
            @endforeach

        

    </div>
</div>

@endsection