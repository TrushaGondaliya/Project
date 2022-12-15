
<div class="nav-2">


    <div class="navbar-nav mb-lg-0" style="display: contents;"><img src="images/search.png" alt="Avatar" style="object-fit:cover ;">
    </div>
    <form class="d-flex" action="{{url('home')}}" method="GET">
        
        <input class="form-control me-2 Search-mission common-font" style="box-shadow: none;" type="search" placeholder="Search mission..." value="{{request()->input('search')}}" aria-label="Search" name="search">
    </form>


    <nav class="navbar navbar-expand-lg">
        <div class="container nav-style">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation-2" aria-controls="navigation-1" aria-expanded="false" aria-label="Toggle navigation">
                <span><img src="images/filter.png"></span>
            </button>
            <div class="collapse navbar-collapse" id="navigation-2">
                <div class="right-nav-2">


                <div class="nav-item dropdown">
                    <select class="nav-link nav-2-items dropdown-toggle City common-font" name="country" id="country_filter">
                        @php
                        $country=App\Models\Country::all()
                        @endphp
                        <option value="all">Country</option>
                     
                        @foreach($country as $item) 
                        @if($item->country_id==request()->country)
                        <option value="{{request()->country}}" selected>{{$item->name}}</option>
                        @else
                        <option value="{{$item->country_id}}">{{$item->name}}</option>
                        @endif
                        @endforeach
                        </select>
                    </div>

                    <div class="nav-item dropdown">

                       
                        <select class="nav-link nav-2-items dropdown-toggle City common-font selectpicker" aria-placeholder="City" id="city" multiple data-live-search="true" name="city[]">
                        @php
                        $city=App\Models\City::all()
                        @endphp
                        <option value="">City</option>
                        @foreach($city as $item)  
                        <option value="{{$item->city_id}}">{{$item->name}}</option>
                        @endforeach
                        </select>
                       
                        
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
                            <li value="{{$skill->skill_id}}"><a class="dropdown-item" href="{{url('skill/'.$skill->skill_name)}}">{{$skill->skill_name}}</a></li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </nav>
</div>

<script type="text/javascript" src="assets/js/multiselect-dropdown.js">  
</script>
<script>
    $(document).ready(function(){
        
        $('#city').on('change',function(){
            var city=$(this).val();
            var city_name=$(this).find('option:selected').text();
            $.ajax({
                url:"{{route('home')}}",
                type:"GET",
                data:{'city':city},

                success:function(data){
                    $('#third').html(data);
                    $('#city_tag').append('<div class="mission mission-text" ><span style="padding-right: 5px;" id="city_tag">'+city_name+ '</span><img src="/images/cancel.png" id="clear"></div>');
                }
            })
        })
    })
</script>
