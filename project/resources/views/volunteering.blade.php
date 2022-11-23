<x-header></x-header>


<?php session_start() ?>

<link rel="stylesheet" href="{{url('css/index.css')}}">
</head>

<body>
    <div class="body-1">

        <!-- top navbar -->

        <x-top-nav></x-top-nav>

        <hr style="margin:0">



        <!-- Volunteering mission listing -->

        <section>

            <div class="vol">
                <div class="row  col-sm-12  col-lg-12">
                    <div class="column  col-sm-6  col-lg-6" style="padding-left: 10px;">
                        <img src="images/CSR-initiative-stands-for-Coffee--and-Farmer-Equity-4.png" class="vol-main-img" alt="">
                        <div class="row ">
                            <div class="column col-md-3 col-3 stories">
                                <div class="parent">
                                    <div id="opacity_div">
                                        <img src="images/Grow-Trees-On-the-path-to-environment-sustainability-1.png" class="story-img" alt="">
                                    </div>
                                    <div class="half-fade-1">
                                        <img src="images/left1.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="column col-md-3 col-3 col-sm-3 col-lg-3 stories" style="padding-left: 0;">
                                <img src="images/CSR-initiative-stands-for-Coffee--and-Farmer-Equity.png" class="story-img" alt="">
                            </div>
                            <div class="column col-md-3 col-3 col-sm-3 col-lg-3 stories" style="padding-left: 0;">
                                <img src="images/img1.png" class="story-img " style="padding-left: 0;" alt="">
                            </div>

                            <div class="column col-md-3 col-3 col-sm-3 col-lg-3 stories" style="padding-left: 0;padding-right:5px;">
                                <div class="parent">
                                    <div id="opacity_div">
                                        <img src="images/img11.png" class="story-img " alt="">
                                    </div>
                                    <div class="half-fade">
                                        <img src="images/right-arrow2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div><br><br>
                    </div>

                    <div class="column col-lg-6 col-md-6">
                        <div class="container">
                            <div class=" vol-heading"> CSR initiative stands for Coffee &Farmer Equity</div><br>
                            <div class="vol-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            </div><br>
                            <div class='d-flex align-items-center'>
                                <hr class='flex-grow-1' />
                                <div class='goal'>Plant 10,000 Trees</div>
                                <hr class='flex-grow-1' />
                            </div><br>

                            <div class="row col-md-12 col-sm-12  col-lg-12 col-12">
                                <div class="column col-md-6 col-sm-6  col-lg-6 col-6">
                                    <div class='row vol-abc'>
                                        <div class='col-md-1 col-sm-1  col-lg-1 col-1'>
                                            <img src='images/Seats-left.png' alt='' style='height:30px'>
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
                                            <img src='images/achieved.png' alt='' style='height:30px'>
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
                                    <button class="btn1">
                                        <div class="row">
                                            <div class="col-md-2 col-2 col-sm-2  col-lg-2"></div>
                                            <div class="col-sm-1 col-1  col-lg-1">
                                                <img src="images/heart1.png" style="height: 20px;width:23px" alt="">
                                            </div>
                                            <div class="col-lg-7 col-7 col-sm-7">
                                                <span class="vol-fav">Add to Favourite</span>
                                            </div>
                                        </div>
                                    </button>
                                </div>

                                <div class="column  col-lg-6 ">
                                    <button class="btn1">
                                        <div class="row">
                                            <div class="col-1 col-lg-1 "></div>
                                            <div class=" col-sm-1 col-1 col-md-1 col-lg-1 ">
                                                <img src="images/add1.png" style="height: 22px;width:22px" alt="">
                                            </div>
                                            <div class="col-sm-9 col-lg-9 col-9 col-md-10">
                                                <span class="vol-fav-1">Recommend to a co-worker</span>
                                            </div>
                                        </div>
                                    </button>
                                </div>

                            </div>
                            <br>

                            <div class='d-flex align-items-center'>
                                <hr class='flex-grow-1' />
                                @for($i=0;$i<5;$i++) 
                                <img src="images/star-empty.png" class="vol-star-1" alt="">
                                    @endfor
                                    <hr class='flex-grow-1' />
                            </div><br>


                            <br>

                            <div class="row col-md-12 col-12 col-sm-12 col-lg-12">
                                <div class="column col-md-6  col-sm-6 col-6 col-lg-6 col-xl-3">
                                    <div class="pin">
                                        <img src="images/pin1.png" style="padding-bottom: 10px;" alt=""><br><br>
                                        <span class="span-main"><span class="span-text"> city</span> london</span>
                                    </div>

                                </div>

                                <div class="column col-md-6 col-6 col-sm-6 col-lg-6 col-xl-3">
                                    <div class="pin"><img src="images/web.png" style="padding-bottom: 10px;" alt=""><br><br>
                                        <span class="span-main"><span class="span-text"> Theme</span> Environment</span>
                                    </div>

                                </div>
                                <div class="column col-md-6 col-6 col-lg-6 col-xl-3">
                                    <div class="pin"><img src="images/calender.png" style="padding-bottom: 10px;" alt=""><br>
                                        <span class="span-main"><span class="span-text"> Date</span> Ongoing Oppertunity</span>
                                    </div>

                                </div>
                                <div class="column col-md-6 col-6 col-lg-6 col-xl-3">
                                    <div class="pin"><img src="images/organization.png" style="padding-bottom: 10px;" alt=""><br>
                                        <span class="span-main"><span class="span-text"> Organization</span> CSC Network</span>
                                    </div>

                                </div>
                            </div><br>
                            <div class='vol-button'>Apply Now
                                <img src='images/right-arrow.png' alt='' class='pl-3'>
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
    <span class="vol-intro">Intoduction</span><br><br>
                                    <span class="Lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit-sed-do">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        <br><br>
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        <br><br>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </span>
                                    <br><br>

                                    <span class="vol-intro">Challange</span><br><br>
                                    <span class="Lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit-sed-do">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        <br><br>
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        <br><br>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </span>
                                    <br><br>

                                    <span class="vol-intro">Documents</span><br><br>

                                    <div class="row col-lg-12 ">
                                        <div class="column col-lg-6 col-xl-4 col-md-4">
                                            <button class="btn1">
                                                <div class="row">
                                                    <div class="col-lg-1 col-1"></div>
                                                    <div class="col-lg-1 col-md-1 col-1">
                                                        <img src="images/doc.png" style="height: 24px;width:21px" alt="">
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-6">
                                                        <span style="font-size: 15px;color:#454545;">at_vero_eos_accusamus.doc</span>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>

                                        <div class="column col-lg-6 col-xl-4 col-md-4">
                                            <button class="btn1">
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-2 col-3"></div>
                                                    <div class="col-lg-1 col-md-1 col-1">
                                                        <img src="images/doc.png" style="height: 24px;width:21px" alt="">
                                                    </div>
                                                    <div class="col-lg-7 col-md-7 col-5">
                                                        <span style="font-size: 15px;color:#454545">lorem-ipsum.pdf</span>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>

                                        <div class="column col-lg-6 col-xl-4 col-md-4">
                                            <button class="btn1">
                                                <div class="row">
                                                    <div class="col-lg-1 col-md-1 col-3"></div>
                                                    <div class="col-lg-1 col-md-1 col-1">
                                                        <img src="images/doc.png" style="height: 24px;width:21px" alt="">
                                                    </div>
                                                    <div class="col-lg-7 col-md-7 col-5">
                                                        <span style="font-size: 15px;color:#454545">important_doc.xls</span>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>

                                    </div>
    </div>
    <div id="organization" class="container tab-pane fade"><br>
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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
                                                Cool, Easy going,Math,Computer

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                Days
                                            </td>
                                            <td>
                                                Weekends only
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Rating
                                            </td>
                                            <td>
                                                @for($i=0;$i<5;$i++) <img src="images/selected-star.png" style="width: 26px;" alt="">
                                                    @endfor
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
                                            <td>
                                                <img src="images/volunteer1.png" class="recent-vol-img" alt="">
                                                <div class="text-2">Andrew johson</div>
                                            </td>
                                            <td>
                                                <img src="images/volunteer2.png" class="recent-vol-img" alt="">
                                                <div class="text-2">Charis Vigue</div>
                                            </td>
                                            <td>
                                                <img src="images/volunteer3.png" class="recent-vol-img" alt="">
                                                <div class="text-2">Kachyn Roherts</div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img src="images/volunteer4.png" class="recent-vol-img" alt="">
                                                <div class="text-2">Estella Fawles</div>
                                            </td>
                                            <td>
                                                <img src="images/volunteer5.png" class="recent-vol-img" alt="">
                                                <div class="text-2">Rase Lewis</div>
                                            </td>
                                            <td>
                                                <img src="images/volunteer6.png" class="recent-vol-img" alt="">
                                                <div class="text-2">Raymond Pabon</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="images/volunteer7.png" class="recent-vol-img" alt="">
                                                <div class="text-2">Travin Steen</div>
                                            </td>
                                            <td>
                                                <img src="images/volunteer8.png" class="recent-vol-img" alt="">
                                                <div class="text-2">Sarah Santillan</div>
                                            </td>
                                            <td>
                                                <img src="images/volunteer9.png" class="recent-vol-img" alt="">
                                                <div class="text-2">Linda Richards</div>

                                            </td>
                                        </tr>
                                    </table>
                                    <div class="row vol-line">
                                        <div class="column col-2 col-lg-2 col-md-2 vol-1">
                                            <img src="images/left.png">
                                        </div>
                                        <div class="column col-9 col-lg-9 col-md-9 vol-2">
                                            <span>1-8 of 25 recent volunteers</span>
                                        </div>
                                        <div class="column col-1 col-lg-1 col-md-1 vol-3">
                                            <img src="images/right-arrow1.png">
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

        <section>
            <div class="vol">
                <span class="Related-Mission">Related Mission</span><br><br>
                <div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="card-box" style="width: 100%;height:100%;">
                                <div class="card-image">
                                    <img src="images/CSR-initiative-stands-for-Coffee--and-Farmer-Equity.png" class="img" style="height: auto;width:100%" alt="...">
                                    <div class='d-flex align-items-center third-txt p-2'>
                                        <a href="">
                                            <img src="images/user.png" class='img-fluid img-card'>
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center second-txt p-2">
                                        <a href="">
                                            <img src="images/heart.png" alt='' class='img-fluid img-card-h'>
                                        </a>
                                    </div>
                                    <a href="">
                                        <div class="d-flex align-items-center first-txt">
                                            <img src="images/pin.png" class='img-fluid pr-2 ' style='height:22px;margin:5px'>
                                            <span>London</span>
                                    </a>
                                </div>
                                <div class="d-flex four-txt justify-content-center">
                                    <div class="theme">Environment</div>
                                </div>
                            </div>
                            <div class="card-body" style="padding-left:10px ; padding-top:30px;">
                                <h5 style="font-size:26px ">CSR initiative stands for Coffee & Farmer Equity</h5>
                                <p class="card-text" style="color:black;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error! </p>
                                <div class="row">

                                    <div class="col-md-6 col-lg-6 col-sm-6 col-6">
                                        <h6 class="card-text" style="color:black;">CSE Netword</h6>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-6">
                                        <div class="rating-css">
                                            <form method="post" name="product_rating">
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



                                <div class='d-flex align-items-center'>
                                    <hr class='flex-grow-1' />
                                    <div class='goal'>Ongoing Opportunity</div>
                                    <hr class='flex-grow-1' />
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-sm-12">
                                            <div class="card-body">


                                                <div class='row'>
                                                    <div class='col-md-1 col-lg-1 col-sm-1'>
                                                        <img src='images/Already-volunteered.png' alt='' style='height:20px'>
                                                    </div>
                                                    <div class='col-md-9 col-9 col-sm-9 col-lg-9'>
                                                        <div class="already-vol"> <span class="c-text-style">250</span><br>Already Volunteered</div>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                    </div>
                                    <hr style="width: 100%;">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class='card-button'>Apply
                                            <img src='images/right-arrow.png' alt='' class='pl-3'>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- another card-2 -->
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="card-box" style="width: 100%;height:100%;">
                            <div class="card-image">
                                <img src="images/Animal-welfare-&-save-birds-campaign.png" class="img" style="height: auto;width:100%" alt="...">
                                <div class='d-flex align-items-center third-txt p-2'>
                                    <a href="">
                                        <img src="images/user.png" class='img-fluid img-card'>
                                    </a>
                                </div>
                                <div class="d-flex align-items-center second-txt p-2">
                                    <a href="">
                                        <img src="images/heart.png" alt='' class='img-fluid img-card-h'>
                                    </a>
                                </div>
                                <a href="">
                                    <div class="d-flex align-items-center first-txt">
                                        <img src="images/pin.png" class='img-fluid pr-2 ' style='height:22px;margin:5px'>
                                        <span>Captown</span>
                                </a>
                            </div>
                            <div class="d-flex four-txt justify-content-center">
                                <div class="theme">Environment</div>
                            </div>
                        </div>
                        <div class="card-body" style="padding-left:10px ; padding-top:30px;">
                            <h5 style="font-size:26px">Animal Welfare Life & save bird campaign</h5>
                            <p class="card-text" style="color:black;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error! </p>
                            <div class="row">

                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <h6 class="card-text" style="color:black;">JP Foundation</h6>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="rating-css">
                                        <form method="post" name="product_rating">
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



                            <div class='d-flex align-items-center'>
                                <hr class='flex-grow-1' />
                                <div class='goal'>Plant 10,000 Trees</div>
                                <hr class='flex-grow-1' />
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="card-body">
                                            <div class='row'>
                                                <div class='col-lg-4 col-md-4 col-sm-4 col-4'>
                                                    <div class='row'>
                                                        <div class='col-lg-1 col-md-1 col-sm-1'>
                                                            <img src='images/Seats-left.png' alt='' style='height:20px'>
                                                        </div>
                                                        <div class='col-md-9 col-9 col-sm-9 col-lg-9'>
                                                            <div class="seat-left"> <span class="c-text-style">250</span> Seats-left </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='col-lg-8 col-md-8 col-sm-8 col-8' style='color:black;'>
                                                    <div class='row'>

                                                        <div class='col-lg-1 col-md-1 col-sm-1 col-9'>
                                                            <img src='images/achieved.png' alt='' style='height:20px'>
                                                        </div>
                                                        <div class='col-lg-9 col-9 col-md-9 col-sm-9'>
                                                            <div class="achieved-main-card">
                                                                <div class="achieved-card"></div>
                                                            </div>
                                                            <h6 style='color:gray;font-size:14px; margin-left: 20px;'>8000 achieved</h6>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                </div>
                                <hr style="width: 100%;">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class='card-button'>Apply
                                        <img src='images/right-arrow.png' alt='' class='pl-3'>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- another card-3 -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card-box" style="width: 100%;height:100%;">
                        <div class="card-image">
                            <img src="images/Plantation-and-Afforestation-programme.png" class="img" style="height: auto;width:100%" alt="...">
                            <div class='d-flex align-items-center third-txt p-2'>
                                <a href="">
                                    <img src="images/user.png" class='img-fluid img-card'>
                                </a>
                            </div>
                            <div class="d-flex align-items-center second-txt p-2">
                                <a href="">
                                    <img src="images/heart.png" alt='' class='img-fluid img-card-h'>
                                </a>
                            </div>
                            <a href="">
                                <div class="d-flex align-items-center first-txt">
                                    <img src="images/pin.png" class='img-fluid pr-2 ' style='height:22px;margin:5px'>
                                    <span>Paris</span>
                            </a>
                        </div>
                        <div class="d-flex four-txt justify-content-center">
                            <div class="theme">Environment</div>
                        </div>
                    </div>
                    <div class="card-body" style="padding-left:10px ; padding-top:30px;">
                        <h5 style="font-size:26px">Plantation and Afforestation programme</h5>
                        <p class="card-text" style="color:black;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error! </p>
                        <div class="row">

                            <div class="col-md-6 col-6 col-lg-6 col-sm-6">
                                <h6 class="card-text" style="color:black;">Amaze Doctors</h6>
                            </div>
                            <div class="col-md-6 col-6 col-lg-6 col-sm-6">
                                <div class="rating-css">
                                    <form method="post" name="product_rating">
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



                        <div class='d-flex align-items-center'>
                            <hr class='flex-grow-1' />
                            <div class='goal'>Plant 10,000 Trees</div>
                            <hr class='flex-grow-1' />
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-md-12 col-12 col-lg-12 col-sm-12">
                                    <div class="card-body">
                                        <div class='row'>
                                            <div class='col-md-6 col-6 col-lg-6 col-sm-6' style='color:black;'>
                                                <div class='row'>
                                                    <div class='col-md-1 col-1 col-lg-1 col-sm-1'>
                                                        <img src='images/achieved.png' alt='' style='height:20px'>
                                                    </div>
                                                    <div class='col-md-9 col-9 col-lg-9 col-sm-9'>
                                                        <div class="achieved-main-card">
                                                            <div class="achieved-card"></div>
                                                        </div>
                                                        <h6 style='color:gray;font-size:14px; margin-left: 20px;'>8000 achieved</h6>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                            </div>
                            <hr style="width: 100%;">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class='card-button'>Apply
                                    <img src='images/right-arrow.png' alt='' class='pl-3'>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <br><br>
        <br><br>
        <hr>
        <x-footer></x-footer>
        <br>
    </div>