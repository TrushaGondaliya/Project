@extends('layouts.master')


@section('content')
<main>

<div class="container-fluid">
        <ul class="nav nav-tabs">
            <li class="nav-item"> <a class="nav-link nav" href="#">CMS Page</a> </li>
        </ul>
        <div class="container-fluid px-4">
            <div class="row pt-4">
            <div class="col-lg-3 form-outline mb-4 admin-search-div">
                <label class="fa fa-search"></label>
                <input type="search" placeholder="Search" class="admin-search" >
            </div>
            <div class="col-lg-8" style="float: right; text-align:right">
            <div style="float:right" class="add-admin add-goal">
      <span class="fa fa-plus" style="color: #f88634!important;"></span>
                    <input type="submit" class="admin_add" value="Add">
                </div>
           
            </div>
            </div>
                       <div class="mt-4" >
                      
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
                                <td style="color:#14c506;">{{$item->status==0 ? 'Active' : 'Anactive'}}</td>
                             
                                <td><a href=""><img style="width: 16px; height:20px;margin-right:10px" src="\images\bin.png"></a>   <span class="time"><img  style="width: 20px; height:20px;cursor:pointer" src="\images\edit.jpg"></span></td>
                                
                            </tr>
                            @endforeach
                           </tbody>
                           
                        </table>
                        </div>
                       </div>
                       <div class="container mt-3">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="{{url('admin/user?page=1')}}" aria-label="prevoius">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="prevoius">
                    <span aria-hidden="true">&lsaquo;</span>
                </a>
            </li>
            @for($i=1;$i<=$max_count;$i++)
            <li class="page-item"><a class="page-link" href="{{url('admin/user?page='.$i)}}">{{$i}}</a> </li>
            @endfor
          
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&rsaquo;</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="{{url('admin/user?page='.$max_count)}}" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </div>

                        
                        
</div>
        </div>
</main>
@endsection