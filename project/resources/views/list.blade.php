@extends('layouts.app')

@section('content')


    <div class="body-1">


   
        <hr style="height:2px;border-width:1px;color:gray;background-color:rgba(0, 0, 0, 0.05);margin-top:0px">



        <!-- Explore vala nav -->

        <div class="explore">
            <div class="left-explore common-font">
                <span class="explore-light">Explore </span>{{count($missions)}} missions
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
            <div class="container-fluid">
                <div class="row abc">
                    @foreach($missions as $mission)
                   
                    @php
                    $media=App\Models\Media::where('mission_id',$mission->mission_id)->first();
                    @endphp
                    <div class="col-md-12" style="margin-top:20px ;">
                        <div class="card-box" style="width: 100%;height:100%;">
                            <div class="column1 col-md-3">
                            <div class="card-image">
                            @if(is_null($media))
                                <img src="/images/image2.png" style="height: 250px;width:100%">
                                @else
                                <img src="/images/{{$media->media_name}}" class="img" style="height: 250px;width:100%" alt="...">
                                @endif
                                <div class='d-flex align-items-center third-txt p-2'>
                                    <a href="">
                                        <img src="images/user.png" class='img-fluid img-card'>
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
                                        <span>{{$mission->city->name}}</span>
                                </a>
                            </div>

                                <div class="d-flex four-txt justify-content-center">
                                    <div class="theme">{{$mission->theme->title}}</div>
                                </div>
                            </div>

                        </div>
                        <div class="column2 col-md-6">
                            <div class="card-body " style="padding-left:10px ; padding-top:30px;">
                                <h5>{{$mission->title}}</h5>
                                <p class="card-text" style="color:black;">{{$mission->description}}</p>
                                <div class="column2-2 col-md-3">
                                    <div class='d-flex align-items-center'>
                                        <hr class='flex-grow-1' />
                                        <div class='goal'>ongoing oppertunity</div>
                                        <hr class='flex-grow-1' />
                                    </div>
                                    <div class='row'>
                                        <div class='col-md-6'>
                                            <div class='row'>
                                                <div class='col-md-1'>
                                                    <img src='images/Seats-left.png' alt='' style='height:20px'>
                                                </div>
                                                <div class='col-md-9'>
                                                    <h4 style="color: grey;">{{$mission->seat_left}}</h4>
                                                    <h6 style='color:gray;font-size:10px'>Seats-left</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-md-6' style='color:black;'>
                                            <div class='row'>
                                                @if($mission->Deadline!=null)
                                                <div class='col-md-1'>
                                                    <img src='images/deadline.png' alt='' style='height:20px'>
                                                </div>
                                                <div class='col-md-9'>

                                                    <h6 style='color:gray;font-size:11px'>{{$mission->Deadline}}</h6>
                                                    <h6 style='color:gray;font-size:10px'> Deadline</h6>
                                                </div>
                                                @endif

                                                @if($mission->Deadline==null)
                                                <div class='col-md-1'>
                                                    <img src='images/achieved.png' alt='' style='height:20px'>
                                                </div>
                                                <div class='col-md-9'>
                                                    <hr style="height: 5px;">
                                                    <h6 style='color:gray;font-size:10px'>achieved</h6>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column2-1 col-md-">
                                    <div class='row'>

                                        <div class='col-md-7'>
                                            <h6 class="card-text" style="color:black;">{{$mission->organization}}</h6><br>
                                        </div>
                                        <div class='col-md-5'>
                                            <div class="rating-css">
                                                <form action="{{url('add-rating')}}" method="post" name="product_rating">
                                                    @csrf
                                                    <div class="star-icon">
                                                        <label for="rating1" class="fa fa-star checked"></label>
                                                        <label for="rating2" class="fa fa-star checked"></label>
                                                        <label for="rating3" class="fa fa-star checked"></label>
                                                        <label for="rating4" class="fa fa-star"></label>
                                                        <label for="rating5" class="fa fa-star"></label>
                                                    </div>


                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex ">
                                    @if($mission->Deadline==null)
                                    <div class='card-button'>View Detais
                                        <img src='images/right-arrow.png' alt='' class='pl-3'>
                                    </div>
                                    @endif
                                    @if($mission->Deadline!=null)
                                    <div class='card-button'>Apply
                                        <img src='images/right-arrow.png' alt='' class='pl-3'>
                                    </div>
                                    @endif
                                </div>



                            </div>
                        </div>


                    </div>
                </div>
                @endforeach
            </div>
    </div>
    </section>
    <hr>
    <x-footer></x-footer>
    <br>
    @endsection