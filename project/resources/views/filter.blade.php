<div class="row abc card-lists" id="card-lists">
                    @foreach($missions as $mission)
                    @php
                    $media=App\Models\Media::where('mission_id',$mission->mission_id)->first();
                    @endphp
                    <div class="col-lg-4 card-filter  col-sm-4 col-md-4" style="margin-top:20px ;">
                        <div class="card-box" style="width: 100%;height:100%;">
                            <div class="card-image">
                                @if(is_null($media))
                                <img src="/images/image2.png" style="height: 250px;width:100%">
                                @else
                                <img src="/images/{{$media->media_name}}" class="img" style="height: 250px;width:100%" alt="...">
                                @endif
                                <div class='d-flex align-items-center third-txt p-2 invite'>
                                        <img src="/images/user.png" class='img-fluid img-card'>
                                </div>
                                <div class="d-flex align-items-center second-txt p-2">
                                    <a href="{{url('favourite/'.$mission->mission_id)}}">
                                        @php
                                        $favourite=App\Models\Favourite::all()
                                        @endphp
                                        @foreach($favourite as $fav)
                                        @if($fav->mission_id==$mission->mission_id)
                                        @if($fav->mission_id==$mission->mission_id && $fav->user_id==Auth::user()->user_id)
                                        <img src="/images/favourite.jpg" alt='' class='img-fluid img-card-h'>
                                        @break
                                        @endif
                                        @endif
                                        @endforeach
                                        @if($fav->mission_id!=$mission->mission_id || $fav->user_id!=Auth::user()->user_id)
                                        <img src="/images/heart.png" alt='' class='img-fluid img-card-h'>
                                        @endif
                                    </a>
                                </div>
                                <a href="">
                                    <div class="d-flex align-items-center first-txt">
                                        <img src="images/pin.png" class='img-fluid pr-2 ' style='height:22px;margin:5px'>
                                        <span>{{($mission->city->name)}}</span>
                                </a>
                            </div>
                            <div class="d-flex four-txt justify-content-center">
                                <div class="theme">{{$mission->theme->title}}</div>
                            </div>
                        </div>
                        <div class="card-body" style=" padding-top:30px;">
                            <div class="container card-div-1">
                                <h5 class="card-title">{{$mission->title}}</h5>
                                <br>
                                <p class="card-text card-description" style="color:black;">{{$mission->description}}</p>
                                <div class="row">
                                    <div class="col-md-7 col-lg-7 col-7">
                                        <h6 class="card-text" style="color:black;font-size:16px">{{$mission->organization_name}}</h6>
                                    </div>
                                    <div class="col-md-5 col-lg-5 col-5">
                                       
                                        <form action="{{url('add-rating/'.$mission->mission_id)}}" method="POST" id="form_{{$mission->mission_id}}">
                                            @csrf
                                        <input type="hidden" value="{{$mission->mission_id}}" name="mission_id">
                                        <div class="rating-css">
                                            @php
                                            $rating=App\Models\Rating::where('mission_id',$mission->mission_id)->where('user_id',Auth::user()->user_id)->value('rating');
                                            @endphp
                                            <div class="star-icon"> 
                                                    <input value="1" id="rating1_{{$mission->mission_id}}" class="cus_rating" type="radio" name="star" cusId="{{$mission->mission_id}}" />
                                                    <label for="rating1_{{$mission->mission_id}}" class="fa fa-star @if($rating>=1) checked @endif "></label>
                                                    <input value="2" id="rating2_{{$mission->mission_id}}" class="cus_rating" type="radio" name="star" cusId="{{$mission->mission_id}}" />
                                                    <label for="rating2_{{$mission->mission_id}}" class="fa fa-star @if($rating>=2) checked @endif"></label>
                                                    <input value="3" id="rating3_{{$mission->mission_id}}" class="cus_rating" type="radio" name="star" cusId="{{$mission->mission_id}}"/>
                                                    <label for="rating3_{{$mission->mission_id}}" class="fa fa-star @if($rating>=3) checked @endif"></label>
                                                    <input value="4" id="rating4_{{$mission->mission_id}}" class="cus_rating" type="radio" name="star" cusId="{{$mission->mission_id}}" />
                                                    <label for="rating4_{{$mission->mission_id}}" class="fa fa-star @if($rating>=4) checked @endif"></label>
                                                    <input value="5" id="rating5_{{$mission->mission_id}}" class="cus_rating" type="radio" name="star" cusId="{{$mission->mission_id}}"/>
                                                    <label for="rating5_{{$mission->mission_id}}" class="fa fa-star @if($rating>=5) checked @endif"></label>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                            <br>


                            <div class='d-flex align-items-center'>
                                <hr class='flex-grow-1' />
                                @php
                                $goal=App\Models\Goal::where('mission_id',$mission->mission_id)->first();
                                @endphp
                                @if(is_null($goal))
                                <div class='goal'>{{$mission->start_date->format('d/m/Y')}} to {{$mission->end_date->format('d/m/Y')}}</div>
                                @else

                                <div class='goal'>{{$goal->goal_objective_text}}</div>
                                @endif
                                <hr class='flex-grow-1' />
                            </div><br>
                            <div class="container card-div-2">

                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="card-body">
                                            <div class='row'>
                                                <div class='col-md-6 col-6 col-sm-6 col-lg-6'>
                                                    <div class='row'>
                                                        <div class='col-md-1 col-1 col-sm-1 col-lg-1'>
                                                            <img src='images/Seats-left.png' alt='' class="c-img">
                                                        </div>
                                                        <div class='col-md-9 col-9 col-sm-9 col-lg-9'>
                                                            <div class="seat-left"> <span class="c-text-style">{{$mission->seat_left}} </span> Seats-left </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='col-md-6 col-sm-6 col-6 col-lg-6' style='color:black;'>
                                                    <div class='row'>
                                                        @if($mission->end_date!=null)
                                                        <div class='col-md-1 col-1 col-sm-1 col-lg-1'>
                                                            <img src='images/deadline.png' alt='' class="c-img">
                                                        </div>
                                                        <div class='col-md-9 col-9 col-sm-9 col-lg-9'>

                                                            <div class="c-text"> <span class="c-text-style">{{$mission->end_date->format('d/m/Y')}} </span> Deadline </div>

                                                        </div>
                                                        @endif

                                                        @if($mission->end_date==null)
                                                        <div class='col-md-1 col-1 col-sm-1 col-lg-1'>
                                                            <img src='images/achieved.png' alt='' class="c-img">
                                                        </div>
                                                        <div class='col-md-9 col-9 col-sm-9 col-lg-9'>
                                                            <div class="achieved-main-card">
                                                                <div class="achieved-card"></div>
                                                            </div>
                                                            <span style='color:gray;font-size:14px; margin-left: 20px;'>8000 achieved</span>
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <hr style="width: 100%;margin-top:10px">



                            <div class="d-flex align-items-center justify-content-center">
                                @foreach($m_id as $app)
                                @if($app->mission_id==$mission->mission_id)

                                @if($app->mission_id==$mission->mission_id && $app->user_id==Auth::user()->user_id && $app->approval_status!="DECLINE")
                                <div class="form-group">
                                    <a href="{{url('volunteering/'.$mission->mission_id)}}">

                                        <div class='card-button'>View Detais
                                            <img src='images/right-arrow.png' alt='' class='pl-3'>
                                        </div>
                                    </a>
                                </div>

                                @break
                                @endif
                                @endif
                                @endforeach
                                @if($app->mission_id != $mission->mission_id || $app->user_id!=Auth::user()->user_id || $app->approval_status=="DECLINE")
                                <a href="{{url('add-app/'.$mission->mission_id)}}">
                                    <div class='card-button'> Apply
                                        <img src='images/right-arrow.png' alt='' class='pl-3'>
                                    </div>
                                </a>
                                @endif


                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
</div>

<div class="popup">
            <div class="popup-close-btn"></div>
            <div class="popup-content"></div>
        </div>
        <div class="for-call-popup">
            <form action="{{url('Invite')}}" class="call-popup">
                <h3>Contact Us</h3>
                <br>
                <label for="mission">Mission</label>
                @php 
                $missions=App\Models\Mission::all()
                @endphp
                <div><select class="story-input" aria-placeholder="Select your Mission"  name="mission_id">
                    @foreach($missions as $mission)
                            <option value="{{$mission->mission_id}}" class="story-input">{{$mission->title}}</option>
                    @endforeach
                        </select></div>
                        <br>

                        <label for="mission">User</label>
                @php 
                $users=App\Models\User::all()
                @endphp
                <div><select class="story-input" aria-placeholder="Select your User"  name="user_id">
                    @foreach($users as $user)
                            <option value="{{$user->user_id}}" class="story-input">{{$user->full_name}}</option>
                    @endforeach
                        </select></div>
                        <br>

                <div class="popup-btn-contact">
                    <input type="submit" class="popup-button" name="" value="cancel" id="">
                    <input type="submit" class="contact-button-1" value="Invite" name="" id="">
                </div>
            </form>
        </div>
        <div class="overlay"></div>

<script>
    $(document).ready(function(){ 
        $('.cus_rating').click(function(){
           $('#form_'+$(this).attr("cusId")).submit();
        });
    })

    $(function() {
            var p = new Popup({
                popup: '.popup',
                content: '.popup-content',
                overlay: '.overlay',
            });

           

            $('.invite').click(function() {
                var form = $('.for-call-popup');
                p.open(form.html());
            });

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