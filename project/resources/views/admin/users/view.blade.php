@extends('layouts.master')


@section('content')


    <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li class="nav-item"> <a class="nav-link nav" href="#">User List</a> </li>
        </ul>
        <div class="container-fluid px-4">
            <div class="row pt-4">

                <div class="col-lg-3 col-md-3 form-outline mb-4 admin-search-div">
                    <form action="{{url('admin/user')}}" method="get">
                      
                        <div class="admin-row">
                        <div>
                        <span class="fa fa-search"></span></div>
                        <div>
                        <input type="search" value="{{request()->input('search')}}" placeholder="Search" name="search" class="admin-search form-control ">
                        </div></div>
                    </form>
                </div>


                <div class="col-lg-5 col-md-5" style="float: right; text-align:right">
                    <div style="float:right" class="add-admin add-goal">

                        <span class="fa fa-plus" style="color: #f88634!important;"></span>
                        <a href="{{url('admin/add-user')}}">
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
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Employee Id</th>
                                <th>Department</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $item)
                            <tr>

                                <td>{{$item->first_name}}</td>
                                <td>{{$item->last_name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->employee_id}}</td>

                                <td>{{$item->department}}</td>
                                <td style="color:#14c506;">{{$item->status==0 ? 'Inactive' : 'Active'}}</td>

                                <td>
                                    <a href="{{url('admin/edit-user/'.$item->user_id)}}" class="time"><span class="fas fa-edit" style="height: 25px;width:20px;padding-top:0px; color: #f88634!important;"></span></a>

                                    <button value="{{$item->user_id}}" class="delete-btn deleteUserbtn"><img style="width: 16px; height:20px;margin-bottom:0px;margin-left:0px" src="\images\bin.png"></button>
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
                <a class="page-link" href="{{url('admin/user?page='.$users->onFirstPage())}}" aria-label="prevoius">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="{{$users->previousPageUrl()}}" aria-label="prevoius">
                    <span aria-hidden="true">&lsaquo;</span>
                </a>
            </li>
            @for($i=1;$i<=$users->lastpage();$i++) 
            @if($i==$users->currentPage())
            <li class="page-item"><a class="page-link active" href="{{url('admin/user?page='.$i)}}">{{$i}}</a> </li>
            @else
            <li class="page-item"><a class="page-link" href="{{url('admin/user?page='.$i)}}">{{$i}}</a> </li>
            @endif
            @endfor
                <li class="page-item">
                    <a class="page-link" href="{{$users->nextPageUrl()}}" aria-label="Next">
                        <span aria-hidden="true">&rsaquo;</span>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="{{url('admin/user?page='.$users->lastpage())}}" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
        </ul>
    </div>




        </div>
    </div>


<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{url('admin/delete-user')}}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="popup-title" id="exampleModalLabel">Confirm Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="user_id" id="user_id">
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
        $('.deleteUserbtn').click(function(e) {
            // $(document).on('click','',function(e){

            // e.preventDefault();

            var user_id = $(this).val();
            $('#user_id').val(user_id);
            $('#deleteModal').modal('show');
        });
    });
</script>
@endsection