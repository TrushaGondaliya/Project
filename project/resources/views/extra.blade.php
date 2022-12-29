<x-top-nav></x-top-nav>
<!-- second navbar -->


<x-top-nav-2></x-top-nav-2>
<hr style="margin-top: 0;">
<div class="container">

    <div class="show-mission ">
        <span class="mission mission-text extra1"><span style="padding-right: 5px;">Plantation</span><img src="/images/cancel.png" id="clear1"></span>
        <span class="mission mission-text extra2"><span style="padding-right: 5px;">Animal</span><img src="/images/cancel.png" id="clear2"></span>
        <span class="mission mission-text extra3"><span style="padding-right: 5px;">Loream</span><img src="/images/cancel.png" id="clear3"></span>
        <span class="mission mission-text extra4"><span style="padding-right: 5px;">Welfare</span><img src="/images/cancel.png" id="clear4"></span>
        <span class="mission mission-text extra5"><span style="padding-right: 5px;">Education</span><img src="/images/cancel.png" id="clear5"></span>
        <span class="mission mission-text extra6"><span style="padding-right: 5px;">Trees</span><img src="/images/cancel.png" id="clear6"></span>
        <span class="mission mission-text extra7"><span style="padding-right: 5px;">Express</span><img src="/images/cancel.png" id="clear7"></span>
        @if(request()->country)
        <span class="mission mission-text " id="country_tag"><span style="padding-right: 5px;">{{request()->country}}</span><img src="/images/cancel.png" id="clear"></span>
        @endif
        @if(request()->city)
        <span class="mission mission-text " id="city_tag"><span style="padding-right: 5px;">{{request()->city}}</span><img src="/images/cancel.png" id="clear"></span>
        @endif
        @if(request()->theme)
        <span class="mission mission-text " id="theme_tag"><span style="padding-right: 5px;">{{request()->theme}}</span><img src="/images/cancel.png" id="clear"></span>
        @endif
        @if(request()->skill)
        <span class="mission mission-text " id="skill_tag"><span style="padding-right: 5px;">{{request()->skill}}</span><img src="/images/cancel.png" id="clear"></span>
        @endif
        @if(request()->search)
        <span class="mission mission-text " id="search_tag"><span style="padding-right: 5px;">{{request()->search}}</span><img src="/images/cancel.png" id="clear"></span>
        @endif
        <button class="mission-text clear" id="clearall">Clear all</button>
    </div>
</div>

@php
$mission=App\Models\Mission::all()
@endphp
<div class="explore">
    <div class="left-explore common-font">
        <span class="explore-light">Explore </span>{{count($mission)}} missions
    </div>

    <div class="right-explore">
        <form id="selectsort" action="{{url('home')}}" enctype="multipart/form-data" method="GET">
            <select name="sort" class="Rounded-Rectangle-8" onchange="sortBy()">
                @if(request()->input('sort'))
                <option value="none" selected disabled="" hidden="">{{request()->input('sort')}}</option>
                @else
                <option value="none" selected="" disabled="" hidden="">Sort By</option>
                @endif
                <option value="Newest">Newest</option>
                <option value="Oldest">Oldest</option>
                <option value="Lowest available seats ">Lowest available seats</option>
                <option value="Highest available seats">Highest available seats </option>
                <option value="My favourites">My favourites </option>
                <option value="Registration deadline">Registration deadline </option>
            </select>
        </form>
        <a href="{{url('home')}}">
            <img class="img-fluid Grid-list grid" src="images/grid.png" alt="">
        </a>

        <a href="{{url('list')}}">
            <img class="img-fluid Grid-list" src="images/list.png" alt="">
        </a>

    </div>
</div>

@if($errors->any())
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <div>{{$error}}</div>
    @endforeach
</div>

@endif


<script>
       
    $(document).ready(function() {
        $('#clear').on('click', function() {
            $('#country_tag').remove();
            $('#city_tag').remove();
            $('#search_tag').remove();
            $('#theme_tag').remove();
            $('#skill_tag').remove();
        });
        $('#clear1').on('click', function() {
            $('.extra1').remove();
        });
        $('#clear2').on('click', function() {
            $('.extra2').remove();
        });
        $('#clear3').on('click', function() {
            $('.extra3').remove();
        });
        $('#clear4').on('click', function() {
            $('.extra4').remove();
        });
        $('#clear5').on('click', function() {
            $('.extra5').remove();
        });
        $('#clear6').on('click', function() {
            $('.extra6').remove();
        });
        $('#clear7').on('click', function() {
            $('.extra7').remove();
        });

        $('#clearall').on('click', function() {
            $('#country_tag').remove();
            $('#city_tag').remove();
            $('.mission').remove();
            $('#search_tag').remove();
            $('#theme_tag').remove();
            $('#skill_tag').remove();
        })
    })


    function sortBy() {
        let form1 = document.getElementById("selectsort");
        form1.submit();
    }
</script>