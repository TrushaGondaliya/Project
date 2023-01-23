@extends('layouts.master')


@section('content')
<script src="https://cdn.tiny.cloud/1/2rhq7jsykq3ivygjslzmxricmi3x9kqp0ca6ihkwe585n1iq/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>


<script>
    tinymce.init({
        selector: 'textarea#editor',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: ' bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        menubar: false
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
        <form action="{{url('admin/add-user')}}" method="POST" enctype="multipart/form-data">
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
                        <label class="cms-label">Phone Number</label>
                        <input class="cms-input" type="text" name="phone_number">
                        <label class="cms-label">Why I Volunteer</label>
                        <input class="cms-input" type="text" name="why_i_volunteer">
                        <label class="cms-label">Linked In Url</label>
                        <input class="cms-input" type="text" name="linked_in_url">
                        <label class="cms-label">Title</label>
                        <input class="cms-input" type="text" name="title">
                       <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-6">
                         <span class="cms-label">Country</span>
                        <select name="country" id="country-dropdown" class="cms-input" id="">
                        <option value="">Select Country</option>
                            @foreach($countries as $item)
                            <option value="{{$item->country_id}}"> {{$item->name}}</option>
                            @endforeach
                        </select>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 col-6">
                        <span class="cms-label">City</span>
                        <select name="city" class="cms-input" id="city-dropdown">
                            <option>Select City</option>
                        </select>   

            </div>
                       </div>

                        <label class="cms-label">Profile Text</label>
                        <div class="cms-textarea">
                            <textarea name="profile_text" class="text-area" id="editor" cols="" rows=""></textarea>
                        </div>
                        <br>
                        <span class="cms-label">User Skills</span><br>
                    @php
                        $skill=App\Models\Skill::all();
                        @endphp
                        
                        @foreach($skill as $item)
                            <input type="checkbox" class="cms-checkbox" name="skill_id[]" value="{{$item->skill_id}}">{{$item->skill_name}}
                            @endforeach
                            <br>

                        <label class="cms-label">Status</label>
                        <select class="cms-input" name="status">
                            <option value=""></option>
                            <option value="1">1</option>
                            <option value="0">0</option>
                        </select>
                    </td>
                </tbody>

            </table>
            <div class="cms_btn">
                <a href="user" style="text-decoration: none;">
                <input type="button" class="cms_btn1" value="Cancel" name="" id="">
                </a>
                <input type="submit" class="cms_btn2" name="" value="Save" id="">
            </div>

        </form>

    </div>
</div>

@endsection

@section('scripts')
<script>
    
$(document).ready(function(){  
$('#country-dropdown').on('change', function() {
var country_id = this.value;
$("select[name='city']").html('');
$.ajax({
url:"{{url('get-cities-by-country')}}",
type: "POST",
data: {
country_id: country_id,
_token: '{{csrf_token()}}' 
},
dataType : 'json',
success: function(result){
$("select[name='city']").html('<option name="city" value="">Select City</option>'); 
$.each(result.cities,function(key,value){
$("select[name='city']").append('<option value="'+value.city_id+'">'+value.name+'</option>');


});
}

});

});
    })
</script>
@endsection