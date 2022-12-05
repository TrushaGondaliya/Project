<div class="nav-2">


    <div class="navbar-nav mb-lg-0" style="display: contents;"><img src="images/search.png" alt="Avatar" style="object-fit:cover ;">
    </div>
    <form class="d-flex" action="{{url('home')}}" method="post" role="search">
        @csrf
        <input class="form-control me-2 Search-mission common-font" type="search" placeholder="Search mission..." aria-label="Search" name="search">
    </form>


    <nav class="navbar navbar-expand-lg">
        <div class="container nav-style">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation-2" aria-controls="navigation-1" aria-expanded="false" aria-label="Toggle navigation">
                <span><img src="images/filter.png"></span>
            </button>
            <div class="collapse navbar-collapse" id="navigation-2">
                <div class="right-nav-2">


                    <div class="nav-item dropdown">

                    <a class="nav-link nav-2-items dropdown-toggle City common-font" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Country
                        </a>
                        @php
                        $country=App\Models\Country::all()
                        @endphp
                        <ul class="dropdown-menu">
                        @foreach($country as $item)  
                            <li value="{{$item->country_id}}"><a class="dropdown-item" href="#">{{$item->name}}</a></li>
                        @endforeach
                        </ul>
                    </div>



                    <div class="nav-item dropdown">

                        <a class="nav-link nav-2-items dropdown-toggle City common-font" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            City
                        </a>
                        @php
                        $city=App\Models\City::all()
                        @endphp
                        <ul class="dropdown-menu">
                        @foreach($city as $item)  
                            <li value="{{$item->city_id}}"><a class="dropdown-item" href="{{url('search/'.$item->city_id)}}">{{$item->name}}</a></li>
                        @endforeach
                        </ul>
                    </div>
                    <div class="nav-item dropdown">

                        <a class="nav-link nav-2-items dropdown-toggle City common-font" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Theme
                        </a>
                        @php
                        $themes=App\Models\Theme::all()
                        @endphp
                        <ul class="dropdown-menu">
                            @foreach($themes as $theme)
                            <li value="{{$theme->theme_id}}"><a class="dropdown-item" href="{{url('theme/'.$theme->title)}}">
                                {{$theme->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="nav-item dropdown">

                        <a class="nav-link nav-2-items dropdown-toggle City common-font city-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Skills
                        </a>
                        @php
                        $skills=App\Models\Skill::all()
                        @endphp
                        <ul class="dropdown-menu ">
                            @foreach($skills as $skill)
                            <li><a class="dropdown-item" href="{{url('theme/'.$skill->skill_name)}}">{{$skill->skill_name}}</a></li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </nav>
</div>

<script>
    function filter_data(){
        country_filter=$("#country_filter").val();
        $.ajax({
            url:"{{url('search')}}",
        })

    }
    $('#country_filter').change(function(){
        filter_data();
    })
    
</script>