@extends('layouts.master')


@section('content')
<main>

<div class="container-fluid">
        <ul class="nav nav-tabs">
            <li class="nav-item"> <a class="nav-link nav" href="#">CMS Page</a> </li>
        </ul>
        <div class="container-fluid px-4">
            <div class="row pt-4">
            <div class="col-lg-3 form-outline mb-4">
                <input type="search" class="form-control" id="datatable-search-input">
                <label class="form-label" for="datatable-search-input">search</label>
            <div id="datatable"></div>

            </div>
            <div class="col-lg-9" style="float: right; text-align:right">
                <button type="submit">Add</button>
            </div>
            </div>
                       <div class="mt-4" >
                      
                        <div>
                        @if(session('message'))
                        <div class="alert alert-success">{{session('message')}}</div>
                        @endif

                        <table class="table table-bordered">
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
                                <td style="color:green ;">{{$item->status==0 ? 'Active' : 'Anactive'}}</td>
                             
                                <td>
                                    <a href="{{url('admin/users/')}}" class="btn btn-success">Edit</a>
                                </td>
                                
                            </tr>
                            @endforeach
                           </tbody>
                           
                        </table>
                        </div>
                       </div>

                        
                        
</div>
        </div>
</main>
@endsection