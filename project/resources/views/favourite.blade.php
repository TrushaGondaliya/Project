<x-header></x-header>

<?php session_start() ?>

<link rel="stylesheet" href="{{url('css/index.css')}}">
</head>



<body>
  <!-- this is top navbar -->
  <div class="topnav nav-tabs">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Explore</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Top Themes</a></li>
      <li><a class="dropdown-item" href="#">Most Ranked</a></li>
      <li><a class="dropdown-item" href="#">Top Favourite</a></li>
      <li><a class="dropdown-item" href="#">Random</a></li>
    </ul>
    <a class="nav-link" href="#">Stories</a>

    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Policy</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Top Themes</a></li>
      <li><a class="dropdown-item" href="#">Most Ranked</a></li>
      <li><a class="dropdown-item" href="#">Top Favourite</a></li>
      <li><a class="dropdown-item" href="#">Random</a></li>
    </ul>
    <div class="topnav-right">
      <a href="#" class="navbar-brand">
        <img src="images/bell.png" alt="">
      </a>
      

      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">User</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Dashboard</a></li>
        <li><a class="dropdown-item" href="#">My Account</a></li>
        <li><a class="dropdown-item" href="{{url('logout')}}">LogOut</a></li>
      </ul>
    </div>
  </div>

  <!-- this is another navbar -->

  <div class="topnav nav-tabs">
    <a href="#" class="navbar-brand ">
      <form action="{{url('home/{search}')}}" method="get">
    
        <img src="{{url('images/search.png')}}">
        <input type="search" name="search" class="search" style="border: none;" placeholder="Search mission" value="" id="">
        
      </form>
    </a>
    <div class="topnav-right">

      <a class="nav-link dropdown-toggle shadow1" href="#" role="button" data-bs-toggle="dropdown">United states</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item " href="#">Dashboard</a></li>
        <li><a class="dropdown-item " href="#">My Account</a></li>
        <li><a class="dropdown-item" href="#">LogOut</a></li>
      </ul>
      <a class="nav-link dropdown-toggle shadow1" href="#" role="button" data-bs-toggle="dropdown">City</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Dashboard</a></li>
        <li><a class="dropdown-item" href="#">My Account</a></li>
        <li><a class="dropdown-item" href="#">LogOut</a></li>
      </ul><a class="nav-link dropdown-toggle shadow1" href="#" role="button" data-bs-toggle="dropdown">Theme</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Dashboard</a></li>
        <li><a class="dropdown-item" href="#">My Account</a></li>
        <li><a class="dropdown-item" href="#">LogOut</a></li>
      </ul><a class="nav-link dropdown-toggle shadow1" href="#" role="button" data-bs-toggle="dropdown">Skills</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Dashboard</a></li>
        <li><a class="dropdown-item" href="#">My Account</a></li>
        <li><a class="dropdown-item" href="#">LogOut</a></li>
      </ul>
    </div>
  </div>
  <div>
    <br>
  </div>
  <div class="topnav">
    <div class="navbar-header">
      <a href="" class="navbar-brand">
        Explore 6 missions
      </a>
    </div>

    <div class="topnav-right">

      <a class="nav-link dropdown-toggle" style="border: 1px solid grey;" href="#" role="button" data-bs-toggle="dropdown">Client</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item " href="#">Dashboard</a></li>
        <li><a class="dropdown-item " href="#">My Account</a></li>
        <li><a class="dropdown-item" href="#">LogOut</a></li>
      </ul>
      <a>
        <img id="grid" src="images/grid.png" alt="">
      </a>

      <a>
        <img id="list" src="images/list.png" alt="">
      </a>
    </div>
  </div>
  <!-- this is for diaplay missions -->
  <section>
    <div class="container-fluid">
      <div class="row" style="margin-left:200px; margin-right:200px;">
       
      @foreach($missions as $mission)
          <div class="col-lg-4 col-md-6 col-sm-12" style="margin-top:20px ;">
            <div class="card" style="width: 100%;height:100%;">
              <div>
                <img src="images/Animal-welfare-&-save-birds-campaign.png" class="card-img-top" alt="...">
                <div class="bottom" style="position: absolute;bottom: 8px;left:290px; top: 120px;">
                <a href="">
                  <img src="images/add1.png" style="background-color:black; opacity: 0.9; padding: 3px; border-radius:50%" alt="">
                  </a>
                </div>
                <div class="bottom" style="position: absolute;bottom: 8px;left:290px; top: 90px;">
                <a href="">
                  <img src="images/heart1.png" style="background-color:black; opacity: 0.9; padding: 3px; border-radius:50%" alt="">
                </a>
                </div>
                <a href="">
                <div class="bottom" style="position: absolute;left:290px; top: 10px;">
                  <img src="images/pin1.png" style="background-color:black; opacity: 0.9; padding: 3px; border-radius:50%">
                  </a>
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