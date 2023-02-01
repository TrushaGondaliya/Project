<div class="nav-container">
    <a href="{{url('home')}}"><img src="/images/home1.jpeg"
            style="width:40px;height: 40px; border-radius:100%;object-fit:cover ;margin-right: 12px;" alt=""></a>
    <nav class="navbar navbar-expand-lg">

        <div class="container" style="padding:0">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation-1"
                aria-controls="navigation-1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navigation-1">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @if(request()->routeIs('home'))
                    <form id="explore" method="get" enctype="multipart/form-data" action="{{url('home')}}">
                        <select class="nav-link Explore-Stories-Policy common-font" id="country" name="explore"
                            style="border:none" onChange="showExplore()">
                          
                            @if(request()->input('explore'))
                            <option value="none" selected disabled="" hidden="">{{request()->input('explore')}}
                            </option>
                            @else
                            <option value="">Explore</option>
                            @endif
                            <option value="Top Theme">Top Theme</option>
                            <option value="Most Ranked">Most Ranked</option>
                            <option value="Top Favourite">Top Favourite</option>
                            <option value="random">Random</option>
                        </select>
                    </form>
                    @endif

                    <li class="nav-item">
                        <a class="nav-link Explore-Stories-Policy common-font"
                            href="{{url('stories_listing')}}">Stories</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle Explore-Stories-Policy common-font" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Policy
                        </a>
                        <ul class="dropdown-menu">
                            @php
                            $policy=App\Models\Cms::all();
                            @endphp
                            @foreach($policy as $item)
                            <li><a class="dropdown-item" href="#">{{$item->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="nav-item nav-avtar dropdown">
        
        <div class="dropdown">
            <button class="bell-btn"><img class="dropbtn" onclick="myFunction()"  src="images/bell.png" alt=""></button>
            <div id="myDropdown" class="dropdown-content">
                <span class="bell-sticky">Get a Notification For</span>
                <div class="bell-content">
            <ul>
            <li>
            Recommended Mission
              <input type="checkbox" value="/download1.jpg" />
               
        </li>
            <li>
            Volunteering Hours
              <input type="checkbox" value="/download2.png" />
                
        </li>
            <li>
            Volunteering Goals
              <input type="checkbox" value="/download3.jpg" />
                
        </li>
        <li>
        My Comments
              <input type="checkbox" value="/download3.jpg" />
                
        </li>
        <li>
        My stories
              <input type="checkbox" value="/download3.jpg" />
                
        </li>
        <li>
        New Messages
              <input type="checkbox" value="/download3.jpg" />
                
        </li>
        <li>
        New Missions
              <input type="checkbox" value="/download3.jpg" />
        </li>
        <li>
        Recommended story
              <input type="checkbox" value="/download3.jpg" />
             
        </li>
        <li>
        Mission application
              <input type="checkbox" value="/download3.jpg" />
        </li>
        <li>
        Recommended story
              <input type="checkbox" value="/download3.jpg" />
        </li>
        <li>
        Recommended story
              <input type="checkbox" value="/download3.jpg" />
        </li>
        
          </ul>
</div>
<hr>
          <div class="not-btn">
            <input type="button" value="Cancel" class="not-btn1">
            <input type="submit" value="Save" class="not-btn2">
            </div>
            </div>
            
        </div>
        <div>
            <img src="{{asset('/uploads/user/'.Auth::user()->avtar)}}" alt="Avatar"
                style="width:40px;height: 40px; border-radius:100%;object-fit:cover ;margin-right: 12px;">
        </div>
        <a class="nav-link dropdown-toggle Explore-Stories-Policy common-font" style="font-size: 15px;" href="#"
            role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{Auth::user()->full_name}}
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{url('edit_profile')}}">My Profile</a></li>
            <li><a class="dropdown-item" href="{{url('timesheet')}}">Volunteering Timesheet</a></li>
            <li><a class="dropdown-item" href="{{url('logout')}}">Logout</a></li>
        </ul>
    </div>
</div>
<hr style="margin-bottom:0">
<script>
    function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

function showExplore() {
    let form = document.getElementById("explore");
    form.submit();
}
</script>