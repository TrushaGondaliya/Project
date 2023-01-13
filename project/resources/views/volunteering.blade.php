@extends('layouts.app')

@section('content')
<div class="body-1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet" />

    <hr style="margin:0">
    <!-- Volunteering mission listing -->

    <section>

        <div class="vol">
            @foreach($missions as $mission)
            @php
            $media=App\Models\Media::where('mission_id',$mission->mission_id)->first();
            @endphp
            <div class="row  col-sm-12  col-lg-12">
                <div class="column  col-sm-6  col-lg-6" style="padding-left: 10px;">
                    @if(is_null($media))
                    <img src="/images/image2.png" class="vol-main-img">
                    @else
                    <img src="/images/{{$media->media_name}}" class="vol-main-img" alt="...">
                    @endif
                    <div id="gallery" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col" style="padding: 0px;">
                                        <img src="/images/Grow-Trees-On-the-path-to-environment-sustainability-1.png" class="story-img " alt="">
                                    </div>

                                    <div class="col" style="padding: 0px;">
                                        <img src="/images/CSR-initiative-stands-for-Coffee--and-Farmer-Equity.png" class="story-img" alt="">

                                    </div>

                                    <div class="col" style="padding: 0px;">
                                        <img src="/images/img1.png" class="story-img " style="padding-left: 0;" alt="">
                                    </div>

                                    <div class="col" style="padding: 0px;">
                                        <img src="/images/img11.png" class="story-img " alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col" style="padding: 0px;">
                                        <img src="/images/Grow-Trees-On-the-path-to-environment-sustainability-1.png" class="story-img " alt="">
                                    </div>

                                    <div class="col" style="padding: 0px;">
                                        <img src="/images/CSR-initiative-stands-for-Coffee--and-Farmer-Equity.png" class="story-img" alt="">

                                    </div>

                                    <div class="col" style="padding: 0px;">
                                        <img src="/images/img1.png" class="story-img " style="padding-left: 0;" alt="">
                                    </div>

                                    <div class="col" style="padding: 0px;">
                                        <img src="/images/img11.png" class="story-img " alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a class="carousel-control-prev" href="#gallery" role="button" data-slide="prev">
                            <div class="parent">
                                <div class="half-fade-1">
                                    <img src="/images/left1.png" alt="">
                                </div>
                            </div>
                        </a>

                        <a class="carousel-control-next" href="#gallery" role="button" data-slide="next">
                            <div class="parent">
                                <div class="half-fade">
                                    <img src="/images/right-arrow2.png" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <br><br>
                </div>

                <div class="column col-lg-6 col-md-6">
                    <div class="container">
                        <div class=" vol-heading">{{$mission->title}}</div><br>
                        <div class="vol-text">
                            {{$mission->short_description}}
                        </div><br>
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

                        <div class="row col-md-12 col-sm-12  col-lg-12 col-12">
                            <div class="column col-md-6 col-sm-6  col-lg-6 col-6">
                                <div class='row vol-abc'>
                                    <div class='col-md-1 col-sm-1  col-lg-1 col-1'>
                                        <img src='/images/Seats-left.png' alt='' style='height:30px'>
                                    </div>
                                    <div class='col-md-9 col-sm-9 col-9 col-lg-9'>
                                        <h6 style="color: grey; margin-left:20px ;">10</h6>
                                        <h6 style='color:gray;font-size:10px; margin-left:20px '>Seats-left</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="column col-md-6 col-lg-6 col-6">
                                <div class='row vol-abc'>
                                    <div class='col-md-1 col-sm-1  col-lg-1 col-1'>
                                        <img src='/images/achieved.png' alt='' style='height:30px'>
                                    </div>
                                    <div class='col-md-9 col-sm-9 col-9 col-lg-9 col-9'>
                                        <div class="achieved-main">
                                            <div class="achieved"></div>
                                        </div>
                                        <h6 style='color:gray;font-size:10px; margin-left: 20px;'>8000 achieved</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <br>
                        <div class="row col-md-12 col-sm-12  col-lg-12">
                            <div class="column col-lg-6">
                                <div class="btn1">
                                    <a href="{{url('favourite/'.$mission->mission_id)}}">
                                        @php
                                        $favourite=App\Models\Favourite::all()
                                        @endphp
                                        @foreach($favourite as $fav)
                                        @if($fav->mission_id==$mission->mission_id)

                                        @if($fav->mission_id==$mission->mission_id && $fav->user_id==Auth::user()->user_id)
                                        <img src="/images/favourite.jpg" style="height: 20px;width:23px" alt="">
                                        <span class="vol-fav">Already Favourite</span>
                                        @break
                                        @endif
                                        @endif
                                        @endforeach

                                        @if($fav->mission_id!=$mission->mission_id || $fav->user_id!=Auth::user()->user_id)
                                        
                                        <img src="/images/heart1.png" style="height: 20px;width:23px" alt="">
                                        <span class="vol-fav">Add to Favourite</span>
                                        @endif

                                    </a>
                                </div>

                            </div>

                            <div class="column  col-lg-6 ">
                                <div class="btn1">
                                    <button value="{{$mission->mission_id}}" class="invite btn-invite">
                                        <img src="/images/add1.png" style="height: 22px;width:22px">
                                        <span class="vol-fav-1">Recommend to a co-worker</span>
                                    </button>
                                </div>
                            </div>

                        </div>
                        <br>

                        <div class='d-flex align-items-center'>
                            <hr class='flex-grow-1' />

                            <form action="{{url('add-rating/'.$mission->mission_id)}}" method="POST" id="form_{{$mission->mission_id}}">
                                @csrf
                                <input type="hidden" value="{{$mission->mission_id}}" name="mission_id">
                                <div class="rating-css">
                                    @php
                                    $rating=App\Models\Rating::where('mission_id',$mission->mission_id)->sum('rating');
                                    $count=App\Models\Rating::where('mission_id',$mission->mission_id)->count('mission_id');

                                    @endphp
                                    @if($count!=0)
                                    @php
                                    $rate=$rating/$count
                                    @endphp
                                    @endif


                                    <div class="star-icon">
                                        <input value="1" id="rating1_{{$mission->mission_id}}" class="cus_rating" type="radio" name="star" cusId="{{$mission->mission_id}}" />
                                        <label for="rating1_{{$mission->mission_id}}" class="fa fa-star @if($count!=0) @if($rate>=1) checked @endif @endif"></label>
                                        <input value="2" id="rating2_{{$mission->mission_id}}" class="cus_rating" type="radio" name="star" cusId="{{$mission->mission_id}}" />
                                        <label for="rating2_{{$mission->mission_id}}" class="fa fa-star @if($count!=0) @if($rate>=2) checked @endif @endif"></label>
                                        <input value="3" id="rating3_{{$mission->mission_id}}" class="cus_rating" type="radio" name="star" cusId="{{$mission->mission_id}}" />
                                        <label for="rating3_{{$mission->mission_id}}" class="fa fa-star @if($count!=0) @if($rate>=3) checked @endif @endif"></label>
                                        <input value="4" id="rating4_{{$mission->mission_id}}" class="cus_rating" type="radio" name="star" cusId="{{$mission->mission_id}}" />
                                        <label for="rating4_{{$mission->mission_id}}" class="fa fa-star @if($count!=0) @if($rate>=4) checked @endif @endif"></label>
                                        <input value="5" id="rating5_{{$mission->mission_id}}" class="cus_rating" type="radio" name="star" cusId="{{$mission->mission_id}}" />
                                        <label for="rating5_{{$mission->mission_id}}" class="fa fa-star @if($count!=0) @if($rate>=5) checked @endif @endif"></label>
                                    </div>
                                </div>
                            </form>
                            <hr class='flex-grow-1' />

                        </div><br>


                        <br>

                        <div class="row col-md-12 col-12 col-sm-12 col-lg-12">
                            <div class="column col-md-6  col-sm-6 col-6 col-lg-6 col-xl-3">
                                <div class="pin">
                                    <img src="/images/pin1.png" style="padding-bottom: 10px;" alt=""><br><br>
                                    <span class="span-main"><span class="span-text"> city</span><br>
                                        {{$mission->city->name}}</span>
                                </div>

                            </div>

                            <div class="column col-md-6 col-6 col-sm-6 col-lg-6 col-xl-3">
                                <div class="pin"><img src="/images/web.png" style="padding-bottom: 10px;" alt=""><br><br>
                                    <span class="span-main"><span class="span-text"> Theme</span><br>
                                        {{$mission->theme->title}}</span>
                                </div>

                            </div>
                            <div class="column col-md-6 col-6 col-lg-6 col-xl-3">
                                <div class="pin"><img src="/images/calender.png" style="padding-bottom: 10px;" alt=""><br>
                                    @php
                                    $goal=App\Models\Goal::where('mission_id',$mission->mission_id)->first();
                                    @endphp
                                    @if(is_null($goal))
                                    <span class="span-main"><span class="span-text"> Date</span><br>
                                        {{$mission->start_date->format('d/m/Y')}} to {{$mission->end_date->format('d/m/Y')}}</span>

                                    @else
                                    <span class="span-main"><span class="span-text"> Date</span><br>
                                        {{$goal->goal_objective_text}}</span>
                                    @endif
                                </div>

                            </div>
                            <div class="column col-md-6 col-6 col-lg-6 col-xl-3">
                                <div class="pin"><img src="/images/organization.png" style="padding-bottom: 10px;" alt=""><br>
                                    <span class="span-main"><span class="span-text"> Organization</span><br>
                                        {{$mission->organization_name}}</span>
                                </div>

                            </div>
                        </div><br>
                        <div class='vol-button'>Apply Now
                            <img src='/images/right-arrow.png' alt='' class='pl-3'>
                        </div>
                    </div>
                </div>


            </div>

            <br><br>
            <div class="container-fluid">
                <div class="row">
                    <div class="row col-lg-12">
                        <div class="column col-lg-7">
                            <div class=" vol-mission">



                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#mission">mission</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#organization">organization </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#sponsored">Sponsored </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#comments">comments </a>
                                    </li>
                                </ul>




                            </div>
                            <div class="tab-content">
                                <div id="mission" class="container tab-pane active"><br>
                                    
                                    <p>
                                        {!!$mission->description!!}
</p>
                                    <br><br>

                                    <span class="vol-intro">Documents</span><br><br>

                                    <div class="row col-lg-12 ">
                                        @php
                                        $documents=App\Models\Document::where('mission_id',$mission->mission_id)->get()
                                        @endphp
                                        @foreach($documents as $document)
                                        <div class="column col-lg-6 col-xl-4 col-md-4">
                                            <div class="btn1">
                                                <img src="/images/doc.png" style="height: 24px;width:21px" alt="">
                                                <span style="font-size: 15px;color:#454545;">{{$document->document_name}}</span>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                                <div id="organization" class="container tab-pane fade"><br>
                                    {{$mission->organization_detail}}
                                </div>
                                <div id="sponsored" class="container tab-pane fade"><br>
                                    <h3>Menu 2</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                </div>
                                <div id="comments" class="container tab-pane fade"><br>
                                    <h3>Menu 3</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                </div>
                            </div>
                            <br>



                        </div>
                        <!-- second row second column -->
                        <div class="column col-lg-4">
                            <div class="Layer-121-copy">
                                <ul class="nav nav-tabs-1">
                                    <li class="nav-item"> <a class="nav-link nav-1" href="#">
                                            Information
                                        </a> </li>
                                </ul>
                                <table>
                                    <tr style="border-bottom:1px solid grey ; ">
                                        <td>
                                            skills
                                        </td>
                                        <td>
                                            @php
                                            $skills=App\Models\Missionskill::where('mission_id',$mission->mission_id)->get()
                                            @endphp
                                            @foreach($skills as $skill)
                                            {{$skill->skill->skill_name}},
                                            @endforeach
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            Days
                                        </td>
                                        <td>
                                            {{$mission->availability}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Rating
                                        </td>
                                        <td>
                                            <div class="rating-css1">
                                                @php
                                                $rating=App\Models\Rating::where('mission_id',$mission->mission_id)->sum('rating');
                                                $count=App\Models\Rating::where('mission_id',$mission->mission_id)->count('mission_id');

                                                @endphp
                                                @if($count!=0)
                                                @php
                                                $rate=$rating/$count
                                                @endphp
                                                @endif


                                                <div class="star-icon1">
                                                    <input value="1" id="rating1_{{$mission->mission_id}}" class="cus_rating" type="radio" name="star" cusId="{{$mission->mission_id}}" />
                                                    <label for="rating1_{{$mission->mission_id}}" class="fa fa-star @if($count!=0) @if($rate>=1) checked @endif @endif"></label>
                                                    <input value="2" id="rating2_{{$mission->mission_id}}" class="cus_rating" type="radio" name="star" cusId="{{$mission->mission_id}}" />
                                                    <label for="rating2_{{$mission->mission_id}}" class="fa fa-star @if($count!=0) @if($rate>=2) checked @endif @endif"></label>
                                                    <input value="3" id="rating3_{{$mission->mission_id}}" class="cus_rating" type="radio" name="star" cusId="{{$mission->mission_id}}" />
                                                    <label for="rating3_{{$mission->mission_id}}" class="fa fa-star @if($count!=0) @if($rate>=3) checked @endif @endif"></label>
                                                    <input value="4" id="rating4_{{$mission->mission_id}}" class="cus_rating" type="radio" name="star" cusId="{{$mission->mission_id}}" />
                                                    <label for="rating4_{{$mission->mission_id}}" class="fa fa-star @if($count!=0) @if($rate>=4) checked @endif @endif"></label>
                                                    <input value="5" id="rating5_{{$mission->mission_id}}" class="cus_rating" type="radio" name="star" cusId="{{$mission->mission_id}}" />
                                                    <label for="rating5_{{$mission->mission_id}}" class="fa fa-star @if($count!=0) @if($rate>=5) checked @endif @endif"></label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <!-- second row second column complete -->

                            <!-- recent Volunteers block -->
                            <div class="recent-vol">
                                <ul class="nav nav-tabs-1">
                                    <li class="nav-item"> <a class="nav-link nav-1" href="#">
                                            Recent Volunterees
                                        </a> </li>
                                </ul>
                                <table class="recent-info">
                                    <tr>
                                        @php
                                        $volunteers=App\Models\Application::where('mission_id',$mission->mission_id)->get()
                                        @endphp
                                        @foreach($volunteers as $volunteer)
                                        <td>
                                            <img src="{{asset('/uploads/user/'.$volunteer->user->avtar)}}" class="recent-vol-img" alt="">
                                            <div class="text-2">{{$volunteer->user->full_name}}</div>
                                        </td>
                                        @endforeach
                                        <td>
                                            <img src="/images/volunteer1.png" class="recent-vol-img" alt="">
                                            <div class="text-2">Andrew johson</div>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="/images/volunteer4.png" class="recent-vol-img" alt="">
                                            <div class="text-2">Estella Fawles</div>
                                        </td>
                                        <td>
                                            <img src="/images/volunteer5.png" class="recent-vol-img" alt="">
                                            <div class="text-2">Rase Lewis</div>
                                        </td>
                                        <td>
                                            <img src="/images/volunteer6.png" class="recent-vol-img" alt="">
                                            <div class="text-2">Raymond Pabon</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="/images/volunteer7.png" class="recent-vol-img" alt="">
                                            <div class="text-2">Travin Steen</div>
                                        </td>
                                        <td>
                                            <img src="/images/volunteer8.png" class="recent-vol-img" alt="">
                                            <div class="text-2">Sarah Santillan</div>
                                        </td>
                                        <td>
                                            <img src="/images/volunteer9.png" class="recent-vol-img" alt="">
                                            <div class="text-2">Linda Richards</div>

                                        </td>
                                    </tr>
                                </table>
                                <div class="row vol-line">
                                    <div class="column col-2 col-lg-2 col-md-2 vol-1">
                                        <img src="/images/left.png">
                                    </div>
                                    <div class="column col-9 col-lg-9 col-md-9 vol-2">
                                        <span>1-8 of 25 recent volunteers</span>
                                    </div>
                                    <div class="column col-1 col-lg-1 col-md-1 vol-3">
                                        <img src="/images/right-arrow1.png">
                                    </div>
                                </div>
                            </div>

                            <!-- end recent Volunteers block -->
                        </div>





                    </div>

                </div>
            </div>





        </div>

        <br>

    </section>

    <br><br>
    <hr>


    <span class="Related-Mission">Related Mission</span><br><br>

    <div class="vol row">
        @php
        $themes=App\Models\Mission::where('theme_id',$mission->theme_id)->get()
        @endphp
        @foreach($themes as $theme)
        <div class="col-lg-4 card-filter  col-sm-4 col-md-4" style="margin-top:20px ;">
            <div class="card-box" style="width: 100%;height:100%;">
                <div class="card-image">
                    @php
                    $media=App\Models\Media::where('mission_id',$theme->mission_id)->first();
                    @endphp
                    @if(is_null($media))
                    <img src="/images/image2.png" style="height: 250px;width:100%">
                    @else
                    <img src="/images/{{$media->media_name}}" class="img" style="height: 250px;width:100%" alt="...">
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
                            @if($fav->mission_id==$theme->mission_id)

                            @if($fav->mission_id==$theme->mission_id && $fav->user_id==Auth::user()->user_id)
                            <img src="/images/favourite.jpg" alt='' class='img-fluid img-card-h'>
                            @break
                            @endif
                            @endif
                            @endforeach

                            @if($fav->mission_id!=$theme->mission_id || $fav->user_id!=Auth::user()->user_id)
                            <img src="/images/heart.png" alt='' class='img-fluid img-card-h'>
                            @endif




                        </a>
                    </div>
                    <a href="">
                        <div class="d-flex align-items-center first-txt">
                            <img src="/images/pin.png" class='img-fluid pr-2 ' style='height:22px;margin:5px'>
                            <span>{{($theme->city->name)}}</span>
                    </a>
                </div>

                <div class="d-flex four-txt justify-content-center">
                    <div class="theme">{{$theme->theme->title}}</div>
                </div>

            </div>

            <div class="card-body" style=" padding-top:30px;">
                <div class="container card-div-1">
                    <h5 class="card-title">{{$theme->title}}</h5>
                    <br>

                    <p class="card-text card-description" style="color:black;">{{$theme->short_description}}</p>

                    <div class="row">
                        <div class="col-md-7 col-lg-7 col-7">
                            <h6 class="card-text" style="color:black;font-size:16px">{{$theme->organization_name}}</h6>
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
                                                <img src='/images/Seats-left.png' alt='' class="c-img">
                                            </div>
                                            <div class='col-md-9 col-9 col-sm-9 col-lg-9'>
                                                <div class="seat-left"> <span class="c-text-style">{{$theme->seat_left}} </span> Seats-left </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class='col-md-6 col-sm-6 col-6 col-lg-6' style='color:black;'>
                                        <div class='row'>
                                            @if($theme->end_date!=null)
                                            <div class='col-md-1 col-1 col-sm-1 col-lg-1'>
                                                <img src='/images/deadline.png' alt='' class="c-img">
                                            </div>
                                            <div class='col-md-9 col-9 col-sm-9 col-lg-9'>

                                                <div class="c-text"> <span class="c-text-style">{{$theme->end_date->format('d/m/Y')}} </span> Deadline </div>

                                            </div>
                                            @endif

                                            @if($theme->end_date==null)
                                            <div class='col-md-1 col-1 col-sm-1 col-lg-1'>
                                                <img src='/images/achieved.png' alt='' class="c-img">
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

            </div>
        </div>
    </div>
    @endforeach
</div>
@endforeach
<div class="popup">
            <div class="popup-close-btn"></div>
            <div class="popup-content"></div>
        </div>
        <div class="for-call-popup">
            <form action="{{url('Invite')}}" class="call-popup">
                <h3>Invite</h3>
                <br>
                <input type="hidden" name="mission_id" id="mission_id">

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

<br><br>
<br><br>
<hr>
<x-footer></x-footer>
<br>
</div>

@endsection

@section('scripts')
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
                var mission_id = $(this).val();
                var form = $('.for-call-popup');
                p.open(form.html());
                $.ajax({
                    type:"GET",
                    url:"invite_mission/"+mission_id,
                    success:function(response){
                        console.log(response);
                        $('#mission_id').val(response.invite.mission_id);
                    }
                })
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
    
        $(document).ready(function(){
        $('#gallery img').on({
            mouseover:function(){
            $(this).css({
                'cursor':'pointer',
                'border-color':'red'
            });
        },
        mouseout:function(){
            $(this).css({
                'cursor':'default',
                'border-color':'gray'
            });
        },
        click:function(){
            var imgUrl=$(this).attr('src');
            console.log(imgUrl);
            $('.vol-main-img').fadeOut(400,function(){
                $(this).attr('src',imgUrl);
            }).fadeIn(400);
        }
        });
    });
</script>
@endsection