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


<div class="container">
@if($errors->any())
                            <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                            <div>{{$error}}</div>
                            @endforeach
                            </div>
                           
                            @endif

                       



    <div>
    @foreach($missions as $mission)
    <form action="{{url('admin/update-mission/'.$mission->mission_id)}}" method="POST" enctype="multipart/form-data" >
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
                    
                <div class="row">
        

            <div class="col-md-6 col-lg-6 col-sm-6 col-6">
                <span class="cms-label">Country</span>
                
                        <select name="country" id="country-dropdown" class="cms-input" id="">
                        <option value="{{$mission->city->country_id}}">{{$mission->city->country->name}}</option>
                            @foreach($countries as $item)
                            <option value="{{$item->country_id}}"> {{$item->name}}</option>
                            @endforeach
                        </select>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 col-6">
                        <span class="cms-label">City</span>
                        <select name="city" class="cms-input" id="city-dropdown">
                            <option value="{{$mission->city_id}}">{{$mission->city->name}}</option>
                        </select>   

            </div>
        </div>
        <br>

        <span class="cms-label">Mission Title</span>

        <input type="text" name="title" value="{{$mission->title}}" class="cms-input" placeholder="Enter Mission Title"><br><br>

        <span class="cms-label">Mission Description</span>
        <div class="cms-textarea">
                <textarea name="description" class="text-area" id="editor" cols="" rows="">{{$mission->description}}</textarea>
            </div><br>
       
        <span class="cms-label">Mission Organization Name</span>
        <input type="text" value="{{$mission->organization_name}}" name="organization_name" class="cms-input" placeholder="Enter Mission organizarion name"><br><br>

        <span class="cms-label">Mission Organization Detail</span>
        <div class="cms-textarea">
                <textarea name="organization_detail" class="text-area" id="editor" cols="" rows="">{{$mission->organization_detail}}</textarea>
            </div><br><br>

        <span class="cms-label">Mission short Description</span>

            <div class="cms-textarea">
                <textarea name="short_description" class="text-area" id="" cols="" rows="">{{$mission->short_description}}</textarea>
            </div><br><br>
   
        <span class="cms-label">Total seats</span>
        <input type="text" name="seat_left" value="{{$mission->seat_left}}" class="cms-input" placeholder="Enter total seats"><br><br>
        <span class="cms-label">Mission Type</span>
        <select id="type" class="cms-input" name="mission_type">
        @if($mission->mission_type=="TIME")
        <option id="time" selected value="time" >Time</option>
       @else
       <option id="goal" selected value="goal" >Goal</option>
    @endif

        @if($mission->mission_type=='GOAL')
        <option id="time"  value="time" >Time</option>
        @else
        <option id="goal"  value="goal" >Goal</option>
        @endif
    </select>
        <br><br>
       @if($mission->mission_type=='GOAL')
        <div id="otherField" class="only-select">
        <span class="cms-label" >Goal Objective text</span>
        @if(is_null($goal))
        <input type="text"   class="cms-input" name="goal_objective_text">
        @else
        <input type="text" value="{{$goal->goal_objective_text}}"  class="cms-input" name="goal_objective_text">
        @endif
        <span class="cms-label" >Goal value</span>
        @if(is_null($goal))
        <input type="text"   class="cms-input" name="goal_value">
        @else
        <input type="text" value="{{$goal->goal_value}}"  class="cms-input" name="goal_value">
        @endif
        </div>
        <div id="timetext" class="only-select">
        <span class="cms-label">Start Date</span>
        <input  type="date"  name="start_date" class="cms-input" placeholder="Enter start Date"><br><br>
        <span class="cms-label">End Date</span>
        <input type="date" name="end_date" class="cms-input" placeholder="Enter End Date"><br><br>
        </div>
      @else
     
        <div id="timetext" class="only-select">
        <span class="cms-label">Start Date</span>
        <input type="date" value="{{$mission->start_date}}" name="start_date" class="cms-input" placeholder="Enter start Date"><br><br>
        <span class="cms-label">End Date</span>
        <input type="date" value="{{$mission->end_date}}" name="end_date" class="cms-input" placeholder="Enter End Date"><br><br>
        </div>
        <div id="otherField" class="only-select">
        <span class="cms-label" >Goal Objective text</span>
        <input type="text"  class="cms-input" name="goal_objective_text">
        <span class="cms-label" >Goal value</span>
        <input type="text"  class="cms-input" name="goal_value">
        </div>
        @endif
        
       
        <span class="cms-label">Mission Theme</span>
              
               
                @php
                        $theme=App\Models\Theme::all();
                        @endphp
                        <select name="theme_title" class="cms-input" id="">
                        <option value="{{$mission->theme->title}}">{{$mission->theme->title}}</option>
                            @foreach($theme as $item)
                            <option value="{{$item->title}}"> {{$item->title}}</option>
                            @endforeach
                        </select>
              

                    <span class="cms-label">Mission Skills</span>
                    @php
                        $skill=App\Models\Skill::all();
                        @endphp
                            @foreach($skill as $item)                            
                            <input type="checkbox" name="skill_id[]" value="{{$item->skill_id}}" {{in_array($item->skill_id,$missionskill)?'checked':''}}>{{$item->skill_name}}
                            @endforeach
                        </select>
               <br><br>

                    <Span class="cms-label">Uploads Your Photos</Span><br>
                <div class="uploadOuter">
                
<div class="dragBox drag-nav"  >
<img src="\images/upload.png" class="mission-img" alt="">
  <span class="cms-text">Upload Image here


  </span>
<input type="file"  name="image[]" onChange="dragNdrop(event)"  ondragover="drag()" ondrop="drop()" id="uploadFile" multiple />

</div>
                </div>
<div id="preview"></div><br>

<Span class="cms-label">Mission Documents</Span><br>
                <div class="uploadOuter">
<div class="dragBox drag-nav" >
    
  <img src="\images/upload.png"  class="mission-img" alt="">
  <span class="cms-text-1">Drag and drop resume here or click*


 
  </span>
<input type="file"  name="document[]"  onChange="dragNdrop(event)"  ondragover="drag()" ondrop="drop()" id="uploadFile" multiple />

</div>
</div>
<div id="preview"></div>
<span class="popup-text-2">Allowed file types:PDF,Doc</span><br><br>

<span class="cms-label">Mission Availability</span>
                <select name="availability" id="" class="cms-input">
                <option value="{{$mission->availability}}">{{$mission->availability}}</option>

                    @foreach($enumvalue as $enum)

                    <option value="{{$enum}}">{{ $enum}}</option>
                   @endforeach
                    </select><br><br>
             
                </td>
            </tbody>

        </table>
        <div class="cms_btn">
            <a href="{{url('admin/mission')}}" style="text-decoration: none;">
                <input type="button" class="cms_btn1" value="Cancel" name="" id="">
            </a>
                <input type="submit" class="cms_btn2" value="Save" id="">
                </div>
        
                </form>
                @endforeach


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

if(document.getElementById('goal').selected){
    document.getElementById("otherField").style.display="block";
}
if(document.getElementById('time').selected){
    document.getElementById("timetext").style.display="block";
}
</script>
@endsection