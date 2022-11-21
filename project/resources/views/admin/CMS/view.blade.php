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
                    <a href="{{url('admin/add-cms')}}"><button class="admin_add">Add</button></a>
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
                                <th>Title</th>
                                <th>Status</th>
                                <th>Action</th>
                               
                                
                            </tr>
                            </thead>
                            <tbody>
                       @foreach($cms as $item)
                            <tr> 
                                <td>{{$item->title}}</td>
                                <td style="color:#14c506;">{{$item->status==0 ? 'Active' : 'Anactive'}}</td>
                                <td><button value="{{$item->cms_page_id}}"  class="delete-btn deleteCategorybtn"><img style="width: 16px; height:20px;margin-top:-10px;margin-left:10px" src="\images\bin.png"></button>
                                  <a href="{{url('admin/cms-edit/'.$item->cms_page_id)}}"><i class="fas fa-edit" style="height: 20px;width:20px; color: #f88634!important;"></i></a></td>    
                            </tr>
                            @endforeach
                           </tbody> 
                        </table>
                        </div>
                       </div>
                       <div class="container mt-3">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="{{url('admin/cms?page=1')}}" aria-label="prevoius">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="prevoius">
                    <span aria-hidden="true">&lsaquo;</span>
                </a>
            </li>
            @for($i=1;$i<=$max_count;$i++)
            <li class="page-item"><a class="page-link" href="{{url('admin/cms?page='.$i)}}">{{$i}}</a> </li>
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

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="{{url('admin/delete-cms')}}" method="POST">
            @csrf
      <div class="modal-header">
        <h5 class="popup-title" id="exampleModalLabel">Confirm Delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="cms_page_id" id="cms_page_id">
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


        <!--end popup box for change Password -->

        @section('scripts')
        <script>
    
    $(document).ready(function(){
        $('.deleteCategorybtn').click(function(e){
            // $(document).on('click','',function(e){

            // e.preventDefault();

            var cms_page_id=$(this).val();
            $('#cms_page_id').val(cms_page_id);
            $('#deleteModal').modal('show');
        });
    });
</script>
    @endsection