@extends('layouts.app')

@section('content')
@if(session('message'))
                        <div class="alert alert-success">{{session('message')}}</div>
                        @endif

                        <script src="https://cdn.tiny.cloud/1/2rhq7jsykq3ivygjslzmxricmi3x9kqp0ca6ihkwe585n1iq/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>


<script>
    tinymce.init({
      selector: 'textarea#editor',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      toolbar: ' bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
      menubar:false
    });
  </script>

<div class="body-3">

    <br>
   
    <section>
        <div>
            <div class="vol">
                <div class="row col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="edit-profile">
                        @if($errors->any())
                            <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                            <div>{{$error}}</div>
                            @endforeach
                            </div>
                           
                            @endif
                            <img src="{{asset('/uploads/user/'.Auth::user()->avtar)}}" class="profile-img" alt="">
                            <div class="profile-text">{{Auth::user()->full_name}}</div>
                         
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <form action="{{url('edit-profile')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                        <div class="edit-profile-1">
                            <ul class="nav nav-tabs-edit">
                                <li class="nav-item"> <a class="nav-link nav-1" href="#">Basic Information</a> </li>
                            </ul>
                            <br>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <span class="story-input-text">Name*</span>
                                    <div>
                                        <input type="text" name="first_name" value="{{Auth::user()->first_name}}" placeholder="Enter your name" class="edit-input" id="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <span class="story-input-text">Surname*</span>
                                    <div>
                                        <input type="text" name="last_name" value="{{Auth::user()->last_name}}" placeholder="Enter your surname" class="edit-input" id="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <span class="story-input-text">Employee ID*</span>
                                    <div>
                                        <input type="text" name="employee_id" value="{{Auth::user()->employee_id}}" placeholder="Enter your Employee ID" class="edit-input" id="">
                                    </div>
                                </div>
                            </div>
                            <label class="story-input-text">Avtar</label>
                        <input class="edit-input" type="file" name="avtar" value="{{Auth::user()->avtar}}">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <span class="story-input-text">Title*</span>
                                    <div>
                                        <input type="text" name="title" value="{{Auth::user()->title}}" placeholder="Enter your Title" class="edit-input" id="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <span class="story-input-text">Department*</span>
                                    <div>
                                        <input type="text" name="department" value="{{Auth::user()->department}}" placeholder="Enter your Department Name" class="edit-input" id="">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <span class="story-input-text">My Profile*</span>
                                <textarea type="text" name="profile_text"  placeholder="Enter your Title" class="story-input-div" id="editor">{{Auth::user()->profile_text}}</textarea>
                            </div>
                            <div>
                                <span class="story-input-text">Why I Volunteer?</span>
                                <textarea type="text" name="why_i_volunteer" placeholder="Enter Your Comments..." class="story-input-div" id="">{{Auth::user()->why_i_volunteer}}</textarea>
                            </div>
                            
                            <span class="cms-label">User Skills</span>
                        <br>
                    @php
                        $skill=App\Models\Skill::all();
                        @endphp
                            @foreach($skill as $item)                            
                            <input type="checkbox" name="skill_id[]" value="{{$item->skill_id}}" {{in_array($item->skill_id,$userskill)?'checked':''}}>{{$item->skill_name}}
                            @endforeach
                            <br><br>
                            <ul class="nav nav-tabs-edit">
                                <li class="nav-item"> <a class="nav-link nav-1" href="#">Address Information</a> </li>
                            </ul><br>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <span class="story-input-text">City</span>
                                    <div>
                                        
                                        @php
                                        $city=App\Models\City::all();
                                        @endphp
                                        <select name="city" class="edit-input" id="">
                                        @foreach($city as $item)
                                            <option value="{{$item->name}}"> {{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <span class="story-input-text">Country*</span>
                                    <div>
                                    
                                        @php
                                        $country=App\Models\Country::all();
                                        @endphp
                                        <select name="country" class="edit-input" id="">

                                        @foreach($country as $item)
                                            <option value="{{$item->name}}"> {{$item->name}}</option>     
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <ul class="nav nav-tabs-edit">
                                <li class="nav-item"> <a class="nav-link nav-1" href="#">Personal Information</a> </li>
                            </ul><br>
                            <div class="row">
                               
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <span class="story-input-text">Linkedin</span>
                                    <div>
                                        <input type="text" value="{{Auth::user()->linked_in_url}}" name="linked_in_url" placeholder="Enter your linkedin URL" class="edit-input" id="">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <input type="button" value="Change Password" class="edit-profile-btn">
                                <button class="edit-profile-button-save">Save</button>
                            </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="popup">
            <div class="popup-close-btn"></div>
            <div class="popup-content"></div>
        </div>
        <div class="for-call-popup">
            <form action="{{url('change_password')}}" method="POST" class="call-popup">
                @csrf
                @method('PUT')
                <h3>Change Password</h3>
                
                <input type="text" class="edit-input" placeholder="Enter Old Password" name="old_password" id="">
                <input type="text" class="edit-input" placeholder="Enter new Password" name="new_password" id="">
                <input type="text" class="edit-input" placeholder="Enter Confirm Password" name="confirm_password" id="">
                <div class="popup-btn">
                    <input type="button" class="popup-button" name="" value="cancel" id="">
                    <input type="submit" class="edit-profile-button-1" value="Change Password" name="" id="">
                </div>
            </form>
        </div>
        <div class="overlay"></div>
    <hr>
    <x-footer></x-footer>
    <br>
</div>
@endsection

@section('scripts')

<script>
    $('.alert-success').fadeOut(3000);
    $(function() {
        var p = new Popup({
            popup: '.popup',
            content: '.popup-content',
            overlay: '.overlay',
        });

        // setTimeout(function() {
        //     var form = $('.for-call-popup');
        //     p.open(form.html());
        // }, 1000);
        $('.edit-profile-btn').click(function(){
            var form=$('.for-call-popup');
            p.open(form.html());
        })

        $('.popup-close-btn').click(function() {
            p.close();
        });
    });

    function Popup(Obj) {
        this.popup = $(Obj.popup);
        this.content = $(Obj.content);
        this.overlay = $(Obj.overlay);

        var pop = this;

        this.open = (function(content) {
            pop.content.html(content);
            pop.popup.addClass('open').fadeIn(1000);
            pop.overlay.addClass('open');
        });

        this.close = (function() {
            pop.popup.removeClass('open');
            pop.overlay.removeClass('open');
        });

        this.overlay.click(function(e) {
            if (!pop.popup.is(e.target) && pop.popup.has(e.target).length === 0) {
                pop.close();
            }
        });
    }
</script>
@endsection

