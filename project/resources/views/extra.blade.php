<x-top-nav></x-top-nav>
        <!-- second navbar -->


        <x-top-nav-2></x-top-nav-2>
        <hr style="margin-top: 0;">
        <div class="container">
        
            <div class="show-mission ">
            <span class="mission mission-text extra1" ><span style="padding-right: 5px;">Plantation</span><img src="/images/cancel.png" id="clear1"></span>
            <span class="mission mission-text extra2" ><span style="padding-right: 5px;">Animal</span><img src="/images/cancel.png" id="clear2"></span>
            <span class="mission mission-text extra3" ><span style="padding-right: 5px;">Loream</span><img src="/images/cancel.png" id="clear3"></span>
            <span class="mission mission-text extra4" ><span style="padding-right: 5px;">Welfare</span><img src="/images/cancel.png" id="clear4"></span>
            <span class="mission mission-text extra5" ><span style="padding-right: 5px;">Education</span><img src="/images/cancel.png" id="clear5"></span>
            <span class="mission mission-text extra6" ><span style="padding-right: 5px;">Trees</span><img src="/images/cancel.png" id="clear6"></span>
            <span class="mission mission-text extra7" ><span style="padding-right: 5px;">Express</span><img src="/images/cancel.png" id="clear7"></span>
                <span id="country_tag"></span>
                <span id="city_tag"></span>
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
                <select name="sorting" id="sort" class="Rounded-Rectangle-8">
                    <option value="0">Sort by</option>
                    <option value="1">Newest</option>
                    <option value="2">Oldest</option>
                    <option value="3 ">Lowest available seats</option>
                    <option value="4">Highest available seats </option>
                    <option value="5">My favourites </option>
                    <option value="6">Registration deadline </option>
                </select>
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
                    $(document).ready(function(){
                        $('#clear').on('click',function(){
                            $('#country_tag').remove();
                            $('#city_tag').remove();
                        });
                        $('#clear1').on('click',function(){
                            $('.extra1').remove();
                        });
                        $('#clear2').on('click',function(){
                            $('.extra2').remove();
                        });
                        $('#clear3').on('click',function(){
                            $('.extra3').remove();
                        });
                        $('#clear4').on('click',function(){
                            $('.extra4').remove();
                        });
                        $('#clear5').on('click',function(){
                            $('.extra5').remove();
                        });
                        $('#clear6').on('click',function(){
                            $('.extra6').remove();
                        });
                        $('#clear7').on('click',function(){
                            $('.extra7').remove();
                        });

                        $('#clearall').on('click',function(){
                            $('#country_tag').remove();
                            $('#city_tag').remove();
                            $('.mission').remove();
                        })
                    })
        
                </script>

     

