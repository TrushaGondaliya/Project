@extends('layouts.app')

@section('content')

<div class="body-1">
        <br><br>

        <div class="share">
            @if(Session('message'))
            <div class="alert alert-success">{{Session('message')}}</div>
            @endif
            <form action="{{url('add-story')}}" method="POST" enctype="multipart/form-data">
                @csrf
            <span class="story-heading">Share your story</span>
            <br><br><br>

            <div class="row">

                <div class="col-lg-6  col-mb-6 col-sm-6 col-6">
                    <Span class="story-text">Select Mission</Span>
                    <div><select class="story-input" aria-placeholder="Select your Mission" name="mission_id" id="">
                            <option value="" class="story-input">Select Your Mission</option>
                            @php
                            $missions=App\Models\Mission::all()
                            @endphp
                            @foreach($missions as $mission)
                            <option value="{{$mission->mission_id}}">{{$mission->title}}</option>
                            @endforeach
                        </select></div>
                </div>
                <div class="col-lg-6 col-mb-6 col-6 col-sm-6">
                    <Span class="story-text">My Story Title</Span>
                    <div>
                        <input type="text" name="title" class="story-input" placeholder="Enter Story Title">
                    </div>
                </div>
                <br><br>
            </div>
            <br>
            <Span class="story-text">My Story</Span><br>
            <div>
                <textarea name="description" class="text-area" id="editor" cols="" rows=""></textarea>
            </div>
            <br>
            <br>
            <div>
                <Span class="story-text">Uploads Your Photos</Span><br>
                <div class="uploadOuter">
                    <span class="dragBox">
                        <img src="images/drag-and-drop.png" alt="">
                        <input type="file" onChange="dragNdrop(event)" name="image[]" ondragover="drag()" ondrop="drop()" id="uploadFile" multiple/>
                    </span>
                </div>
                <div id="preview"></div><br>

                <div class="row">
                    <div class="col-xl-1 col-lg-2 col-md-3 col-4 " id="wrapper">
                        <div style="position: relative;">
                            <div class="remove-img">
                                <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                            </div>
                            <div class="close-wrapper">
                                <img src="images/Education-Supplies-for-Every--Pair-of-Shoes-Sold.png" class="story-upload" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-2 col-md-3 col-4" id="wrapper">
                        <div style="position: relative;">
                            <div class="remove-img">
                                <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                            </div>
                            <div class="close-wrapper">
                                <img src="images/CSR-initiative-stands-for-Coffee--and-Farmer-Equity.png" class="story-upload" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-2 col-md-3 col-4" id="wrapper">
                        <div style="position: relative;">
                            <div class="remove-img">
                                <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                            </div>
                            <div class="close-wrapper">
                                <img src="images/Grow-Trees-On-the-path-to-environment-sustainability.png" class="story-upload" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-2 col-md-3 col-4" id="wrapper">
                        <div style="position: relative;">
                            <div class="remove-img">
                                <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                            </div>
                            <div class="close-wrapper">
                                <img src="images/image1.png" class="story-upload" alt="">

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-2 col-md-3 col-4" id="wrapper">
                        <div style="position: relative;">
                            <div class="remove-img">
                                <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                            </div>
                            <div class="close-wrapper">
                                <img src="images/img.png" class="story-upload" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-2 col-md-3 col-4" id="wrapper">
                        <div style="position: relative;">
                            <div class="remove-img">
                                <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                            </div>
                            <div class="close-wrapper">
                                <img src="images/img1.png" class="story-upload" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-2 col-md-3 col-4" id="wrapper">
                        <div style="position: relative;">
                            <div class="remove-img">
                                <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                            </div>
                            <div class="close-wrapper">
                                <img src="images/img11.png" class="story-upload" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-2 col-md-3 col-4" id="wrapper">
                        <div style="position: relative;">
                            <div class="remove-img">
                                <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                            </div>
                            <div class="close-wrapper">
                                <img src="images/Plantation-and-Afforestation-programme.png" class="story-upload" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-2 col-md-3 col-4" id="wrapper">
                        <div style="position: relative;">
                            <div class="remove-img">
                                <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                            </div>
                            <div class="close-wrapper">
                                <img src="images/Animal-welfare-&-save-birds-campaign.png" class="story-upload" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-2 col-md-3 col-4" id="wrapper">
                        <div style="position: relative;">
                            <div class="remove-img">
                                <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                            </div>
                            <div class="close-wrapper">
                                <img src="images/img11.png" class="story-upload" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-2 col-md-3 col-4" id="wrapper">
                        <div style="position: relative;">
                            <div class="remove-img">
                                <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                            </div>
                            <div class="close-wrapper">
                                <img src="images/Education-Supplies-for-Every--Pair-of-Shoes-Sold.png" class="story-upload" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-2 col-md-3 col-4" id="wrapper">
                        <div style="position: relative;">
                            <div class="remove-img">
                                <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                            </div>
                            <div class="close-wrapper">
                                <img src="images/Grow-Trees-On-the-path-to-environment-sustainability.png" class="story-upload" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-2 col-md-3 col-4" id="wrapper">
                        <div style="position: relative;">
                            <div class="remove-img">
                                <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                            </div>
                            <div class="close-wrapper">
                                <img src="images/img.png" class="story-upload" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <a href="stories_listing" style="text-decoration:none">
                <input type="button" value="cancel" name="cancel" class="share-button">
</a>
                <input type="button" value="save" name="save" class="button-1">
                <input type="submit" value="submit" name="submit" class="button-1">

            </div>
            </form>
        </div>


    </div>
    <br><br>
    <hr>
    <x-footer></x-footer>
@endsection


@section('scripts')
<script src="https://cdn.tiny.cloud/1/2rhq7jsykq3ivygjslzmxricmi3x9kqp0ca6ihkwe585n1iq/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<script>
$('.alert-success').fadeOut(3000);

    tinymce.init({
        selector: 'textarea#editor',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: ' bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        menubar: false
    });

    function dragNdrop(event) {
        var fileName = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("preview");
        var previewImg = document.createElement("img-9");
        previewImg.setAttribute("src", fileName);
        preview.innerHTML = "";
        preview.appendChild(previewImg);
    }

    function drag() {
        document.getElementById('uploadFile').parentNode.className = 'draging dragBox';
    }

    function drop() {
        document.getElementById('uploadFile').parentNode.className = 'dragBox';
    }

    // for remove image

    $('.remove-img').click(function() {
        $(this).parent().parent().remove();
    })
</script>
@endsection