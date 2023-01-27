@extends('layouts.app')

@section('content')
<div class="body-1">

    <!-- Explore vala nav -->
    @php
    $mission=App\Models\Mission::all()
    @endphp
    <div class="explore">
        <div class="left-explore common-font">
            <span class="explore-light">Explore </span>{{count($mission)}} missions
        </div>
        <div class="right-explore">
            <select name="sorting" class="Rounded-Rectangle-8">
                <option value="">Sort by</option>
                <option value="Newest">Newest</option>
                <option value="Oldest">Oldest</option>
                <option value="Lowest available ">Lowest available seats</option>
                <option value="Highest available seats ">Highest available seats </option>
                <option value="My favourites ">My favourites </option>
                <option value="Registration deadline ">Registration deadline </option>
            </select>
            <a href="{{url('home')}}">
                <img class="img-fluid Grid-list Grid" src="images/grid.png" alt="">
            </a>
            <a href="{{url('list')}}">
                <img class="img-fluid Grid-list" src="images/list.png" alt="">
            </a>
        </div>
    </div>
    <!-- card -->
    <section>
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
                        <img src="/images/{{$media->media_name}}" class="img" style="height: 250px;width:100%"
                            alt="...">
                        @endif
                        <div class='d-flex align-items-center third-txt p-2'>
                            <a href="">
                                <img src="/images/user.png" class='img-fluid img-card'>
                            </a>
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

                        <p class="card-text card-description" style="color:black;">{{$mission->short_description}}</p>

                        <div class="row">
                            <div class="col-md-7 col-lg-7 col-7">
                                <h6 class="card-text" style="color:black;font-size:16px">{{$mission->organization_name}}
                                </h6>
                            </div>
                            <div class="col-md-5 col-lg-5 col-5">
                                <div class="rating-css">
                                    <div class="star-icon">
                                        <form action="{{url('add-rating')}}" method="" id="form">
                                            <input type="hidden" value="{{$mission->mission_id}}" name="mission_id">
                                            <input value="1" id="rating1" type="radio" name="star" />
                                            <label for="rating1" class="fa fa-star checked"></label>
                                            <input value="2" id="rating2" type="radio" name="star" />
                                            <label for="rating2" class="fa fa-star checked"></label>
                                            <input value="3" id="rating3" type="radio" name="star" />
                                            <label for="rating3" class="fa fa-star checked"></label>
                                            <input value="4" id="rating4" type="radio" name="star" />
                                            <label for="rating4" class="fa fa-star"></label>
                                            <input value="5" id="rating5" type="radio" name="star" />
                                            <label for="rating5" class="fa fa-star"></label>
                                        </form>
                                    </div>
                                </div>
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
                        <div class='goal'>{{$mission->start_date->format('d/m/Y')}} to
                            {{$mission->end_date->format('d/m/Y')}}</div>
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
                                                    <div class="seat-left"> <span
                                                            class="c-text-style">{{$mission->seat_left}} </span>
                                                        Seats-left </div>
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
                                                    <span style='color:gray;font-size:14px; margin-left: 20px;'>8000
                                                        achieved</span>
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
                        @if($app->mission_id==$mission->mission_id && $app->user_id==Auth::user()->user_id &&
                        $app->approval_status!="DECLINE")
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
                        @if($app->mission_id != $mission->mission_id || $app->user_id!=Auth::user()->user_id ||
                        $app->approval_status=="DECLINE")
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
</div>
</section>
<br><br>

<div class="container mt-3">
    <ul class="pagination">
        <li class="page-item">
            <a class="page-link" href="{{url('mission_listing?page=1')}}" aria-label="prevoius">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link" href="{{$missions->previousPageUrl()}}" aria-label="prevoius">
                <span aria-hidden="true">&lsaquo;</span>
            </a>
        </li>
        @for($i=1;$i<=$max_count;$i++) @php $page=$i @endphp @if($i==$missions->currentPage())
            <li class="page-item"><a class="page-link active" href="{{url('mission_listing?page='.$i)}}">{{$i}}</a>
            </li>
            @else
            <li class="page-item"><a class="page-link" href="{{url('mission_listing?page='.$i)}}">{{$i}}</a> </li>
            @endif
            @endfor
            <li class="page-item">
                <a class="page-link" href="{{$missions->nextPageUrl()}}" aria-label="Next">
                    <span aria-hidden="true">&rsaquo;</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="{{url('mission_listing?page='.$max_count)}}" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
    </ul>
</div>


<br>

<footer>

    <div class="Rectangle-1" id="wrapper">
        <div class="close-div">
            <div class="f-close">
                <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
            </div>
        </div>
        <div class="footer-text close-wrapper">

            This website makes use of cookies to enhance browsing experience and provide additional functionality. <a
                href="" style=" color: #f88634">Privacy policy</a>
        </div>
        <div class="Rounded-Rectangle-7-copy-3">
            <span class="footer-button">
                I Agree
            </span>
        </div>
    </div>
</footer>

@endsection

@section('scripts')

<script>
$('.close-div').click(function() {
    $(this).parent().parent().remove();
})
</script>
@endsection