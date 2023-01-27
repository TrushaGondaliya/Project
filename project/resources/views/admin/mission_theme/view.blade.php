@extends('layouts.master')

@section('content')
<main>

    <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li class="nav-item"> <a class="nav-link nav" href="#">Mission Theme</a> </li>
        </ul>
        <div class="container-fluid px-4">
            <div class="row pt-4">
                <div class="col-lg-3 form-outline mb-4 admin-search-div">
                    <form action="{{url('admin/theme')}}" method="get">
                        <div class="admin-row">
                            <div>
                                <span class="fa fa-search"></span>
                            </div>
                            <div>
                                <input type="search" value="{{request()->input('search')}}" placeholder="Search"
                                    name="search" class="admin-search form-control ">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5" style="float: right; text-align:right">
                    <div style="float:right" class="add-admin add-goal">
                        <span class="fa fa-plus" style="color: #f88634!important;"></span>
                        <a href="{{url('admin/add-theme')}}">
                            <input type="submit" class="admin_add" value="Add">
                        </a>
                    </div>
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
                                <th>Theme Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($theme as $item)
                            <tr>
                                <td>{{$item->title}}</td>
                                <td style="color:#14c506;">{{$item->status==0 ? 'Active' : 'inactive'}}</td>
                                <td>
                                    <a href="{{url('admin/edit-theme/'.$item->mission_theme_id)}}" class="time"><span
                                            class="fas fa-edit"
                                            style="height: 25px;width:20px;padding-top:0px; color: #f88634!important;"></span></a>

                                    <button value="{{$item->mission_theme_id}}" class="delete-btn deleteThemebtn"><img
                                            style="width: 16px; height:20px;margin-top:-10px;margin-left:10px"
                                            src="\images\bin.png"></button>
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
                        <a class="page-link" href="{{url('admin/theme?page='.$theme->onFirstPage())}}"
                            aria-label="prevoius">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="{{$theme->previousPageUrl()}}" aria-label="prevoius">
                            <span aria-hidden="true">&lsaquo;</span>
                        </a>
                    </li>
                    @for($i=1;$i<=$theme->lastpage();$i++)
                        @if($i==$theme->currentPage())
                        <li class="page-item"><a class="page-link active"
                                href="{{url('admin/theme?page='.$i)}}">{{$i}}</a> </li>
                        @else
                        <li class="page-item"><a class="page-link" href="{{url('admin/theme?page='.$i)}}">{{$i}}</a>
                        </li>
                        @endif
                        @endfor
                        <li class="page-item">
                            <a class="page-link" href="{{$theme->nextPageUrl()}}" aria-label="Next">
                                <span aria-hidden="true">&rsaquo;</span>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="{{url('admin/theme?page='.$theme->lastpage())}}"
                                aria-label="Next">
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
            <form action="{{url('admin/delete-theme')}}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="popup-title" id="exampleModalLabel">Confirm Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="mission_theme_id" id="mission_theme_id">
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
$('.alert-success').fadeOut(3000);
$(document).ready(function() {
    $('.deleteThemebtn').click(function(e) {
        var mission_theme_id = $(this).val();
        $('#mission_theme_id').val(mission_theme_id);
        $('#deleteModal').modal('show');
    });
});
</script>
@endsection