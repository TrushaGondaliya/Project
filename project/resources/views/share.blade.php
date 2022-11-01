<x-header></x-header>
<script src="https://cdn.tiny.cloud/1/2rhq7jsykq3ivygjslzmxricmi3x9kqp0ca6ihkwe585n1iq/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    tinymce.init({
        selector: 'textarea#editor',
        skin: 'bootstrap',
        toolbar: ' bold italic strikethrough blockquote bullist numlist backcolor',
        menubar: false,
    });
</script>


<link rel="stylesheet" href="{{url('css/index.css')}}">
</head>

<body>
    <div class="body-1">

        <!-- top navbar -->

        <x-top-nav></x-top-nav>

        <!-- top nav end -->
        <br><br>

        <div class="share">
            <span class="story-heading">Share your story</span>
            <br><br><br>

            <div class="row">

                <div class="col-lg-4  col-mb-4 col-sm-4 col-4">
                    <Span class="story-text">Select Mission</Span>
                    <div><select class="story-input" aria-placeholder="Select your Mission" id="">
                            <option value="" class="story-input">Select Your Mission</option>
                            <option value="">mission1</option>
                            <option value="">mission2</option>
                            <option value="">mission3</option>
                            <option value="">mission4</option>
                        </select></div>
                </div>
                <div class="col-lg-4 col-mb-4 col-4 col-sm-4">
                    <Span class="story-text">My Story Title</Span>
                    <div>
                        <input type="text" class="story-input" placeholder="Enter Story Title">
                    </div>
                </div>
                <div class="col-lg-4 col-mb-4 col-4 col-4">
                    <Span class="story-text">Select Date</Span>
                    <div>
                        <input type="date" class="story-input" placeholder="Select Date">
                    </div>
                </div>

                <br><br>


            </div>
            <br>
            <Span class="story-text">My Story</Span><br>
            <div>
                <textarea name="" class="text-area" id="editor" cols="" rows=""></textarea>
            </div>
            <br>
            <Span class="story-text">Enter Video URL</Span><br>
            <div>
                <input type="text" class="story-input" placeholder="Enter URL">
            </div>
            <br>
            <div>
                <Span class="story-text">Uploads Your Photos</Span><br>
                <div class="uploadOuter">
                    <span class="dragBox">
                        <img src="images/drag-and-drop.png" alt="">
                        <input type="file" onChange="dragNdrop(event)" ondragover="drag()" ondrop="drop()" id="uploadFile" />
                    </span>
                </div>
                <div id="preview"></div><br>

                <div class="row">
                    <div class="col-lg-1 col-md-3 col-4 " id="wrapper">
                        <div style="position: relative;">
                            <div class="remove-img">
                                <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                            </div>
                            <div class="close-wrapper">
                                <img src="images/Education-Supplies-for-Every--Pair-of-Shoes-Sold.png" class="story-upload" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-3 col-4" id="wrapper">
                        <div style="position: relative;">
                            <div class="remove-img">
                                <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                            </div>
                            <div class="close-wrapper">
                                <img src="images/CSR-initiative-stands-for-Coffee--and-Farmer-Equity.png" class="story-upload" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-1 col-md-3 col-4" id="wrapper">
                        <div style="position: relative;">
                            <div class="remove-img">
                                <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                            </div>
                            <div class="close-wrapper">
                                <img src="images/Grow-Trees-On-the-path-to-environment-sustainability.png" class="story-upload" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-3 col-4" id="wrapper">
                        <div style="position: relative;">
                            <div class="remove-img">
                                <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                            </div>
                            <div class="close-wrapper">
                                <img src="images/image1.png" class="story-upload" alt="">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-3 col-4" id="wrapper">
                        <div style="position: relative;">
                            <div class="remove-img">
                                <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                            </div>
                            <div class="close-wrapper">
                                <img src="images/img.png" class="story-upload" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-3 col-4" id="wrapper">
                        <div style="position: relative;">
                            <div class="remove-img">
                                <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                            </div>
                            <div class="close-wrapper">
                                <img src="images/img1.png" class="story-upload" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-1 col-md-3 col-4" id="wrapper">
                        <div style="position: relative;">
                            <div class="remove-img">
                                <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                            </div>
                            <div class="close-wrapper">
                                <img src="images/img11.png" class="story-upload" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-1 col-md-3 col-4" id="wrapper">
                        <div style="position: relative;">
                            <div class="remove-img">
                                <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                            </div>
                            <div class="close-wrapper">
                                <img src="images/Plantation-and-Afforestation-programme.png" class="story-upload" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-3 col-4" id="wrapper">
                        <div style="position: relative;">
                            <div class="remove-img">
                                <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                            </div>
                            <div class="close-wrapper">
                                <img src="images/Animal-welfare-&-save-birds-campaign.png" class="story-upload" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-3 col-4" id="wrapper">
                        <div style="position: relative;">
                            <div class="remove-img">
                                <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                            </div>
                            <div class="close-wrapper">
                                <img src="images/img11.png" class="story-upload" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-3 col-4" id="wrapper">
                        <div style="position: relative;">
                            <div class="remove-img">
                                <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                            </div>
                            <div class="close-wrapper">
                                <img src="images/Education-Supplies-for-Every--Pair-of-Shoes-Sold.png" class="story-upload" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-3 col-4" id="wrapper">
                        <div style="position: relative;">
                            <div class="remove-img">
                                <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                            </div>
                            <div class="close-wrapper">
                                <img src="images/Grow-Trees-On-the-path-to-environment-sustainability.png" class="story-upload" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-3 col-4" id="wrapper">
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

                <input type="submit" value="cancel" name="cancel" class="cancel">

                <input type="submit" value="save" name="save" class="button-1">
                <input type="submit" value="submit" name="submit" class="button-1">

            </div>
        </div>


    </div>
    <br><br>
    <hr>
    <x-footer></x-footer>
    <br>
</body>




<!-- drag and drop image js -->

<script>
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