<div class="nav-2">


    <div class="navbar-nav mb-lg-0" style="display: contents;"><img src="images/search.png" alt="Avatar"
            style="object-fit:cover ;">
    </div>
    <form class="d-flex" action="{{url('home')}}" method="GET">
        <input class="form-control me-2 Search-mission common-font" style="box-shadow: none;" type="search"
            placeholder="Search mission..." value="{{request()->input('search')}}" aria-label="Search" name="search">
    </form>
    <nav class="navbar navbar-expand-lg">
        <div class="container nav-style">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation-2"
                aria-controls="navigation-1" aria-expanded="false" aria-label="Toggle navigation">
                <span><img src="images/filter.png"></span>
            </button>
            <div class="collapse navbar-collapse" id="navigation-2">
                <div class="right-nav-2">
                    <div class="nav-item dropdown">
                        @php
                        $country=App\Models\Country::all()
                        @endphp
                        <form id="select1" method="get" enctype="multipart/form-data" action="{{url('home')}}">
                            <select class="nav-link nav-2-items dropdown-toggle City common-font" id="country"
                                name="country" onChange="showCountry()">
                                @foreach($country as $item)
                                @if(request()->input('country'))
                                <option value="none" selected disabled="" hidden="">{{request()->input('country')}}
                                </option>
                                @else
                                <option value="none" selected="" disabled="" hidden="">Country</option>
                                @endif
                                <option value="{{$item->name}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </form>
                    </div>
                    <div class="nav-item dropdown">
                        @php
                        $city=App\Models\City::all()
                        @endphp
                        <form id="select2" method="get" enctype="multipart/form-data" action="{{url('home')}}">
                            <select class="nav-link nav-2-items dropdown-toggle City common-font selectpicker"
                                aria-expanded="false" placeholder="City" multiple name="city[]" onchange="showCity()">
                                @foreach($city as $item)
                                <option value="{{$item->name}}" selected="@if(request()->has('city'))  @endif">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </form>
                    </div>
                    <div class="nav-item dropdown">
                        @php
                        $themes=App\Models\Theme::all()
                        @endphp
                        <form id="selectTheme" method="get" enctype="multipart/form-data" action="{{url('home')}}">
                            <select class="nav-link nav-2-items dropdown-toggle City common-font selectpicker"
                                data-bs-toggle="dropdown" placeholder="Theme" multiple name="theme"
                                onchange="showTheme()">
                                @foreach($themes as $theme)
                                <option value="{{$theme->title}}">{{$theme->title}}</option>
                                @endforeach
                            </select>
                        </form>
                    </div>
                    <div class="nav-item dropdown">
                        @php
                        $skills=App\Models\Skill::all()
                        @endphp
                        <form id="selectSkill" method="get" enctype="multipart/form-data" action="{{url('home')}}">
                            <select class="nav-link nav-2-items dropdown-toggle City common-font  selectpicker city-1"
                                placeholder="Skill" multiple name="skill" onchange="showSkill()">
                                @if(request()->input('skill'))
                                <option value="none" selected disabled="" hidden="">{{request()->input('skill')}}
                                </option>
                                @endif
                                @foreach($skills as $skill)
                                <option value="{{$skill->skill_name}}">{{$skill->skill_name}}</option>
                                @endforeach
                            </select>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </nav>
</div>

<script type="text/javascript" src="assets/js/multiselect-dropdown.js">
</script>



<script>
function showCountry() {

    let form = document.getElementById("select1");
    form.submit();
}

function showCity() {
    let form1 = document.getElementById("select2");
    form1.submit();
}

function showTheme() {
    let form1 = document.getElementById("selectTheme");
    form1.submit();
}

function showSkill() {
    let form1 = document.getElementById("selectSkill");
    form1.submit();
}
</script>