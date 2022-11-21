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
    <form action="{{url('admin/add-user')}}" method="POST" enctype="multipart/form-data" >
                        @csrf
        <table class="cms-table">
            <thead>
                <tr>
                    <th>Add</th>
                </tr>
            </thead>
      
            <tbody>
                <td>
                    
                    <label class="cms-label">First Name</label>
                    <input class="cms-input" type="text" name="first_name">
                    <label class="cms-label">Last Name</label>
                    <input class="cms-input" type="text" name="last_name">
                    <label class="cms-label">Email</label>
                    <input class="cms-input" type="text" name="email">
                    <label class="cms-label">Password</label>
                    <input class="cms-input" type="text" name="password">
                    <label class="cms-label">Avtar</label>
                    <input class="cms-input" type="file" name="avtar">
                    <label class="cms-label">Employee Id</label>
                    <input class="cms-input" type="text" name="employee_id">
                    <label class="cms-label">Department</label>
                    <input class="cms-input" type="text" name="department">
                    <label class="cms-label">City_id</label>
                    <input class="cms-input" type="text" name="city_id">
                    <label class="cms-label">Country_id</label>
                    <input class="cms-input" type="text" name="country_id">

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

    </div>
</div>

@endsection