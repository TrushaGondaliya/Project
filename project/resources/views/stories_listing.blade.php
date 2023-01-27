@extends('layouts.app')

@section('content')


<hr style="padding:0px; margin:0px;border-width:0;color:gray;background-color:gray">

<div class="container-fluid" style="padding: 0;">
    <img class="image" src="images/Grow-Trees-On-the-path-to-environment-sustainability.png" style="width: 100%; height:400px;" alt="">

    <div class="middle">
        <div class="above-image">
            <div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus laudantium in nisi dolor tempore vero ullam odio quia ipsam. Iure, deleniti autem. Iusto odio voluptatem recusandae rerum, ipsum fugiat accusantium.
            </div>
            <div>
                <div class="d-flex align-items-center justify-content-center">
                    <a href="{{url('share')}}">
                    <div class='image-above-button'>Share your story
                        <!-- <img src='images/right-arrow.png' style="color: white;" alt=''> -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                    </div>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>


<section>
    <div class="container-fluid">
        <br><br>
        <div>
            <div class="row abc">
                @foreach($story as $item)

                <!-- card-1 -->

                <div class="col-lg-4 col-md-4 col-sm-4 " style="margin-top:20px">
                    <div class="card-box" style="width: 100%;height:100%;padding-bottom:20px">
                        <div class="container-fluid">
                            <div class="card-image">
                            @php
                    $media=App\Models\Storymedia::where('story_id',$item->story_id)->first();
                    @endphp
                    @if(is_null($media))
                                <img src="/images/image2.png" class="image-1">
                                @else
                                <img src="/images/{{$media->path}}" class="image-1"  alt="...">
                                @endif
                                <div class="d-flex four-txt justify-content-center">
                                    <div class="theme">{{$item->mission->theme->title}}</div>
                                </div>
                            </div>
                            <div class="text-above-image">
                                <a href="{{url('stories_detail/'.$item->story_id)}}">
                                <div class='image-above-button1'>View Details
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                    </svg>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="card-body-1">
                            <h5 style="font-size:25px">{{$item->title}}</h5>
                            <div class="list-des">
                            <p class="card-text" style="color:black;">{!!preg_split('/<br[^>]*>/i', $item->description)[0] !!}</p>
                            </div>
                            <div class="">
                                <img src="{{asset('/uploads/user/'.$item->user->avtar)}}" style="border-radius: 50%;height:50px;width:50px" alt="">
                                <span>{{$item->user->full_name}}</span>
                            </div>
                            <div class="">
                                <span>Published At : {{$item->published_at->format('d/m/Y')}}</span>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
</section>

<br><br>
<div class="container mt-3">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="{{url('stories_listing?page='.$story->onFirstPage())}}" aria-label="prevoius">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item">
               
                <a class="page-link" aria-disabled="false" href="{{$story->previousPageUrl()}}" aria-label="prevoius">
                    <span aria-hidden="true">&lsaquo;</span>
                </a>
            </li>
            @for($i=1;$i<=$story->lastpage();$i++) 
            @if($i==$story->currentPage())
            <li class="page-item"><a class="page-link active" href="{{url('stories_listing?page='.$i)}}">{{$i}}</a> </li>
            @else
            <li class="page-item"><a class="page-link" href="{{url('stories_listing?page='.$i)}}">{{$i}}</a> </li>
            @endif
            @endfor
                <li class="page-item">
                    <a class="page-link" aria-disabled="false" href="{{$story->nextPageUrl()}}" aria-label="Next">
                        <span aria-hidden="true">&rsaquo;</span>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="{{url('stories_listing?page='.$story->lastpage())}}" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
        </ul>
    </div>
<br><br><br><br><br><br><br>
<hr>
<x-footer></x-footer>
<br>
@endsection