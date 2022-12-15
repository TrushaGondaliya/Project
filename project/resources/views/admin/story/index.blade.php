@extends('layouts.master')


@section('content')
<main>

    <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li class="nav-item"> <a class="nav-link nav" href="#">Story List</a> </li>
        </ul>
        <div class="container-fluid px-4">
            <div class="row pt-4">
                <div class="col-lg-3 form-outline mb-4 admin-search-div">
                <form action="{{url('admin/story')}}" method="POST">
                            @csrf
                            <div class="admin-row">
                    <div>
                        <span class="fa fa-search"></span>
                    </div>
                    <div>
                        <input type="search" value="{{request()->input('search')}}" placeholder="Search" name="search" class="admin-search form-control ">
                    </div>
                </div>
                    </form>
                </div>
            </div>
            <div class="mt-4">

                <div>
                    @if(session('message'))
                    <div class="alert alert-success">{{session('message')}}</div>
                    @endif

                    <table class="table user-table">
                        <thead>
                            <tr>
                                <th>Story Title</th>
                                <th>Full Name</th>
                                <th>Mission Title</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($story as $item)
                            <tr>

                                <td>{{$item->title}}</td>
                                <td>{{$item->user->full_name}}</td>
                               
                                <td >{{$item->mission->title}}</td>

                                <td>
                                    <div >
                                        <a href="{{url('/stories_detail')}}" style="text-decoration: none;">
                                   <input type="button" class="story-td-btn" value="View">
                                        </a>
                                   <a href="{{url('admin/published/'.$item->story_id)}}" >
                                    <span class=""><svg xmlns="http://www.w3.org/2000/svg" style="margin-left: 20px;" width="26" height="26" fill="#14c506" class="bi bi-check-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                        </svg></span></a>
                                        <a href="{{url('admin/decline-story/'.$item->story_id)}}" >
                                    <span class="time">
                                        <svg xmlns="http://www.w3.org/2000/svg" style="margin-left: 20px;" width="26" height="26" fill="#f88634" class="bi bi-x-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                        </svg></span></a>

                                    <span class=" deleteCategorybtn"><img style="width: 20px; height:25px;margin-left: 20px;" src="\images\bin.png"></span></div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
    <div class="container mt-3">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="{{url('admin/story?page='.$story->onFirstPage())}}" aria-label="prevoius">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="{{$story->previousPageUrl()}}" aria-label="prevoius">
                    <span aria-hidden="true">&lsaquo;</span>
                </a>
            </li>
            @for($i=1;$i<=$story->lastpage();$i++) 
            @if($i==$story->currentPage())
            <li class="page-item"><a class="page-link active" href="{{url('admin/story?page='.$i)}}">{{$i}}</a> </li>
            @else
            <li class="page-item"><a class="page-link" href="{{url('admin/story?page='.$i)}}">{{$i}}</a> </li>
            @endif
            @endfor
                <li class="page-item">
                    <a class="page-link" href="{{$story->nextPageUrl()}}" aria-label="Next">
                        <span aria-hidden="true">&rsaquo;</span>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="{{url('admin/story?page='.$story->lastpage())}}" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
        </ul>
    </div>



        </div>
    </div>
</main>

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{url('admin/delete-category')}}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="popup-title" id="exampleModalLabel">Confirm Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="category_delete_id" id="category_id">
                    <span class="cms-pupop-text">Are you sure you want to delete this item?</span>
                </div>
                <div class="popup-btn">
                    <button type="button" class="popup-btn1" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="popup-btn2">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


@section('scripts')
<script>
    $(document).ready(function() {
        $('.deleteCategorybtn').click(function(e) {
            // $(document).on('click','',function(e){

            // e.preventDefault();

            var category_id = $(this).val();
            $('#category_id').val(category_id);
            $('#deleteModal').modal('show');
        });
    });
</script>
@endsection