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
        <form action="{{url('admin/add')}}" method="POST" enctype="multipart/form-data">
            @csrf
        
        <table class="cms-table">
            <thead>
                <tr>
                    <th>Add</th>
                </tr>
            </thead>
            <tbody>
                <td>
                    <label class="cms-label">Title</label>
                    <input class="cms-input" type="text" name="title">
                    <label class="cms-label">Description</label>
                    <div class="cms-textarea">
                <textarea name="text" class="text-area" id="editor" cols="" rows=""></textarea>
            </div>
            <label class="cms-label">Image</label>
            <input class="cms-input" type="file" name="image" id="image">
          
            
                </td>
            </tbody>
        </table>
        <div class="cms_btn">
                <input type="button" class="cms_btn1" value="Cancel" name="" id="">
                <input type="submit" class="cms_btn2" name="" value="Save" id="">
                </div>
                </form>
        

    </div>
</div>

@endsection