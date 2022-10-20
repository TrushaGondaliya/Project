<x-header></x-header>

<?php session_start() ?>

<link rel="stylesheet" href="{{url('css/index.css')}}">
</head>
<body>
    <div class="body-1">
        
  <section>
    <div class="container-fluid">
      <div class="row" style="margin-left:200px; margin-right:200px;">
       
      @foreach($missions as $mission)
          <div class="col-lg-4 col-mb-4" style="margin-top:20px ;">
            <div class="card" style="width: 100%;height:100%;">
              <div class="abc">
                <img src="images/{{$mission->image}}" class="img-fluid" alt="...">
                <div class='d-flex align-items-center third-txt p-2' >
                <a href="">
                  <img src="images/user.png" class='img-fluid ' style='height:16px; color:white'>
                  </a>
                </div>
                <div class="d-flex align-items-center second-txt p-2">
                <a href="">
                  <img src="images/heart.png" alt='' class='img-fluid' style='height:16px'>
                </a>
                </div>
                <a href="">
                <div class="d-flex align-items-center first-txt" >
                  <img src="images/pin.png"  class='img-fluid pr-2' style='height:16px'>
                  <span>Location</span>
                  </a>
                </div>
               <div class="d-flex four-txt justify-content-center">
                <div class="theme">{{$mission->theme}}</div>

               </div>
              </div>
              <div class="card-body" style="padding-left:10px ; padding-top:30px;">
              
                <h5>{{$mission->title}}</h5>

                <p class="card-text" style="color:black;">{{$mission->discription}}</p>
                <h6 class="card-text" style="color:black;">{{$mission->organization}}</h6>
                <ul class="list-unstyled d-flex justify-content-center mb-0">
                  <li>
                    <img src="images/star-empty.png" alt="">
                  </li>
                  <li>
                    <img src="images/star-empty.png" alt="">
                  </li>
                  <li>
                    <img src="images/star-empty.png" alt="">

                  </li>
                  <li>
                    <img src="images/star-empty.png" alt="">
                  </li>
                  <li>
                    <img src="images/star-empty.png" alt="">

                  </li>
                </ul>
                <div>
                  <ul class="list-unstyled d-flex justify-content mb-0">
                    <li>

                      <img src="images/Seats-left.png" alt="">
                    </li>
                    <li>
                      <ul>
                        286
                      </ul>
                      <ul>
                        seat left
                      </ul>
                    </li>
                    <li>
                      <img src="images/mission.png" alt="">
                    </li>
                    <li>
                      <ul>
                        <div id="result"></div>
                      </ul>
                      <ul>
                        <div id="text"></div>
                      </ul>
                    </li>
                    <div>

                    </div>
                  </ul>
                  <hr style="width: 100%;">
                  <div class="text-center">
                    <input type="submit" value="View Details->" style="width: 150px;" name="login" class="btn btn-primary">
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          @endforeach
  
      </div>
  
    </div>


  </section>