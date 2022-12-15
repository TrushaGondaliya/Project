@extends('layouts.app')

@section('content')
    <div class="body-1">

        
        <br>
<br>


        <!-- Volunteering mission listing -->

        <section>
            <div class="vol">
           
                @foreach($stories as $story)
                <div class="row col-md-12 col-sm-12  col-lg-12">
                    <div class="column col-md-6 story-detail-img">
                    @php
                    $media=App\Models\Storymedia::where('story_id',$story->story_id)->first();
                    @endphp
                                @if(is_null($media))
                                <img src="/images/image2.png" class="story-main-img" >
                                @else
                                <img src="/images/{{$media->path}}" class="story-main-img"  alt="...">
                                @endif
                       
                        <div class="row ">
                            <div class="column col-md-3 col-3 stories">
                                <div class="parent">
                                    <div id="opacity_div">
                                        <img src="/images/Grow-Trees-On-the-path-to-environment-sustainability-1.png" class="story-img" alt="">
                                    </div>
                                    <div class="half-fade-1">
                                        <img src="/images/left1.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="column col-md-3 col-3 col-sm-3 col-lg-3 stories" style="padding-left: 0;">
                                <img src="/images/CSR-initiative-stands-for-Coffee--and-Farmer-Equity.png" class="story-img" alt="">
                            </div>
                            <div class="column col-md-3 col-3 col-sm-3 col-lg-3 stories" style="padding-left: 0;">
                                <img src="/images/img1.png" class="story-img " style="padding-left: 0;" alt="">
                            </div>

                            <div class="column col-md-3 col-3 col-sm-3 col-lg-3 stories" style="padding-left: 0;padding-right:5px;">
                                <div class="parent">
                                    <div id="opacity_div">
                                        <img src="/images/img11.png" class="story-img " alt="">
                                    </div>
                                    <div class="half-fade">
                                        <img src="/images/right-arrow2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column col-md-6">
                        <div class="story">
                            <div class="row col-md-12">
                                <div class="column col-md-8 col-8">
                                    <img class="story-vol-img" src="{{asset('/uploads/user/'.$story->user->avtar)}}" alt="">
                                    <div class="story-text-2">{{Auth::user()->full_name}}</div>

                                </div>
                                <div class="column col-md-4 col-4">
                                    <div class="story-views">
                                        <img src="/images/eye.png" alt="">
                                        <span>12,000 Views</span>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <span class="story-detail-text">{!!$story->description!!}</span>
                            <br><br>
                            <br>
                            <div class="row col-md-12 col-sm-12">
                                <div class="column col-md-12 col-lg-7 col-sm-12">
                                    <button class="story-detail-button">
                                        <div class="row">
                                            <div class=" col-sm-1 col-1 col-lg-1"></div>
                                            <div class="col-md-1 col-sm-1 col-1 col-lg-1">
                                                <img src="/images/add1.png" style="height: 22px;width:22px" alt="">
                                            </div>
                                            <div class="col-md-10 col-sm-9 col-9 col-lg-9">
                                                <span class="story-detail-button-text">Recommend to a co-worker</span>
                                            </div>
                                        </div>
                                    </button>
                                </div>
                                <div class="column col-md-12 col-lg-5 col-sm-12">
                                    <div class='story-detail-button1'>
                                        <span class="story-detail-button-text" > Open Mission</span>
                                        <img src='/images/right-arrow.png' alt='' class='pt-9'>
                                    </div>
                                </div>
                            </div>
                            <br>

                        </div>
                    </div>

                </div> 
                @endforeach 

            </div>
            <br><br>
            <div class="vol">
                <div class=" vol-mission">

                    <ul class="nav nav-tabs-2">
                        <li class="nav-item"> <a class="nav-link nav-detail" href="#">Grow Trees</a> </li>
                        <li class="nav-item"><a class="nav-link" href="#">-On the path to environment sustainbility</a></li>

                    </ul>


                </div>
                <br>

                <span class="stories-detail-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    <br><br>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    <br><br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </span>

                <br><br>
                <span class="stories-detail-test-1">
                    We use these technologies for a number of purposes, such as:
                </span>
                <ul>
                    <span class="stories-detail-li-text">
                        <li>
                            <span>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain.</span>
                        </li>
                        <li> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</li>
                        <span>
                            excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.
                        </span>
                        <li> On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized</li>
                        <li> But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain.</li>
                        <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</li>
                    </span>
                </ul><br>

                <span class="stories-detail-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </span>
            </div>
    </div>
    <br>
    </section>
    <hr>
    <x-footer></x-footer>
    <br>
    </div>
    @endsection