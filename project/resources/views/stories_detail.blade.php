@extends('layouts.app')

@section('content')
<div class="body-1">


    <br>
    <br>


    <!-- Volunteering mission listing -->

    <section>
        <div class="vol">

            @foreach($stories as $story)
            <div class="row col-md-12 col-sm-12  col-lg-12">
                <div class="column col-md-6 story-detail-img">
                    <div id="main">
                    @php
                    $media=App\Models\Storymedia::where('story_id',$story->story_id)->first();
                    @endphp
                    @if(is_null($media))
                    <img src="/images/image2.png" class="story-main-img">
                    @else
                    <img src="/images/{{$media->path}}" class="story-main-img" alt="...">
                    @endif
                    </div>
                    
                    

                   

                    <div id="gallery" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">
                <div class="col" style="padding: 0px;">
                <img src="/images/Grow-Trees-On-the-path-to-environment-sustainability-1.png" class="story-img " alt="">
                </div>

                <div class="col" style="padding: 0px;">
                <img src="/images/CSR-initiative-stands-for-Coffee--and-Farmer-Equity.png" class="story-img" alt="">

                </div>

                <div class="col" style="padding: 0px;">
                <img src="/images/img1.png" class="story-img " style="padding-left: 0;" alt="">
                </div>

                <div class="col" style="padding: 0px;">
                <img src="/images/img11.png" class="story-img " alt="">
                </div>
            </div>
        </div>

        <div class="carousel-item">
        <div class="row">
                <div class="col" style="padding: 0px;">
                <img src="/images/Grow-Trees-On-the-path-to-environment-sustainability-1.png" class="story-img " alt="">
                </div>

                <div class="col" style="padding: 0px;">
                <img src="/images/CSR-initiative-stands-for-Coffee--and-Farmer-Equity.png" class="story-img" alt="">

                </div>

                <div class="col" style="padding: 0px;">
                <img src="/images/img1.png" class="story-img " style="padding-left: 0;" alt="">
                </div>

                <div class="col" style="padding: 0px;">
                <img src="/images/img11.png" class="story-img " alt="">
                </div>
            </div>
        </div>
    </div>

    <a class="carousel-control-prev" href="#gallery" role="button" data-slide="prev">
                        <div class="parent">
                            <div class="half-fade-1">
                                <img src="/images/left1.png" alt="">
                            </div>
                        </div>
                    </a>

                    <a class="carousel-control-next" href="#gallery" role="button" data-slide="next">
                        <div class="parent">
                            <div class="half-fade">
                                <img src="/images/right-arrow2.png" alt="">
                            </div>
                        </div>
                    </a>
</div>


                </div>
         

            <div class="column col-md-6">
                <div class="story">
                    <div class="row col-md-12">
                        <div class="column col-md-8 col-8">
                            <img class="story-vol-img" src="{{asset('/uploads/user/'.$story->user->avtar)}}" alt="">
                            <div class="story-text-2">{{Auth::user()->full_name}}</div>

                        </div>
                        <div class="column col-md-4 col-4">
                            <div class="story-views">
                                <img src="/images/eye.png" alt="">
                                <span>12,000 Views</span>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <span class="vol-heading">{{$story->title}}</span>
                    <br>
                    <br>
                    <span class="story-detail-text">{!!$story->description!!}</span>
                    <br><br>
                    <br>
                    <div class="row col-md-12 col-sm-12">
                        <div class="column col-md-12 col-lg-7 col-sm-12">
                            <button value="{{$story->story_id}}" class="story-detail-button invite">
                                <div class="row">
                                    <div class=" col-sm-1 col-1 col-lg-1"></div>
                                    <div class="col-md-1 col-sm-1 col-1 col-lg-1">

                                        <img src="/images/add1.png" style="height: 22px;width:22px">
                                    </div>
                                    <div class="col-md-10 col-sm-9 col-9 col-lg-9">
                                        <span class="story-detail-button-text invite">Recommend to a co-worker</span>
                                        
                                    </div>
                                    
                                </div>
                            </button>
                        </div>
                        <div class="column col-md-12 col-lg-5 col-sm-12">
                            <a href="{{url('volunteering/'.$story->mission_id)}}">
                            <div class='story-detail-button1'>
                                <span class="story-detail-button-text"> Open Mission</span>
                                <img src='/images/right-arrow.png' alt='' class='pt-9'>
                            </div>
                            </a>
                        </div>
                    </div>
                    <br>

                </div>
            </div>

        </div>
        @endforeach

</div>
<br><br>
<div class="vol">
    <div class=" vol-mission">

        <ul class="nav nav-tabs-2">
            <li class="nav-item"> <a class="nav-link nav-detail" href="#">Grow Trees</a> </li>
            <li class="nav-item"><a class="nav-link" href="#">-On the path to environment sustainbility</a></li>

        </ul>


    </div>
    <br>

    <span class="stories-detail-text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        <br><br>
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        <br><br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </span>

    <br><br>
    <span class="stories-detail-test-1">
        We use these technologies for a number of purposes, such as:
    </span>
    <ul>
        <span class="stories-detail-li-text">
            <li>
                <span>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain.</span>
            </li>
            <li> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</li>
            <span>
                excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.
            </span>
            <li> On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized</li>
            <li> But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain.</li>
            <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</li>
        </span>
    </ul><br>

    <span class="stories-detail-text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </span>
</div>
</div>
<br>
</section>
<hr>
<x-footer></x-footer>
<br>
</div>

<div class="popup">
            <div class="popup-close-btn"></div>
            <div class="popup-content"></div>
        </div>
        <div class="for-call-popup">
            <form action="{{url('InviteStory')}}" class="call-popup">
                <h3>Story Invite</h3>
                
                <input type="hidden" name="story_id" id="story_id">
                        <br>

                        <label for="mission">User</label>
                @php 
                $users=App\Models\User::all()
                @endphp
                <div><select class="story-input" aria-placeholder="Select your User"  name="user_id">
                    @foreach($users as $user)
                            <option value="{{$user->user_id}}" class="story-input">{{$user->full_name}}</option>
                    @endforeach
                        </select></div>
                        <br>

                <div class="popup-btn-contact">
                    <input type="submit" class="popup-button" name="" value="cancel" id="">
                    <input type="submit" class="contact-button-1" value="Invite" name="" id="">
                </div>
            </form>
        </div>
        <div class="overlay"></div>
        @endsection

@section('scripts')
<script>
    $(document).ready(function(){ 
        $('.cus_rating').click(function(){
           $('#form_'+$(this).attr("cusId")).submit();
        });
    })

    $(function() {
            var p = new Popup({
                popup: '.popup',
                content: '.popup-content',
                overlay: '.overlay',
            });

           

            $('.invite').click(function() {
                var story_id = $(this).val();
                console.log(story_id);
                var form = $('.for-call-popup');
                p.open(form.html());
                $.ajax({
                    type:"GET",
                    url:"/invite_story/"+story_id,
                    success:function(response){
                        console.log(response);
                        $('#story_id').val(response.invite.story_id);
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
    

       $(document).ready(function(){
        $('#gallery img').on({
            mouseover:function(){
            $(this).css({
                'cursor':'pointer',
                'border-color':'red'
            });
        },
        mouseout:function(){
            $(this).css({
                'cursor':'default',
                'border-color':'gray'
            });
        },
        click:function(){
            var imgUrl=$(this).attr('src');
            console.log(imgUrl);
            $('.story-main-img').fadeOut(400,function(){
                $(this).attr('src',imgUrl);
            }).fadeIn(400);
        }
        });
    });
</script>




@endsection