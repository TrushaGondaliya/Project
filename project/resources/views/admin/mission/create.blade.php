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

<div class="container">
@if($errors->any())
                            <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                            <div>{{$error}}</div>
                            @endforeach
                            </div>
                           
                            @endif
        <h4>Add New Mission</h4>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-6 col-6">
                <span class="cms-label">Country</span>
                <select name="" class="cms-input" id="">
                    <option value="">Country 1</option>
                    <option value="">Country 2</option>
                    <option value="">Country 3</option>
                    <option value="">Country 4</option>
                </select>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 col-6">
                <span class="cms-label">City</span>
                <select name="" id="" class="cms-input">
                <option value="">City 1</option>
                    <option value="">City 2</option>
                    <option value="">City 3</option>
                    <option value="">City 4</option>
                    </select>
            </div>
        </div>
        <br>

        <span class="cms-label">Mission Title</span>

        <input type="text" class="cms-input" placeholder="Enter Mission Title"><br><br>
        <span class="cms-label">Mission Description</span>
        <div class="cms-textarea">
                <textarea name="description" class="text-area" id="editor" cols="" rows=""></textarea>
            </div><br>
       
        <span class="cms-label">Mission Organization Name</span>
        <input type="text" class="cms-input" placeholder="Enter Mission organizarion name"><br><br>

        <span class="cms-label">Mission Organization Detail</span>
        <div class="cms-textarea">
                <textarea name="description" class="text-area" id="editor" cols="" rows=""></textarea>
            </div><br><br>
        <span class="cms-label">Start Date</span>
        <input type="date" class="cms-input" placeholder="Enter start Date"><br><br>
        <span class="cms-label">End Date</span>
        <input type="date" class="cms-input" placeholder="Enter End Date"><br><br>
        <span class="cms-label">Total seats</span>
        <input type="text" class="cms-input" placeholder="Enter total seats"><br><br>
        <span class="cms-label">Mission Registration Deadline</span>
        <input type="text" class="cms-input" placeholder="Enter Mission Registration Deadline"><br><br>
        <span class="cms-label">Mission Theme</span>
                <select name="" id="" class="cms-input">
                <option value="">Select Mission Theme</option>
                    <option value="">Mission 1</option>
                    <option value="">Mission 2</option>
                    <option value="">Mission 3</option>
                    </select><br><br>

                    <span class="cms-label">Mission Skills</span>
                <select name="" id="" class="cms-input">
                <option value="" class="cms-input">Select Mission Skills</option>
                    <option value="">Skill 1</option>
                    <option value="">skill 2</option>
                    <option value="">skill 3</option>
                    </select><br><br>

                    <Span class="cms-label">Uploads Your Photos</Span><br>
                <div class="uploadOuter">
                
<div class="dragBox drag-nav"  >
<img src="\images/upload.png" class="mission-img" alt="">
  <span class="cms-text">Upload Image here</span>
<input type="file" onChange="dragNdrop(event)"  ondragover="drag()" ondrop="drop()" id="uploadFile"  />
</div>
                </div>
<div id="preview"></div><br>

<Span class="cms-label">Mission Documents</Span><br>
                <div class="uploadOuter">
<div class="dragBox drag-nav" >
    
  <img src="\images/upload.png" class="mission-img" alt="">
  <span class="cms-text-1">Drag and drop resume here or click*</span>
<input type="file" onChange="dragNdrop(event)"  ondragover="drag()" ondrop="drop()" id="uploadFile"  />
</div>
</div>
<div id="preview"></div>
<span class="popup-text-2">Allowed file types:PDF,Doc</span><br><br>

<span class="cms-label">Mission Availability</span>
                <select name="" id="" class="cms-input">
                <option value="" class="cms-input">Select Availability</option>
                    <option value="">Availability 1</option>
                    <option value="">Availability 2</option>
                    <option value="">Availability 3</option>
                    </select><br><br>



           <div class="cms_btn">
                <input type="submit" class="cms_btn1" name="" value="cancel" id="">
                <input type="submit" class="cms_btn2" value="Submit"  name="" id="">
                </div>

        </div>

        @endsection