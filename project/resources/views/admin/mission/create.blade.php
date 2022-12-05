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

                       



    <div>
    <form action="{{url('admin/add-mission')}}" method="POST" enctype="multipart/form-data" >
                        @csrf
        <table class="cms-table">
            <thead>
                <tr>
                    <th>Add</th>
                </tr>
            </thead>
      
            <tbody>
                <td>
                    
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
        <br>

        <span class="cms-label">Mission Title</span>

        <input type="text" name="title" class="cms-input" placeholder="Enter Mission Title"><br><br>

        <span class="cms-label">Mission Description</span>
        <div class="cms-textarea">
                <textarea name="description" class="text-area" id="editor" cols="" rows=""></textarea>
            </div><br>
       
        <span class="cms-label">Mission Organization Name</span>
        <input type="text" name="organization_name" class="cms-input" placeholder="Enter Mission organizarion name"><br><br>

        <span class="cms-label">Mission Organization Detail</span>
        <div class="cms-textarea">
                <textarea name="organization_detail" class="text-area" id="" cols="" rows=""></textarea>
            </div><br><br>

        
        <span class="cms-label">Mission Type</span>
        <select id="type" class="cms-input" name="mission_type">
        <option value="" ></option>
            <option value="time" >Time</option>
            <option value="goal">Goal</option>
        </select>
        <br><br>
        <div id="otherField" class="only-select">
        <span class="cms-label" >Goal Objective text</span>
        <input type="text" class="cms-input" name="goal_objective_text">
        <span class="cms-label" >Goal value</span>
        <input type="text" class="cms-input" name="goal_value">
        </div>
        <br>
        <div id="timetext" class="only-select">
        <span class="cms-label">Start Date</span>
        <input type="date" name="start_date" class="cms-input" placeholder="Enter start Date"><br><br>
        <span class="cms-label">End Date</span>
        <input type="date" name="end_date" class="cms-input" placeholder="Enter End Date"><br><br>
        </div>
        <span class="cms-label">Total seats</span>
        <input type="text" name="seat_left" class="cms-input" placeholder="Enter total seats"><br><br>
        <span class="cms-label">Mission Theme</span>
              
               
                @php
                        $theme=App\Models\Theme::all();
                        @endphp
                        <select name="theme_title" class="cms-input" id="">
                        <option value=""> Select mission theme</option>
                            @foreach($theme as $item)
                            <option value="{{$item->title}}"> {{$item->title}}</option>
                            @endforeach
                        </select>
              <br><br>

                    <span class="cms-label">Mission Skills</span><br>
                    @php
                        $skill=App\Models\Skill::all();
                        @endphp
                        
                        @foreach($skill as $item)
                            <input type="checkbox" class="cms-checkbox" name="skill_id[]" value="{{$item->skill_id}}">{{$item->skill_name}}
                            @endforeach
               <br><br>

                    <Span class="cms-label">Uploads Your Photos</Span><br>
                <div class="uploadOuter">
                
<div class="dragBox drag-nav"  >
<img src="\images/upload.png" class="mission-img" alt="">
  <span class="cms-text">Upload Image here</span>
<input type="file" name="image[]"  onChange="dragNdrop(event)"  ondragover="drag()" ondrop="drop()" id="uploadFile" multiple />
</div>
                </div>
<div id="preview"></div><br>

<Span class="cms-label">Mission Documents</Span><br>
                <div class="uploadOuter">
<div class="dragBox drag-nav" >
    
  <img src="\images/upload.png" class="mission-img" alt="">
  <span class="cms-text-1">Drag and drop resume here or click*</span>
<input type="file" name="document[]" multiple onChange="dragNdrop(event)"  ondragover="drag()" ondrop="drop()" id="uploadFile"  />
</div>
</div>
<div id="preview"></div>
<span class="popup-text-2">Allowed file types:PDF,Doc</span><br><br>

<span class="cms-label">Mission Availability</span>
                <select name="availability" id="" class="cms-input">

                    @foreach($enumvalue as $enum)

                    <option value="{{$enum}}">{{$enum}}</option>
                   @endforeach
                    </select><br><br>
             
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

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    
    $(document).ready(function(){
       $("#type").change(function(){
        if($(this).val()=="goal"){
            $("#otherField").show();
        }
       
        else{
            $("#otherField").hide();
        }
       })
    });
    $(document).ready(function(){
       $("#type").change(function(){
        if($(this).val()=="time"){
            $("#timetext").show();
        }
       
        else{
            $("#timetext").hide();
        }
       })
    });



   
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
</script>
@endsection