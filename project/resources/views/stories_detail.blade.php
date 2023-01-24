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
                            <div class="story-text-2">{{$story->user->full_name}}</div>

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
                                <div >   
                                <img src="/images/add1.png" style="height: 22px;width:22px">
                                <span class="story-detail-button-text invite">Recommend to a co-worker</span>
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

</div>
<br><br>
<div class="vol">
    <div class=" vol-mission">
                    @php
                    $mission=App\Models\Mission::where('mission_id',$story->mission_id)->first();
                    @endphp

        <ul class="nav nav-tabs-2">
            <li class="nav-item nav-detail"><a class="nav-link">{{$mission->title}}</a></li>

        </ul>


    </div>
    <br>
    <span>{!!$mission->description!!}</span>
</div>
</div>
<br>
</section>
<hr>
<x-footer></x-footer>
<br>
</div>
@endforeach


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