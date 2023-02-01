@extends('layouts.app')

@section('content')
@inject('carbon', 'Carbon\Carbon')

<div class="body-1">
    <div class="explore">
        <div class="left-explore common-font">
            <span class="explore-light">Explore </span>{{count($mission)}} missions
        </div>
        <div class="right-explore">
        <form id="selectsort" action="{{url('list')}}" enctype="multipart/form-data" method="GET">
            <select name="sort" class="Rounded-Rectangle-8" onchange="sortBy()">
                @if(request()->input('sort'))
                <option value="none" selected disabled="" hidden="">{{request()->input('sort')}}</option>
                @else
                <option value="none" selected="" disabled="" hidden="">Sort By</option>
                @endif
                <option value="Newest">Newest</option>
                <option value="Oldest">Oldest</option>
                <option value="Lowest available seats ">Lowest available seats</option>
                <option value="Highest available seats">Highest available seats </option>
                <option value="My favourites">My favourites </option>
                <option value="Registration deadline">Registration deadline </option>
            </select>
        </form>
            <a href="{{url('home')}}">
                <img class="img-fluid Grid-list" src="images/grid.png" alt="">
            </a>
            <a href="{{url('list')}}">
                <img class="img-fluid Grid-list" src="images/list.png" alt="">
            </a>
        </div>
    </div>
    <!-- card -->
    <section>
        <div class="container-fluid">
            <div class="row abc">
                @foreach($missions as $mission)
                <div class="col-md-12" style="margin-top:20px ;">
                    <div class="card-box" style="width: 100%;height:100%;">
                        <div class="column1 col-md-3">
                            <div class="card-image">
                            @foreach($media as $item)
                @if(($item->mission_id==$mission->mission_id))
                <img src="/images/{{$item->media_name}}" class="img" style="height: 250px;width:100%" alt="...">
                @break
                @endif
                @endforeach

                @if(($item->mission_id==$mission->mission_id)==null)
                <img src="/images/image2.png" style="height: 250px;width:100%">
                @endif
                                <div>
                                    <button value="{{$mission->mission_id}}" onClick="topFunction()"
                                        class="invite d-flex align-items-center third-txt p-2">
                                        <img src="/images/user.png" class='img-fluid img-card'>
                                    </button>
                                </div>
                                <div class="d-flex align-items-center second-txt p-2">
                                    <a href="{{url('favourite/'.$mission->mission_id)}}">
                                        
                                        @foreach($favourite as $fav)
                                        @if($fav->mission_id==$mission->mission_id)
                                        @if($fav->mission_id==$mission->mission_id &&
                                        $fav->user_id==Auth::user()->user_id)
                                        <img src="/images/favourite.jpg" alt='' class='img-fluid img-card-h'>
                                        @break
                                        @endif
                                        @endif
                                        @endforeach
                                        @if($fav->mission_id!=$mission->mission_id ||
                                        $fav->user_id!=Auth::user()->user_id)
                                        <img src="/images/heart.png" alt='' class='img-fluid img-card-h'>
                                        @endif
                                    </a>
                                </div>
                                <a href="">
                                    <div class="d-flex align-items-center first-txt">
                                        <img src="images/pin.png" class='img-fluid pr-2 '
                                            style='height:22px;margin:5px'>
                                        <span>{{$mission->city->name}}</span>
                                </a>
                            </div>
                            <div class="d-flex four-txt justify-content-center">
                                <div class="theme">{{$mission->theme->title}}</div>
                            </div>
            @foreach($application as $item)
                @if($item==$mission->mission_id)
                <div class="d-flex align-items-center fifth-txt">
                    <span>APPLIED</span>
                </div>
                @endif
                @endforeach
                @foreach($app as $item)
                @if($mission->end_date<=$carbon::now() && $item!=$mission->mission_id && $mission->end_date!=null)
                    <div class="d-flex align-items-center fifth-txt">
                        <span>CLOSED</span>
                    </div>
                    @endif
                    @endforeach

                        </div>
                    </div>
                    <div class="column2 col-md-6">
                        <div class="card-body " style="padding-left:10px ; padding-top:30px;">
                            <h5>{{$mission->title}}</h5>
                            <p class="card-text" style="color:black;">{{$mission->short_description}}</p>
                            <div class="column2-2 col-md-2">
                                <div class='d-flex align-items-center'>
                                    <hr class='flex-grow-1' />
                                    
                                    @foreach($goal as $item)
                    @if(($item->mission_id==$mission->mission_id))
                    <div class='goal'>{{$item->goal_objective_text}}</div>
                    @break
                    @endif
                    @endforeach

                    @if(($item->mission_id==$mission->mission_id)==null)
                    <div class='goal'>{{$mission->start_date->format('d/m/Y')}} to
                        {{$mission->end_date->format('d/m/Y')}}
                    </div>
                     @endif
                                    <hr class='flex-grow-1' />
                                </div>
                                <br>
                                <div class='row'>
                                    <div class='col-md-6'>
                                        <div class='row'>
                                            <div class='col-md-1'>
                                                <img src='images/Seats-left.png' alt='' style='height:20px'>
                                            </div>
                                            <div class='col-md-9'>
                                            @php
                                                $left=App\Models\Application::where('mission_id',$mission->mission_id)->count('mission_id');
                                                @endphp
                                                <h4 style="color: grey;">{{$mission->total_seat-$left}}</h4>
                                                <h6 style='color:gray;font-size:14px'>Seats-left</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='col-md-6' style='color:black;'>
                                        <div class='row'>
                                            @if($mission->end_date!=null)
                                            <div class='col-md-1 col-1 col-sm-1 col-lg-1'>
                                                <img src='images/deadline.png' alt='' class="c-img">
                                            </div>
                                            <div class='col-md-9 col-9 col-sm-9 col-lg-9'>

                                                <div class="c-text"> <span
                                                        class="c-text-style">{{$mission->end_date->format('d/m/Y')}}
                                                    </span> Deadline </div>

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
                                                <span style='color:gray;font-size:14px;'>8000 achieved</span>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex">
                            @foreach($m_id as $app)

@if($app->mission_id==$mission->mission_id && $app->user_id==Auth::user()->user_id &&
$app->approval_status!="DECLINE" && $app->approval_status=='APPROVE'|| $mission->end_date<=$carbon::now() && $mission->end_date!=null)
<a href="{{url('volunteering/'.$mission->mission_id)}}">
<div class="form-group">
        <div class='card-button'>View Details
            <img src='images/right-arrow.png' alt='' class='pl-3'>
        </div>
</div>
</a>
@break
@endif
@if($app->approval_status=="PENDING" && $app->mission_id == $mission->mission_id &&
$app->user_id==Auth::user()->user_id )
<div class='card-button'> Applied
    <img src='images/right-arrow.png' alt='' class='pl-3'>
</div>
@break
@endif

@endforeach

@if($app->mission_id != $mission->mission_id || $app->user_id!=Auth::user()->user_id ||
$app->approval_status=="DECLINE")
@if($mission->end_date>=$carbon::now() || $mission->end_date==null)
<a href="{{url('volunteering/'.$mission->mission_id)}}">
    <div class='card-button'> Apply
        <img src='images/right-arrow.png' alt='' class='pl-3'>
    </div>
</a>
@endif

@endif
                            </div>
                            <div class="column2-1 col-md-">
                                <div class='row'>

                                    <div class='col-md-7'>
                                        <h6 class="card-text" style="color:black;">{{$mission->organization}}</h6><br>
                                    </div>
                                    <div class='col-md-5'>
                                        <div class="rating-css">
                                        <form action="{{url('add-rating/'.$mission->mission_id)}}" method="POST"
                                id="form_{{$mission->mission_id}}">
                                @csrf
                                <input type="hidden" value="{{$mission->mission_id}}" name="mission_id">
                                <div class="rating-css">

                                    <div class="star-icon">
                                        @foreach($rate as $rating)
                                        @if($rating->mission_id==$mission->mission_id)
                                        <input value="1" id="rating1_{{$mission->mission_id}}" class="cus_rating"
                                            type="radio" name="star" cusId="{{$mission->mission_id}}" />
                                        <label for="rating1_{{$mission->mission_id}}"
                                            class="fa fa-star @if($rating->times_added!=0) @if($rating->times_added>=1) checked @endif @endif"></label>
                                        <input value="2" id="rating2_{{$mission->mission_id}}" class="cus_rating"
                                            type="radio" name="star" cusId="{{$mission->mission_id}}" />
                                        <label for="rating2_{{$mission->mission_id}}"
                                            class="fa fa-star @if($rating->times_added!=0) @if($rating->times_added>=2) checked @endif @endif"></label>
                                        <input value="3" id="rating3_{{$mission->mission_id}}" class="cus_rating"
                                            type="radio" name="star" cusId="{{$mission->mission_id}}" />
                                        <label for="rating3_{{$mission->mission_id}}"
                                            class="fa fa-star @if($rating->times_added!=0) @if($rating->times_added>=3) checked @endif @endif"></label>
                                        <input value="4" id="rating4_{{$mission->mission_id}}" class="cus_rating"
                                            type="radio" name="star" cusId="{{$mission->mission_id}}" />
                                        <label for="rating4_{{$mission->mission_id}}"
                                            class="fa fa-star @if($rating->times_added!=0) @if($rating->times_added>=4) checked @endif @endif"></label>
                                        <input value="5" id="rating5_{{$mission->mission_id}}" class="cus_rating"
                                            type="radio" name="star" cusId="{{$mission->mission_id}}" />
                                        <label for="rating5_{{$mission->mission_id}}"
                                            class="fa fa-star @if($rating->times_added!=0) @if($rating->times_added>=5) checked @endif @endif"></label>
                                        @break
                                        @endif
                                        @endforeach
                                        @if(($rating->mission_id==$mission->mission_id)==null)
                                        <input value="1" id="rating1_{{$mission->mission_id}}" class="cus_rating"
                                            type="radio" name="star" cusId="{{$mission->mission_id}}" />
                                        <label for="rating1_{{$mission->mission_id}}" class="fa fa-star"></label>
                                        <input value="2" id="rating2_{{$mission->mission_id}}" class="cus_rating"
                                            type="radio" name="star" cusId="{{$mission->mission_id}}" />
                                        <label for="rating2_{{$mission->mission_id}}" class="fa fa-star"></label>
                                        <input value="3" id="rating3_{{$mission->mission_id}}" class="cus_rating"
                                            type="radio" name="star" cusId="{{$mission->mission_id}}" />
                                        <label for="rating3_{{$mission->mission_id}}" class="fa fa-star"></label>
                                        <input value="4" id="rating4_{{$mission->mission_id}}" class="cus_rating"
                                            type="radio" name="star" cusId="{{$mission->mission_id}}" />
                                        <label for="rating4_{{$mission->mission_id}}" class="fa fa-star"></label>
                                        <input value="5" id="rating5_{{$mission->mission_id}}" class="cus_rating"
                                            type="radio" name="star" cusId="{{$mission->mission_id}}" />
                                        <label for="rating5_{{$mission->mission_id}}" class="fa fa-star"></label>
                                        @endif
                                    </div>

                                </div>
                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</div>
</section>

<div class="popup">
    <div class="popup-close-btn"></div>
    <div class="popup-content"></div>
    <input type="submit" class="popup-button" name="" value="cancel" id="">

</div>
<div class="for-call-popup">
    <form action="{{url('Invite')}}" class="call-popup">
        <h3>Invite</h3>
        <br>
        <input type="hidden" name="mission_id" id="mission_id">

        <label for="mission">User</label>
        <div><select class="story-input" aria-placeholder="Select your User" name="user_id">
                @foreach($users as $user)
                <option value="{{$user->user_id}}" class="story-input">{{$user->full_name}}</option>
                @endforeach
            </select></div>
        <br>

        <div class="popup-btn-contact">
            <input type="submit" class="contact-button-1" value="Invite" name="" id="" onclick="this.form.submit();this.disabled=true">
        </div>
    </form>
</div>
<div class="overlay"></div>
<hr>
<x-footer></x-footer>
<br>
@endsection

@section('scripts')
<script>
     function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

$(document).ready(function() {
    $('.cus_rating').click(function() {
        $('#form_' + $(this).attr("cusId")).submit();
    });
})

$(function() {
    var p = new Popup({
        popup: '.popup',
        content: '.popup-content',
        overlay: '.overlay',
    });
    $('.invite').click(function() {
        var mission_id = $(this).val();
        var form = $('.for-call-popup');
        p.open(form.html());
        $.ajax({
            type: "GET",
            url: "invite_mission/" + mission_id,
            success: function(response) {
                console.log(response);
                $('#mission_id').val(response.invite.mission_id);
            }
        })
    });

    $('.popup-close-btn').click(function() {
        p.close();
    });
    $('.popup-button').click(function(){
        p.close();
    })
});

function sortBy() {
    let form1 = document.getElementById("selectsort");
    form1.submit();
}

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