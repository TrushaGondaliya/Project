
<x-header></x-header>


<link rel="stylesheet" href="{{url('css/index.css')}}">
</head>

<body>
    <div class="body-1">

        <!-- top navbar -->

        <x-top-nav></x-top-nav>


        <!-- card -->
        <section>
        
            <div class="container-fluid">
            @if($errors->any())
                            <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                            <div>{{$error}}</div>
                            @endforeach
                            </div>
                           
                            @endif
                        
                <div class="row abc">
                    @foreach($missions as $mission)
                   
                   
                    <div class="col-lg-4  col-sm-4 col-md-4" style="margin-top:20px ;">
                        <div class="card-box" style="width: 100%;height:100%;">
                            <div class="card-image">
                    @foreach($mission->media as $item)

                                <img src="/images/{{$item->media_name}}" class="img" style="height: 250px;width:100%" alt="...">
                                @endforeach
                                <div class='d-flex align-items-center third-txt p-2'>
                                    <a href="">
                                        <img src="/images/user.png" class='img-fluid img-card'>
                                    </a>
                                </div>
                                <div class="d-flex align-items-center second-txt p-2">
                                    <a href="{{url('favourite/'.$mission->mission_id)}}"> 
                                        <img src="/images/heart.png" alt=''  class='img-fluid img-card-h'>
    
                                    </a>
                                </div>
                                <a href="">
                                    <div class="d-flex align-items-center first-txt">
                                        <img src="/images/pin.png" class='img-fluid pr-2 ' style='height:22px;margin:5px'>
                                        <span>{{($mission->city->name)}}</span>
                                </a>
                            </div>

                            <div class="d-flex four-txt justify-content-center">
                                <div class="theme">{{$mission->theme->title}}</div>
                            </div>

                        </div>
                        
                        <div class="card-body" style=" padding-top:30px;">
                            <div class="container card-div-1">
                                <h5 style="font-size: 26px;">{{$mission->title}}</h5>
                                <p class="card-text" style="color:black;">{{$mission->discription}}</p>

                                <div class="row">
                                    <div class="col-md-7 col-lg-7 col-7">
                                        <h6 class="card-text" style="color:black;font-size:16px">{{$mission->organization_name}}</h6>
                                    </div>
                                    <div class="col-md-5 col-lg-5 col-5">
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
                            <br>


                            <div class='d-flex align-items-center'>
                                <hr class='flex-grow-1' />
                                <div class='goal'>objective of the goal mission</div>
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
                                                            <div class="seat-left"> <span class="c-text-style">{{$mission->seat_left}} </span> Seats-left </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='col-md-6 col-sm-6 col-6 col-lg-6' style='color:black;'>
                                                    <div class='row'>
                                                        @if($mission->end_date!=0)
                                                        <div class='col-md-1 col-1 col-sm-1 col-lg-1'>
                                                            <img src='/images/deadline.png' alt='' class="c-img">
                                                        </div>
                                                        <div class='col-md-9 col-9 col-sm-9 col-lg-9'>

                                                            <div class="c-text"> <span class="c-text-style">{{$mission->end_date}} </span>Deadline </div>

                                                        </div>
                                                        @endif

                                                        @if($mission->end_date==0)
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
                            <div class="d-flex align-items-center justify-content-center">
                                @if($mission->end_date==null)
                                <div class='card-button'>View Detais
                                    <img src='/images/right-arrow.png' alt='' class='pl-3'>
                                </div>
                                @endif
                                @if($mission->end_date!=null)
                                <div class='card-button'>Apply
                                    <img src='/images/right-arrow.png' alt='' class='pl-3'>
                                </div>
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
                <a class="page-link" href="{{url('home?page=1')}}" aria-label="prevoius">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="{{url()->previous()}}" aria-label="prevoius">
                    <span aria-hidden="true">&lsaquo;</span>
                </a>
            </li>
            @for($i=1;$i<=$max_count;$i++)
            <li class="page-item"><a class="page-link" href="{{url('home?page='.$i)}}">{{$i}}</a> </li>
            @endfor
          
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&rsaquo;</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="{{url('home?page='.$max_count)}}" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </div>

    @if(Session('message'))
                            <!-- <div class="alert alert-success">{{Session('message')}}</div> -->
                            <script>
                                var msg='{{Session::get("message")}}';
                                var exist='{{Session::has("message")}}';
                               if(exist){
                                alert(msg);
                               }
                                </script>
                            @endif

</body>    
    <br>

   
    <hr>
    <x-footer></x-footer>
    <br>
   
  