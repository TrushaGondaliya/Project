<x-header></x-header>

<?php session_start() ?>

<link rel="stylesheet" href="{{url('css/index.css')}}">
</head>


<div class="body-3">

    <!-- top navbar -->

    <x-top-nav></x-top-nav>
    <br>

    <section>
        <div>
            <div class="container">
                <div class="row col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="edit-profile">
                            <img src="images/user-img-large.png" class="profile-img" alt="">
                            <div class="profile-text">Evan Donohue</div>
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <div class="edit-profile-1">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"> <a class="nav-link nav-1" href="#">Basic Information</a> </li>
                            </ul>
                            <br>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <span class="story-input-text">Name*</span>
                                    <div>
                                        <input type="text" name="name" placeholder="Enter your name" class="edit-input" id="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <span class="story-input-text">Surname*</span>
                                    <div>
                                        <input type="text" name="Surname" placeholder="Enter your surname" class="edit-input" id="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <span class="story-input-text">Employee ID*</span>
                                    <div>
                                        <input type="text" name="emp_id" placeholder="Enter your Employee ID" class="edit-input" id="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <span class="story-input-text">Manager*</span>
                                    <div>
                                        <input type="text" name="manager" placeholder="Enter your Manager details" class="edit-input" id="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <span class="story-input-text">Title*</span>
                                    <div>
                                        <input type="text" name="title" placeholder="Enter your Title" class="edit-input" id="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <span class="story-input-text">Department*</span>
                                    <div>
                                        <input type="text" name="dept" placeholder="Enter your Department Name" class="edit-input" id="">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <span class="story-input-text">My Profile*</span>
                                <div class="story-input-div">
                                    <span class="story-input-div-text">Enter Your Comments...</span>
                                </div>
                            </div>
                            <div>
                                <span class="story-input-text">Why I Volunteer?</span>
                                <div class="story-input-div">
                                    <span class="story-input-div-text">Enter Your Comments...</span>
                                </div>
                            </div>


                            <ul class="nav nav-tabs">
                                <li class="nav-item"> <a class="nav-link nav-1" href="#">Address Information</a> </li>
                            </ul><br>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <span class="story-input-text">City</span>
                                    <div>
                                        <input type="text" name="city" placeholder="Enter your City" class="edit-input" id="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <span class="story-input-text">Country*</span>
                                    <div>
                                        <input type="text" name="country" placeholder="Enter your country" class="edit-input" id="">
                                    </div>
                                </div>
                            </div>

                            <ul class="nav nav-tabs">
                                <li class="nav-item"> <a class="nav-link nav-1" href="#">Address Information</a> </li>
                            </ul><br>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <span class="story-input-text">Availability</span>
                                    <div>
                                        <select name="" class="edit-input" id="">
                                            <option value="">Select your availability</option>
                                            <option value="">availability 1</option>
                                            <option value="">availability 2</option>
                                            <option value="">availability 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <span class="story-input-text">Linkedin</span>
                                    <div>
                                        <input type="text" name="country" placeholder="Enter your linkedin URL" class="edit-input" id="">
                                    </div>
                                </div>
                            </div>

                            <ul class="nav nav-tabs">
                                <li class="nav-item"> <a class="nav-link nav-1" href="#">My Skill</a> </li>
                            </ul><br>

                            <div>
                                <span class="story-input-text">Why I Volunteer?</span>
                                <div class="story-input-div-1">
                                    <span class="story-input-div-text">Anthropology</span><br>
                                    <span class="story-input-div-text">Archeology</span><br>
                                    <span class="story-input-div-text">Astronomy</span><br>
                                    <span class="story-input-div-text">Computer Science</span><br>
                                    <span class="story-input-div-text">Environmental Science</span><br>
                                    <span class="story-input-div-text">History</span>
                                </div>
                            </div>

                            <div class="edit-profile-button">
                                Add Skills
                            </div>

                            <div>
                                <button class="edit-profile-button-save">Save</button>
                            </div>





                        </div>


                    </div>
                </div>
            </div>
        </div>

        <!-- popup box for change Password -->
        <div class="popup add-skill">
            <div class="popup-close-btn"></div>
            <div class="popup-content"></div>
        </div>
        <div class="for-call-popup">
            <h4>Add Your Skill</h4>
            <div class="row">
                <div class="col-lg-5 col-5 col-sm-5 col-md-5 popup-add-skill">
                    <div class="Anthropology-Archeology-Astronomy-Computer-Science-Environmenta">
                        <div>Anthropology</div>
                        <div>Archeology</div>
                        <div class="grey">Astronomy</div>
                        <div>Computer Science</div>
                        <div class="grey">Environmental Science</div>
                        <div class="grey">History</div>
                        <div>Library Sciences</div>
                        <div class="grey">Mathematics</div>
                        <div>Music Theory</div>
                        <div>Research</div>
                        <div>Administrative Support</div>
                        <div>Customer Service</div>
                        <div class="grey">Data Entry</div>
                        <div>Executive Admin</div>
                        <div>Office Management</div>
                        <div>Office Reception</div>
                        <div>Program Management</div>
                        <div>Transactions</div>
                        <div class="grey">Agronomy</div>
                        <div>Animal Care / Handling</div>
                        <div>Animal Therapy</div>
                        <div>Aquarium Maintenance</div>
                        <div>Botany</div>
                        <div>Environmental Education</div>
                        <div>Environmental Policy</div>
                        <div>Farming</div>
                    </div>
                </div>
                <div class="col-lg-1 col-1 col-sm-1 col-md-1">
                    <div style="text-align: center;margin-top:275px">
                        <img src="images/right-arrow1.png" alt=""><br>
                        <img src="images/left.png" alt="">

                    </div>
                </div>
                <div class="col-lg-5 col-5 col-sm-5 col-md-5 popup-add-skill-1">
                    <div class="Anthropology-Archeology-Astronomy-Computer-Science-Environmenta">
                        <div>Astronomy</div>
                        <div>Environmental Science</div>
                        <div>History</div>
                        <div>Mathematics</div>
                        <div>Data Entry</div>
                        <div>Agronomy</div>
                    </div>
                </div>
            </div>

            <div class="popup-btn-add">
                <input type="submit" class="popup-button" name="" value="cancel" id="">
                <input type="submit" class="contact-button-1" value="Save" name="" id="">
            </div>

        </div>
        <div class="overlay"></div>
        <!--end popup box for change Password -->
    </section>

    <script>
        $(function() {
            var p = new Popup({
                popup: '.popup',
                content: '.popup-content',
                overlay: '.overlay',
            });

            //    setTimeout(function() {
            //     var form = $('.for-call-popup');
            //     p.open(form.html());
            // }, 1000);

            $('.edit-profile-button').click(function() {
                var form = $('.for-call-popup');
                p.open(form.html());
            });

            // $('.write').click(function() {
            //     p.open('Write me a message: shark@sharkcoder.com');
            // });

            $('.popup-close-btn').click(function() {
                p.close();
            });
        });

        function Popup(Obj) {
            this.popup = $(Obj.popup);
            this.content = $(Obj.content);
            this.overlay = $(Obj.overlay);

            var pop = this;

            this.open = (function(content) {
                pop.content.html(content);
                pop.popup.addClass('open').fadeIn(1000);
                pop.overlay.addClass('open');
            });

            this.close = (function() {
                pop.popup.removeClass('open');
                pop.overlay.removeClass('open');
            });

            this.overlay.click(function(e) {
                if (!pop.popup.is(e.target) && pop.popup.has(e.target).length === 0) {
                    pop.close();
                }
            });
        }
    </script>
    <hr>
    <x-footer></x-footer>
    <br>
</div>