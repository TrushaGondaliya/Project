<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('css/index.css')}}">
    <link rel="stylesheet" href="{{url('css/index1.css')}}">
    <link href="{{url('assets/css/styles.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/admin.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/custom.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
   <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">

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



          <div class="nav-item dropdown" style="display: flex;margin-left: 785px;float:right">
              <div>
                  <img src="/images/user-img.png" alt="Avatar"
                      style="width:40px;height: 40px; border-radius:100%;object-fit:cover ;margin-right: 12px;">
              </div>
              <a class="nav-link dropdown-toggle Explore-Stories-Policy common-font" style="font-size: 15px;" href="#"
                  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{Auth::user()->full_name}}
                  <!-- {{Session::get('name')}} -->
                  
              </a>
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{url('admin/admin-profile')}}">My Profile</a></li>
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
             
            <table class="table" id="myTable">
                <thead>
                    <th>Mission</th>
                    <th>Date</th>
                    <th>Hours</th>
                    <th>Minutes</th>
                    <th></th>
                </thead>
                @foreach($timesheet as $time)
        @if($time->time!=null)
                <tbody class="data-row">
                    <td id="title">{{$time->mission->title}}</td>
                    <td class="date">{{$time->date_volunteered->format('d/m/Y')}}</td>
                    <td class="hour">{{substr($time->time,0,2)}}</td>
                    <td class="minutes">{{substr($time->time,3,4)}}</td>
                    <td style="display:   inline-flex;"> 
                    <button value="{{$time->timesheet_id}}" class="delete-btn deleteCategorybtn edit-btn"><img style="width: 14px; height:17px;" src="\images\bin.png">
                    </button> 
                     <button value="{{$time->timesheet_id}}" class="time edit-btn" data-toggle="modal"  data-target="#edit-modal"><img  style="width: 14px; height:17px;cursor:pointer" src="\images\edit.jpg"></button></td>
                    
                </tbody>
                @endif
                @endforeach
            </table>
      </div>
      <div class="col div-vol">
      <div style="float:right" class="timesheet_btn2 add-goal">
      <span class="fa fa-plus"></span>
                    <input type="submit" class="timesheet_add" value="Add">
                </div>
      <p class="time-text">Volunteering Goals</p>
      <table class="table" id="datatable">
                <thead>
                    <th>Mission</th>
                    <th>Date</th>
                    <th>Action</th>
                    <th></th>
                </thead>
        @foreach($timesheet as $goal)
        @if($goal->action!=null)
                <tbody>
                    <td>{{$goal->mission->title}}</td>
                    <td>{{$goal->date_volunteered->format('d/m/Y')}}</td>
                    <td>{{$goal->action}}</td>
                    <td><button value="{{$time->timesheet_id}}" class="delete-btn deleteCategorybtn edit-btn"><img style="width: 14px; height:17px;" src="\images\bin.png">
                    </button>   
                    <button value="{{$goal->timesheet_id}}"  class="timesheet_goal edit-btn"><img style="width: 14px; height:17px;cursor:pointer" src="\images\edit.jpg">
                    </button>  
                    </a></td>
                </tbody>
                @endif
                @endforeach


            </table>
      </div>
      </div>
      </div>
</body>
</html>

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content1">
            <form action="{{url('admin/delete-time')}}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="popup-title" id="exampleModalLabel">Confirm Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="timesheet_id" id="timesheet_id">
                    <span class="cms-pupop-text">Are you sure you want to delete this item?</span>
                </div>
                <div class="popup-btn">
                    <button type="button" class="popup-btn1" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="popup-btn2">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.deleteCategorybtn').click(function(e) {
            // $(document).on('click','',function(e){

            // e.preventDefault();

            var timesheet_id = $(this).val();
            $('#timesheet_id').val(timesheet_id);
            $('#deleteModal').modal('show');
        });
    });
</script>


        <!-- popup for edit goal user -->

<div class="goal_popup" id="GoalEdit">
            <div class="popup-close-btn"></div>
            <div class="popup_goal-content"></div>
        </div>
        <div class="for-call-popup">
            <form action="{{url('admin/update-goal')}}" method="POST" id="editGoal" class="call-popup">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" id="id">
                <h3>Please Input below volunteering Goal</h3>
                 
                <label for="mission">Mission</label>
                @php 
                $missions=App\Models\Mission::all()
                @endphp
                <div><select class="story-input" aria-placeholder="Select your Mission"  name="mission_id" id="mission_id">
                    @foreach($missions as $mission)
                            <option value="{{$mission->mission_id}}" class="story-input">{{$mission->title}}</option>
                    @endforeach
                        </select></div>
                        <br>
                <label for="">Actions</label>
                <input type="text" id="action" name="action" class="story-input" placeholder="Enter Actions">
                <br><br>
                <label>Date Volunteerd</label>
                <input type="text" name="date_volunteered" id="date_volunteered" class="story-input">
                <br><br>
                <label>Message</label>
                <input type="text" id="notes" name="notes" class="story-input-div" placeholder="Message">
                <br>
                <div class="timesheet_btn">
                <input type="button" class="timesheet_btn1" value="Cancel" name="" id="">
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

            $('.timesheet_goal').click(function() {
                var id=$(this).val();
                var form = $('.for-call-popup');
                p.open(form.html());
                $.ajax({
                    type:"GET",
                    url:"/admin/edit-goal/"+id,
                    success:function(response){
                        console.log(response);
                        $('#mission_id').val(response.time.mission_id);
                        $('#date_volunteered').val(response.time.date_volunteered);
                        $('#action').val(response.time.action);
                        $('#notes').val(response.time.notes);
                        $('#id').val(response.time.timesheet_id);
                    }
                })
                
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
            <form action="{{url('admin/add-goal')}}" method="POST" class="call-popup">
                @csrf
                <h3>Please Input below volunteering Goal</h3>
                 
                <label for="mission">Mission</label>
                @php 
                $missions=App\Models\Mission::all()
                @endphp
                <div><select class="story-input" aria-placeholder="Select your Mission"  name="mission_id">
                    @foreach($missions as $mission)
                            <option value="{{$mission->mission_id}}" class="story-input">{{$mission->title}}</option>
                    @endforeach
                        </select></div>
                        <br>
                <label for="">Actions</label>
                <input type="text" name="action"  class="story-input" placeholder="Enter Actions">
                <br><br>
                <label>Date Volunteerd</label>
                <input type="date" name="date_volunteered" class="story-input">
                <br><br>
                <label>Message</label>
                <input type="text" name="notes"  class="story-input-div" placeholder="Message">
                <br>
                <div class="timesheet_btn">
                <input type="button" class="timesheet_btn1" value="Cancel" name="" id="">
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

<div class="timesheet_popup" id="edit-modal">
            <div class="popup-close-btn"></div>
            <div class="popup-content"></div>
        </div>
        <div class="for-time-popup">
            <form action="{{url('admin/update-time')}}" method="post" class="call-popup">
                @csrf
                @method('put')
                <h3>Please Input below volunteering Hours</h3>
                <input type="hidden" name="id" id="id">
                
                <label for="mission">Mission</label>
                @php 
                $missions=App\Models\Mission::all()
                @endphp
                <div><select class="story-input" aria-placeholder="Select your Mission" id="mission_id"  name="mission_id">
                    @foreach($missions as $mission)
                    <option value="{{$mission->mission_id}}" class="story-input">{{$mission->title}}</option>
                    @endforeach
                        </select></div>
                        <br>
                
                <label>Date Volunteerd</label>
                <input type="text" class="story-input" id="date" name="date_volunteered">
                <br><br>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                    <label>Hours</label>
                <input type="text" class="story-input" id="hours" name="time" placeholder="Enter Spent Hours">
                    </div>
                    <div class="col-lg-6 col-md-6">
                    <label>Minutes</label>
                <input type="text" class="story-input" id="minutes" name="minutes" placeholder="Enter Spent Minutes">
                    </div>
                </div>
                <br>
                <label>Message</label>
                <input type="text" class="story-input-div" id="message" name="notes" placeholder="Enter Your Message">
                <br>
                <div class="timesheet_btn">
                <input type="button" class="timesheet_btn1" value="Cancel" name="" id="">
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


            $('.time').click(function() {
                var id=$(this).val();
                var form = $('.for-time-popup');
                p.open(form.html());
                $.ajax({
                    type:"GET",
                    url:"/admin/edit-time/"+id,
                    success:function(response){
                        console.log(response);
                        $('#mission_id').val(response.time.mission_id);
                     $('#date').val(response.time.date_volunteered);
                        $('#hours').val(response.time.time);
                        $('#message').val(response.time.notes);
                        $('#id').val(response.time.timesheet_id);
                    }
                })
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
            <form action="{{url('admin/add-time')}}" method="post" class="call-popup">
                @csrf
                <h3>Please Input below volunteering Hours</h3>
                <label for="mission">Mission</label>
                @php 
                $missions=App\Models\Mission::all()
                @endphp
                <div><select class="story-input" aria-placeholder="Select your Mission" name="mission_id">
                    @foreach($missions as $mission)
                            <option value="{{$mission->mission_id}}" class="story-input">{{$mission->title}}</option>
                    @endforeach
                        </select></div>
                        <br>
                
                <label>Date Volunteerd</label>
                <input type="date" name="date_volunteered" class="story-input">
                <br><br>
                <div class="row">
                  
                    <div class="col-lg-6 col-md-6">
                    <label>Time</label>
                <input type="time" class="story-input" name="time" placeholder="Enter Spent Minutes">
                    </div>
                </div>
                <br>
                <label>Message</label>
                <input type="text" name="notes" class="story-input-div" placeholder="Enter Your Message">
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

        <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
