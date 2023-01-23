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
                    <th>Add</th>
                </tr>
            </thead>
            @foreach($banner as $item)
        <form action="{{url('admin/update-banner/'.$item->banner_id)}}" method="POST" enctype="multipart/form-data">
            @csrf
        @method('PUT')
            <tbody>
                <td>
                    <label class="cms-label">Title</label>
                    <input class="cms-input" type="text" value="{{$item->title}}" name="title">
                    <label class="cms-label">Description</label>
                    <div class="cms-textarea">
                <textarea name="text" class="text-area" id="editor" cols="" rows="">{{$item->text}}</textarea>
            </div>
            <label class="cms-label">Image</label>
            <input class="cms-input" type="file" value="{{$item->image}}" name="image" id="image">
          
            
                </td>
            </tbody>
            @endforeach

        </table>
        <div class="cms_btn">
        <a href="banner" style="text-decoration: none;">
                <input type="button" class="cms_btn1" value="Cancel" name="" id="">
            </a>                <input type="submit" class="cms_btn2" name="" value="Save" id="">
                </div>
                </form>
        

    </div>
</div>

@endsection