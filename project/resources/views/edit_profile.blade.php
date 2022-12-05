<x-header></x-header>
@if(session('message'))
                        <div class="alert alert-success">{{session('message')}}</div>
                        @endif

<link rel="stylesheet" href="{{url('css/index.css')}}">
</head>


<div class="body-3">

    <!-- top navbar -->

    <x-top-nav></x-top-nav>
    <br>
   
    <section>
        <div>
            <div class="vol">
                <div class="row col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="edit-profile">
                          
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
                                <textarea type="text" name="profile_text"  placeholder="Enter your Title" class="story-input-div" id="">{{Auth::user()->profile_text}}</textarea>
                            </div>
                            <div>
                                <span class="story-input-text">Why I Volunteer?</span>
                                <textarea type="text" name="why_i_volunteer" placeholder="Enter Your Comments..." class="story-input-div" id="">{{Auth::user()->why_i_volunteer}}</textarea>
                            </div>
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
                                <!-- <div class="col-lg-6 col-md-6 col-sm-6">
                                    <span class="story-input-text">Availability</span>
                                    <div>
                                        <select name="" class="edit-input" id="">
                                            <option value="">Select your availability</option>
                                            <option value="{{Auth::user()->availability}}"> {{Auth::user()->availability}}</option>
                                            
                                        </select>
                                    </div>
                                </div> -->
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <span class="story-input-text">Linkedin</span>
                                    <div>
                                        <input type="text" value="{{Auth::user()->linked_in_url}}" name="linked_in_url" placeholder="Enter your linkedin URL" class="edit-input" id="">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button class="edit-profile-button-save">Save</button>
                            </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <x-footer></x-footer>
    <br>
</div>