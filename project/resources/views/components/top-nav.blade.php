


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


            <div class="nav-item nav-avtar dropdown">
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
        <hr style="margin-bottom:0">



    </script>