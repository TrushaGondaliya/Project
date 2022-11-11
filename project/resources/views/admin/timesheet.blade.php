<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('css/index.css')}}">
    <link rel="stylesheet" href="{{url('css/index1.css')}}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</head>
<body>
<link rel="stylesheet" href="{{url('css/index.css')}}">

<div class="nav-container">
          
          <nav class="navbar navbar-expand-lg">
              <div class="container" style="padding:0">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                      data-bs-target="#navigation-1" aria-controls="navigation-1" aria-expanded="false"
                      aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navigation-1">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                       
                          <li class="nav-item">
                              <a class="nav-link Explore-Stories-Policy common-font" href="#">Stories</a>
                          </li>
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle Explore-Stories-Policy common-font" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Policy
                              </a>
                              <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Volunteering</a></li>
                                  <li><a class="dropdown-item" href="#">Sponsored</a></li>
                              </ul>
                          </li>

                      </ul>

                    
                      

                  </div>
              </div>
</nav>

<input type="submit" class="nav-item nav-button" value="Submit new mission" name="" id="">

          <div class="nav-item dropdown" style="display: flex;margin-left: 10px;">
              <div>
                  <img src="/images/user-img.png" alt="Avatar"
                      style="width:40px;height: 40px; border-radius:100%;object-fit:cover ;margin-right: 12px;">
              </div>
              <a class="nav-link dropdown-toggle Explore-Stories-Policy common-font" style="font-size: 15px;" href="#"
                  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Evan Donohue
                  <!-- {{Session::get('name')}} -->
                  
              </a>
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">My Profile</a></li>
                  <li><a class="dropdown-item" href="{{url('admin/timesheet')}}">Volunteering Timesheet</a></li>
                  <li><a class="dropdown-item" href="{{url('logout')}}">Logout</a></li>

                  
              </ul>
          </div>
      </div>
      <hr>
<br><br><br>
      <div class="container">

      <p class="Timesheet-heading ">Volunteering Timesheet</p>
      <br>

      <div class="row">
      <div class="col div-vol">
      <div style="float:right" class="timesheet_btn2 add-time">
      <span class="fa fa-plus"></span>
                    <input type="submit" class="timesheet_add" value="Add">
                </div>
            <p class="time-text">Volunteering Hours</p>
             
            <table class="table">
                <thead>
                    <th>Mission</th>
                    <th>Date</th>
                    <th>Hours</th>
                    <th>Minutes</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <td>Plantation and Afforestation Programme</td>
                    <td>12/3/2022</td>
                    <td>4</td>
                    <td>49</td>
                    <td><a href=""><img style="width: 14px; height:17px" src="\images\bin.png"></a>   <span class="time"><img  style="width: 14px; height:17px;cursor:pointer" src="\images\edit.jpg"></span></td>
                    
                </tbody>
            </table>
      </div>
      <div class="col div-vol">
      <div style="float:right" class="timesheet_btn2 add-goal">
      <span class="fa fa-plus"></span>
                    <input type="submit" class="timesheet_add" value="Add">
                </div>
      <p class="time-text">Volunteering Goals</p>
      <table class="table">
                <thead>
                    <th>Mission</th>
                    <th>Date</th>
                    <th>Hours</th>
                    <th>Minutes</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <td>Plantation and Afforestation Programme</td>
                    <td>12/3/2022</td>
                    <td>4</td>
                    <td>49</td>
                    <td><a><img style="width: 14px; height:17px" src="\images\bin.png"></a>   <span class="timesheet_goal"><img style="width: 14px; height:17px;cursor:pointer" src="\images\edit.jpg"></a></td>
                    
                </tbody>
            </table>
      </div>
      </div>
      </div>
</body>
</html>




        <!-- popup for edit goal user -->

<div class="goal_popup">
            <div class="popup-close-btn"></div>
            <div class="popup_goal-content"></div>
        </div>
        <div class="for-call-popup">
            <form action="" class="call-popup">
                <h3>Please Input below volunteering Goal</h3>
                 
                <label for="mission">Mission</label>
                <div><select class="story-input" aria-placeholder="Select your Mission" id="">
                            <option value="" class="story-input">Plantation and Afforestation Programme</option>
                            <option value="">mission1</option>
                            <option value="">mission2</option>
                            <option value="">mission3</option>
                            <option value="">mission4</option>
                        </select></div>
                        <br>
                <label for="">Actions</label>
                <input type="text" class="story-input" placeholder="Enter Actions">
                <br><br>
                <label>Date Volunteerd</label>
                <input type="date" class="story-input">
                <br><br>
                <label>Message</label>
                <input type="text" class="story-input-div" placeholder="Message">
                <br>
                <div class="timesheet_btn">
                <input type="submit" class="timesheet_btn1" value="Cancel" name="" id="">
                <input type="submit" class="timesheet_btn2" name="" value="Submit" id="">
                </div>
            </form>
        </div>
        <div class="overlay_goal"></div>


        <script>
                $(function() {
            var p = new Popup({
                popup: '.goal_popup',
                content: '.popup_goal-content',
                overlay: '.overlay_goal',
                
            });

            // setTimeout(function() {
            //     var form = $('.for-call-popup');
            //     p.open(form.html());
            // }, 1000);

            $('.timesheet_goal').click(function() {
                var form = $('.for-call-popup');
                p.open(form.html());
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
        </script>
        <!--end popup box for goal edit user -->



                <!-- popup for add goal user -->

<div class="goal_add_popup">
            <div class="popup-close-btn"></div>
            <div class="popup_goal-add-content"></div>
        </div>
        <div class="for-add-goal-popup">
            <form action="" class="call-popup">
                <h3>Please Input below volunteering Goal</h3>
                 
                <label for="mission">Mission</label>
                <div><select class="story-input" aria-placeholder="Select your Mission" id="">
                            <option value="" class="story-input">Plantation and Afforestation Programme</option>
                            <option value="">mission1</option>
                            <option value="">mission2</option>
                            <option value="">mission3</option>
                            <option value="">mission4</option>
                        </select></div>
                        <br>
                <label for="">Actions</label>
                <input type="text" class="story-input" placeholder="Enter Actions">
                <br><br>
                <label>Date Volunteerd</label>
                <input type="date" class="story-input">
                <br><br>
                <label>Message</label>
                <input type="text" class="story-input-div" placeholder="Message">
                <br>
                <div class="timesheet_btn">
                <input type="submit" class="timesheet_btn1" value="Cancel" name="" id="">
                <input type="submit" class="timesheet_btn2" name="" value="Submit" id="">
                </div>
            </form>
        </div>
        <div class="overlay_goal-add"></div>


        <script>
                $(function() {
            var p = new Popup({
                popup: '.goal_add_popup',
                content: '.popup_goal-add-content',
                overlay: '.overlay_goal-add',
                
            });

            // setTimeout(function() {
            //     var form = $('.for-call-popup');
            //     p.open(form.html());
            // }, 1000);

            $('.add-goal').click(function() {
                var form = $('.for-add-goal-popup');
                p.open(form.html());
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
        </script>
        <!--end popup box for goal add user -->




        <!-- popup for edit time user -->

<div class="timesheet_popup">
            <div class="popup-close-btn"></div>
            <div class="popup-content"></div>
        </div>
        <div class="for-time-popup">
            <form action="" class="call-popup">
                <h3>Please Input below volunteering Hours</h3>
                <label for="mission">Mission</label>
                <div><select class="story-input" aria-placeholder="Select your Mission" id="">
                            <option value="" class="story-input">Faith Community Belowship</option>
                            <option value="">mission1</option>
                            <option value="">mission2</option>
                            <option value="">mission3</option>
                            <option value="">mission4</option>
                        </select></div>
                        <br>
                
                <label>Date Volunteerd</label>
                <input type="date" class="story-input">
                <br><br>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                    <label>Hours</label>
                <input type="text" class="story-input" placeholder="Enter Spent Hours">
                    </div>
                    <div class="col-lg-6 col-md-6">
                    <label>Minutes</label>
                <input type="text" class="story-input" placeholder="Enter Spent Minutes">
                    </div>
                </div>
                <br>
                <label>Message</label>
                <input type="text" class="story-input-div" placeholder="Enter Your Message">
                <br>
                <div class="timesheet_btn">
                <input type="submit" class="timesheet_btn1" value="Cancel" name="" id="">
                <input type="submit" class="timesheet_btn2" name="" value="Submit" id="">
                </div>
            </form>
        </div>
        <div class="overlay"></div>
        <!--end popup box for edit time user -->


    <script>
        $(function() {
            var p = new Popup({
                popup: '.timesheet_popup',
                content: '.popup-content',
                overlay: '.overlay',
            });

            // setTimeout(function() {
            //     var form = $('.for-call-popup');
            //     p.open(form.html());
            // }, 1000);

            $('.time').click(function() {
                var form = $('.for-time-popup');
                p.open(form.html());
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


        
        
        
    </script>

         <!-- popup for add time user -->

<div class="time_add_popup">
            <div class="popup-close-btn"></div>
            <div class="popup-add-content"></div>
        </div>
        <div class="for-add-time-popup">
            <form action="" class="call-popup">
                <h3>Please Input below volunteering Hours</h3>
                <label for="mission">Mission</label>
                <div><select class="story-input" aria-placeholder="Select your Mission" id="">
                            <option value="" class="story-input">Faith Community Belowship</option>
                            <option value="">mission1</option>
                            <option value="">mission2</option>
                            <option value="">mission3</option>
                            <option value="">mission4</option>
                        </select></div>
                        <br>
                
                <label>Date Volunteerd</label>
                <input type="date" class="story-input">
                <br><br>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                    <label>Hours</label>
                <input type="text" class="story-input" placeholder="Enter Spent Hours">
                    </div>
                    <div class="col-lg-6 col-md-6">
                    <label>Minutes</label>
                <input type="text" class="story-input" placeholder="Enter Spent Minutes">
                    </div>
                </div>
                <br>
                <label>Message</label>
                <input type="text" class="story-input-div" placeholder="Enter Your Message">
                <br>
                <div class="timesheet_btn">
                <input type="button" class="timesheet_btn1" value="Cancel" name="" id="">
                <input type="submit" class="timesheet_btn2" name="" value="Submit" id="">
                </div>
            </form>
        </div>
        <div class="add-overlay"></div>


    <script>
        $(function() {
            var p = new Popup({
                popup: '.time_add_popup',
                content: '.popup-add-content',
                overlay: '.add-overlay',
            });

            // setTimeout(function() {
            //     var form = $('.for-call-popup');
            //     p.open(form.html());
            // }, 1000);

            $('.add-time').click(function() {
                var form = $('.for-add-time-popup');
                p.open(form.html());
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
</script>
        <!--end popup box for add time user -->
