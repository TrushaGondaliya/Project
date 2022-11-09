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
                    <td>abc</td>
                    <td>12/3/2022</td>
                    <td>4</td>
                    <td>49</td>
                    <td><a href=""><img style="width: 14px; height:17px" src="\images\bin.png"></a>   <a href=""><img style="width: 14px; height:17px" src="\images\edit.jpg"></a></td>
                    
                </tbody>
            </table>
      </div>
      <div class="col div-vol">
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
                    <td>abc</td>
                    <td>12/3/2022</td>
                    <td>4</td>
                    <td>49</td>
                    <td><a href=""><img style="width: 14px; height:17px" src="\images\bin.png"></a>   <a href=""><img style="width: 14px; height:17px" src="\images\edit.jpg"></a></td>
                    
                </tbody>
            </table>
      </div>
      </div>
      </div>
</body>
</html>



<div class="popup">
            <div class="popup-close-btn"></div>
            <div class="popup-content"></div>
        </div>
        <div class="for-call-popup">
            <form action="" class="call-popup">
                <h3>Change Password</h3>
                <input type="text" class="edit-input" placeholder="Enter Old Password" name="" id="">
                <input type="text" class="edit-input" placeholder="Enter new Password" name="" id="">
                <input type="text" class="edit-input" placeholder="Enter Confirm Password" name="" id="">
                <div class="popup-btn">
                    <input type="submit" class="popup-button" name="" value="cancel" id="">
                    <input type="submit" class="edit-profile-button-1" value="Change Password" name="" id="">
                </div>
            </form>
        </div>
        <div class="overlay"></div>
        <!--end popup box for change Password -->


    <script>
        $(function() {
            var p = new Popup({
                popup: '.popup',
                content: '.popup-content',
                overlay: '.overlay',
            });

            setTimeout(function() {
                var form = $('.for-call-popup');
                p.open(form.html());
            }, 1000);

            // $('.edit-profile-button-save').click(function() {
            //     var form = $('.for-call-popup');
            //     p.open(form.html());
            // });

            // $('.write').click(function() {
            //     p.open('Write me a message: shark@sharkcoder.com');
            // });

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