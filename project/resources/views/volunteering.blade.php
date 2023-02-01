@extends('layouts.app')
@inject('carbon', 'Carbon\Carbon')
@section('content')
<div class="body-1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet" />

    <hr style="margin:0">
    <!-- Volunteering mission listing -->

    <section>
        <div class="vol">
            @foreach($missions as $mission)
            
            <div class="row  col-sm-12  col-lg-12">
                <div class="column  col-sm-6  col-lg-6" style="padding-left: 10px;">
                @foreach($media as $item)
                @if(($item->mission_id==$mission->mission_id))
                <img src="/images/{{$item->media_name}}" class="vol-main-img" alt="...">
                @break
                @endif
                @endforeach

                @if(($item->mission_id==$mission->mission_id)==null)
                <img src="/images/image2.png" class="vol-main-img">
                @endif
                    <div id="gallery" class="carousel slide " data-bs-ride="carousel" data-interval="3000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    @php
                                    $media=App\Models\Media::where('mission_id',$mission->mission_id)->take(4)->get();
                                    @endphp
                                    @if(count($media)==4)
                                    @foreach($media as $item)
                                    <div class="col-md-3 col-lg-3" style="padding: 0px;">
                                        <img src="/images/{{$item->media_name}}" class="story-img " alt="">
                                    </div>
                                    @endforeach
                                    @else
                                    <div class="col-md-3 col-lg-3" style="padding: 0px;">
                                        <img src="/images/banner1.jpg" class="story-img " alt="">
                                    </div>
                                    <div class="col-md-3 col-lg-3" style="padding: 0px;">
                                        <img src="/images/banner2.jpg" class="story-img " alt="">
                                    </div>
                                    <div class="col-md-3 col-lg-3" style="padding: 0px;">
                                        <img src="/images/banner3.jpg" class="story-img " alt="">
                                    </div>
                                    <div class="col-md-3 col-lg-3" style="padding: 0px;">
                                        <img src="/images/banner4.jpg" class="story-img " alt="">
                                    </div>
                                    @endif
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row">
                                    @php
                                    $media=App\Models\Media::where('mission_id',$mission->mission_id)->skip(4)->take(4)->get();
                                    @endphp
                                    @if(count($media)==4)
                                    @foreach($media as $item)
                                    <div class="col-md-3 col-lg-3" style="padding: 0px;">
                                        <img src="/images/{{$item->media_name}}" class="story-img " alt="">
                                    </div>
                                    @endforeach
                                    @else
                                    <div class="col-md-3 col-lg-3" style="padding: 0px;">
                                        <img src="/images/CSR-initiative-stands-for-Coffee--and-Farmer-Equity-1.png"
                                            class="story-img " alt="">
                                    </div>
                                    <div class="col-md-3 col-lg-3" style="padding: 0px;">
                                        <img src="/images/Education-Supplies-for-Every--Pair-of-Shoes-Sold-1.png"
                                            class="story-img " alt="">
                                    </div>
                                    <div class="col-md-3 col-lg-3" style="padding: 0px;">
                                        <img src="/images/Grow-Trees-On-the-path-to-environment-sustainability-1.png"
                                            class="story-img " alt="">
                                    </div>
                                    <div class="col-md-3 col-lg-3" style="padding: 0px;">
                                        <img src="/images/img22.png" class="story-img " alt="">
                                    </div>
                                    @endif
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
                        </div><br>

                        <div class="row col-md-12 col-sm-12  col-lg-12 col-12">
                            <div class="column col-md-6 col-sm-6  col-lg-6 col-6">
                                <div class='row vol-abc'>
                                    <div class='col-md-1 col-sm-1  col-lg-1 col-1'>
                                        <img src='/images/Seats-left.png' alt='' style='height:30px'>
                                    </div>
                                    <div class='col-md-9 col-sm-9 col-9 col-lg-9'>
                                    @php
                                                $left=App\Models\Application::where('mission_id',$mission->mission_id)->count('mission_id');
                                                @endphp
                                        <h6 style="color: grey; margin-left:20px ;">{{$mission->total_seat-$left}}</h6>
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
    
                                        @foreach($favourite as $fav)
                                        @if($fav->mission_id==$mission->mission_id)
                                        @if($fav->mission_id==$mission->mission_id &&
                                        $fav->user_id==Auth::user()->user_id)
                                        <img src="/images/favourite.jpg" style="height: 20px;width:23px" alt="">
                                        <span class="vol-fav">Already Favourite</span>
                                        @break
                                        @endif
                                        @endif
                                        @endforeach
                                        @if($fav->mission_id!=$mission->mission_id ||
                                        $fav->user_id!=Auth::user()->user_id)
                                        <img src="/images/heart1.png" style="height: 20px;width:23px" alt="">
                                        <span class="vol-fav">Add to Favourite</span>
                                        @endif
                                    </a>
                                </div>
                            </div>
                            <div class="column  col-lg-6 ">
                                <div class="btn1">
                                    <button value="{{$mission->mission_id}}" class="invite btn-invite" onClick="topFunction()">
                                        <img src="/images/add1.png" style="height: 22px;width:22px">
                                        <span class="vol-fav-1">Recommend to a co-worker</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class='d-flex align-items-center'>
                            <hr class='flex-grow-1' />

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
                                <div class="pin"><img src="/images/web.png" style="padding-bottom: 10px;"
                                        alt=""><br><br>
                                    <span class="span-main"><span class="span-text"> Theme</span><br>
                                        {{$mission->theme->title}}</span>
                                </div>
                            </div>
                            <div class="column col-md-6 col-6 col-lg-6 col-xl-3">
                                <div class="pin"><img src="/images/calender.png" style="padding-bottom: 10px;"
                                        alt=""><br>
                                        @foreach($goal as $item)
                           

                    @if(($item->mission_id==$mission->mission_id))
                    <span class="span-main"><span class="span-text"> Date</span><br>
                                        {{$item->goal_objective_text}}</span>
                    @break
                    @endif
                    @endforeach

                    @if(($item->mission_id==$mission->mission_id)==null)
                    <span class="span-main"><span class="span-text"> Date</span><br>
                                        {{$mission->start_date->format('d/m/Y')}} to
                                        {{$mission->end_date->format('d/m/Y')}}</span>
                     @endif
                                   
                                </div>
                            </div>
                            <div class="column col-md-6 col-6 col-lg-6 col-xl-3">
                                <div class="pin"><img src="/images/organization.png" style="padding-bottom: 10px;"
                                        alt=""><br>
                                    <span class="span-main"><span class="span-text"> Organization</span><br>
                                        {{$mission->organization_name}}</span>
                                </div>
                            </div>
                        </div><br>
                        @php
                        $appli=App\Models\Application::where('mission_id',$mission->mission_id)->where('user_id',Auth::user()->user_id)->first()
                        @endphp
                     
                        <a href="{{url('add-app/'.$mission->mission_id)}}">
                            @if(!$appli)
                            <div class='vol-button'>Apply Now
                                <img src='/images/right-arrow.png' alt='' class='pl-3'>
                            </div>
                            @else
                            <button type="" disabled class='vol-button' style="background:none">Apply Now
                                <img src='/images/right-arrow.png' alt='' class='pl-3'></button>
                            
                            @endif
                        </a>
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
                                        
                                        @foreach($documents as $document)
                                        @if($document->mission_id==$mission->mission_id)
                                        <div class="column col-lg-6 col-xl-4 col-md-6">
                                            <div class="btn1">
                                                <img src="/images/doc.png" style="height: 24px;width:21px" alt="">
                                                <span
                                                    style="font-size: 15px;color:#454545;">{{$document->document_name}}</span>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div id="organization" class="container tab-pane fade"><br>
                                    {!!$mission->organization_detail!!}
                                </div>
                                <div id="sponsored" class="container tab-pane fade"><br>
                                    <h3>Menu 2</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam.</p>
                                </div>
                                <div id="comments" class="container tab-pane fade"><br>
                                    <form action="{{url('comment')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="mission_id" value="{{$mission->mission_id}}">
                                        <textarea name="comment" class="vol-comment">Enter Your Comments...</textarea>
                                        <br>
                                        <button class="comment-btn">Post Comments</button>
                                    </form>

                                    <div class="container-fluid">

                                        @foreach($comments as $comment)
                                        <div class="card-box mt-4">
                                            <div class="row">
                                                <div class="col-md-2 col-lg-2 ">
                                                    <img src="{{asset('/uploads/user/'.$comment->user->avtar)}}"
                                                        class="com-img">
                                                </div>
                                                <div class="col-md-9 col-lg-9">
                                                    <div class="pt-2">{{$comment->user->full_name}}</div>
                                                    <div>{{$comment->created_at->format('l')}} ,
                                                        {{$comment->created_at}}</div>
                                                    <br>
                                                    <div class="mb-1">{{$comment->comment}}</div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
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
                                          @foreach($skills as $skill)
                                          @if($skill->mission_id==$mission->mission_id)
                                          {{$skill->skill->skill_name}},
                                          @endif
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
                                    
                                    <div class="row">
                                        @foreach($volunteers as $volunteer)
                                        @if($volunteer->mission_id==$mission->mission_id)
                                        <div class="column col-md-4 col-lg-4">

                                            <img src="{{asset('/uploads/user/'.$volunteer->user->avtar)}}"
                                                class="recent-vol-img" alt="">
                                            <div class="text-2">{{$volunteer->user->full_name}}</div>

                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
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
        $themes=App\Models\Mission::where('city_id',$mission->city_id)->limit(3)->get();
        if(count($themes)<=1) {
            $themes=App\Models\Mission::where('country_id',$mission->country_id)->limit(3)->get();
            if(count($themes)<=1){ $themes=App\Models\Mission::where('theme_id',$mission->theme_id)->limit(3)->get();
                }
                }

                @endphp
                @foreach($themes as $theme)
                <div class="col-lg-4 card-filter  col-sm-4 col-md-4" style="margin-top:20px ;">
                    <div class="card-box" style="width: 100%;height:100%;">
                        <div class="card-image">
                    

                        @foreach($media1 as $item)
                @if(($item->mission_id==$theme->mission_id))
                <img src="/images/{{$item->media_name}}" class="img" style="height: 250px;width:100%" alt="...">
                @break
                @endif
                @endforeach

                @if(($item->mission_id==$theme->mission_id)==null)
                <img src="/images/image2.png" style="height: 250px;width:100%">
                @endif
                            <div class='d-flex align-items-center third-txt p-2'>
                                <a href="">
                                    <img src="/images/user.png" class='img-fluid img-card'>
                                </a>
                            </div>
                            <div class="d-flex align-items-center second-txt p-2">
                                <a href="{{url('favourite/'.$mission->mission_id)}}">
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
                                    <img src="/images/pin.png" class='img-fluid pr-2 ' style='height:22px;margin:5px'>
                                    <span>{{($theme->city->name)}}</span>
                            </a>
                        </div>
                        <div class="d-flex four-txt justify-content-center">
                            <div class="theme">{{$theme->theme->title}}</div>
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
                    <div class="card-body" style=" padding-top:30px;">
                        <div class="container card-div-1">
                            <h5 class="card-title">{{$theme->title}}</h5>
                            <br>

                            <p class="card-text card-description" style="color:black;">{{$theme->short_description}}</p>

                            <div class="row">
                                <div class="col-md-7 col-lg-7 col-7">
                                    <h6 class="card-text" style="color:black;font-size:16px">
                                        {{$theme->organization_name}}</h6>
                                </div>
                                <div class="col-md-5 col-lg-5 col-5">
                                <form action="{{url('add-rating/'.$mission->mission_id)}}" method="POST"
                                id="form_{{$mission->mission_id}}">
                                @csrf
                                <input type="hidden" value="{{$mission->mission_id}}" name="mission_id">
                                <div class="rating-css">

                                    <div class="star-icon">
                                        @foreach($rated as $rating)
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
                        <br>
                        <div class='d-flex align-items-center'>
                            <hr class='flex-grow-1' />
                            @foreach($goal1 as $item)
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
                                                        <div class="seat-left"> 
                                                        @php
                                                $left=App\Models\Application::where('mission_id',$theme->mission_id)->count('mission_id');
                                                @endphp
                                                            <span class="c-text-style">{{$theme->total_seat-$left}} </span>
                                                            Seats-left </div>
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
                                                        <div class="c-text"> <span
                                                                class="c-text-style">{{$theme->end_date->format('d/m/Y')}}
                                                            </span> Deadline </div>
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
                    </div>
                </div>
    </div>
    @endforeach
</div>
@endforeach
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

<br><br>
<br><br>
<hr>
<x-footer></x-footer>
<br>
</div>

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
        console.log(mission_id);
        var form = $('.for-call-popup');
        p.open(form.html());
        $.ajax({
            type: "GET",
            url: "/invite_mission/" + mission_id,
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

$(document).ready(function() {
    $('#gallery img').on({
        mouseover: function() {
            $(this).css({
                'cursor': 'pointer',
                'border-color': 'red'
            });
        },
        mouseout: function() {
            $(this).css({
                'cursor': 'default',
                'border-color': 'gray'
            });
        },
        click: function() {
            var imgUrl = $(this).attr('src');
            console.log(imgUrl);
            $('.vol-main-img').fadeOut(400, function() {
                $(this).attr('src', imgUrl);
            }).fadeIn(400);
        }
    });
});
</script>
@endsection