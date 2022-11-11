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
    <div>
        <table class="cms-table">
            <thead>
                <tr>
                    <th>Add</th>
                </tr>
            </thead>
            <tbody>
                <td>
                    <label class="cms-label">Title</label>
                    <input class="cms-input">
                    <label class="cms-label">Description</label>
                    <div class="cms-textarea">
                <textarea name="" class="text-area" id="editor" cols="" rows=""></textarea>
            </div>
            <label class="cms-label">Slug</label>
            <input class="cms-input">
            <label class="cms-label">Status</label>
            <select class="cms-input">
            <option value=""></option>
                <option value="1">1</option>
                <option value="0">0</option>
            </select>
            
                </td>
            </tbody>
        </table>
        <div class="cms_btn">
                <input type="submit" class="cms_btn1" value="Cancel" name="" id="">
                <input type="submit" class="cms_btn2" name="" value="Save" id="">
                </div>
        

    </div>
</div>

@endsection