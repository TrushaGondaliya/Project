<x-header></x-header>

<?php session_start() ?>

<link rel="stylesheet" href="{{url('css/index.css')}}">
</head>

<body>
    <div class="body-1">

        <!-- top navbar -->

        <x-top-nav></x-top-nav>

        <!-- second navbar -->


        <x-top-nav-2></x-top-nav-2>
        <hr style="height:2px;border-width:1px;color:gray;background-color:rgba(0, 0, 0, 0.05);margin-top:0px">

        <div class="container">
            <div class="show-mission ">
                <div class="mission  mission-text"> <span style="padding-right: 5px;"> Tree Plantation</span> <img src="images/cancel.png"> </div>
                <div class="mission mission-text"><span style="padding-right: 5px;">Canada</span> <img src="images/cancel.png"></div>
                <div class="mission mission-text"><span style="padding-right: 5px;">Tronoto </span><img src="images/cancel.png"></div>
                <div class="mission mission-text"><span style="padding-right: 5px;">Montreal</span><img src="images/cancel.png"></div>
                <div class="mission mission-text"> <span style="padding-right: 5px;">Environment</span><img src="images/cancel.png"></div>
                <div class="mission mission-text"><span style="padding-right: 5px;">Nutrition</span> <img src="images/cancel.png"></div>
                <div class="mission mission-text"><span style="padding-right: 5px;">Anthropolgy</span><img src="images/cancel.png"> </div>
                <div class="mission mission-text"><span style="padding-right: 5px;">Environmental Science</span><img src="images/cancel.png"></div>
                <div class="mission-text">Clear all</div>
            </div>
        </div>


        <!-- Explore vala nav -->

        <div class="explore">
            <div class="left-explore common-font">
                Explore <span class="explore-dark">72 missions</span>
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
                    <div class="col-md-12" style="margin-top:20px ;">
                        <div class="card-box" style="width: 100%;height:100%;">
                            <div class="column1 col-md-3">
                                <div class="card-image">

                                    <img src="images/{{$mission->image}}" class="img" style="height: 200px;width:100%" alt="...">
                                    <div class='d-flex align-items-center third-txt p-2'>
                                        <a href="">
                                            <img src="images/user.png" class='img-fluid ' style='height:16px'>
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center second-txt p-2">
                                        <a href="">
                                            <img src="images/heart.png" alt='' class='img-fluid' style='height:16px'>
                                        </a>
                                    </div>
                                    <a href="">
                                        <div class="d-flex align-items-center first-txt">
                                            <img src="images/pin.png" class='img-fluid pr-2' style='height:16px'>
                                            <span>{{$mission->city->name}}</span>
                                    </a>
                                </div>

                                <div class="d-flex four-txt justify-content-center">
                                    <div class="theme">{{$mission->theme}}</div>
                                </div>
                            </div>

                        </div>
                        <div class="column2 col-md-6">
                            <div class="card-body " style="padding-left:10px ; padding-top:30px;">
                                <h5>{{$mission->title}}</h5>
                                <p class="card-text" style="color:black;">{{$mission->discription}}</p>
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