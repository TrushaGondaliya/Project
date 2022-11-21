@extends('layouts.master')


@section('content')
<script src="https://cdn.tiny.cloud/1/2rhq7jsykq3ivygjslzmxricmi3x9kqp0ca6ihkwe585n1iq/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>


<script>
    tinymce.init({
      selector: 'textarea#editor',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      toolbar: ' bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
      menubar:false
    });
  </script>
<div class="container-fluid">
@if($errors->any())
                            <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                            <div>{{$error}}</div>
                            @endforeach
                            </div>
                           
                            @endif
    <div>
        <table class="cms-table">
            <thead>
                <tr>
                    <th>Edit</th>
                </tr>
            </thead>
            @foreach($cms as $item)
            <tbody>
                <td>
                    <form action="{{url('admin/update-cms/'.$item->cms_page_id)}}" method="post">
                        @csrf
                        @method('PUT')
                    <label class="cms-label">Title</label>
                    <input class="cms-input" type="text" value="{{$item->title}}" name="title">
                    <label class="cms-label">Description</label>
                    <div class="cms-textarea">
                <textarea name="description" class="text-area"  id="editor" cols="" rows="">{{$item->description}}</textarea>
            </div>
            <label class="cms-label">Slug</label>
            <input class="cms-input" type="text" value="{{$item->slug}}" name="slug">
            <label class="cms-label" >Status</label>
            <select class="cms-input" name="status">
                <option value="{{$item->status}}">{{$item->status}}</option>
                @if($item->status==0){
                    <option value="1">1</option>
                }
                @elseif($item->status==1)
                <option value="0">0</option>

                @endif

            </select>
                </td>
            </tbody>
            @endforeach
        </table>
        <div class="cms_btn">
                <input type="button" class="cms_btn1" value="Cancel" name="" id="">
                <input type="submit" class="cms_btn2" name="" value="Save" id="">
                </form>

                </div>
        

    </div>
</div>

@endsection