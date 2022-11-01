<div class="nav-container">
          
            <nav class="navbar navbar-expand-lg">
                <div class="container" style="padding:0">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navigation-1" aria-controls="navigation-1" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navigation-1">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle Explore-Stories-Policy common-font " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Explore
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Top Theme</a></li>
                                    <li><a class="dropdown-item" href="#">Most Ranked</a></li>
                                    <li><a class="dropdown-item" href="#">Top Favourite</a></li>
                                    <li><a class="dropdown-item" href="#">Random</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link Explore-Stories-Policy common-font" href="#">Stories</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle Explore-Stories-Policy common-font" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Policy
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Volunteering</a></li>
                                    <li><a class="dropdown-item" href="#">Sponsored</a></li>
                                </ul>
                            </li>

                        </ul>

                      
                        

                    </div>
                </div>
</nav>

<input type="submit" class="nav-item nav-button" value="Submit new mission" name="" id="">

            <div class="nav-item dropdown" style="display: flex;margin-left: 10px;">
                <div>
                    <img src="/images/user-img.png" alt="Avatar"
                        style="width:40px;height: 40px; border-radius:100%;object-fit:cover ;margin-right: 12px;">
                </div>
                <a class="nav-link dropdown-toggle Explore-Stories-Policy common-font" style="font-size: 15px;" href="#"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <!-- Evan Donohue -->
                    {{Session::get('name')}}
                    
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Dashboard</a></li>
                    <li><a class="dropdown-item" href="#">My Account</a></li>
                    <li><a class="dropdown-item" href="{{url('logout')}}">Logout</a></li>

                    
                </ul>
            </div>
        </div>
        <hr style="margin-bottom:0">


         <!-- popup box for change Password -->
         <div class="popup-1 nav-popup">
           
            <div class="popup-content-1"></div>
        </div>
        <div class="for-call-popup-1">
        <h4>Add New Mission</h4>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-6 col-6">
                <span class="popup-input-text">Country</span>
                <select name="" class="popup-input" id="">
                    <option value="">Country 1</option>
                    <option value="">Country 2</option>
                    <option value="">Country 3</option>
                    <option value="">Country 4</option>
                </select>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 col-6">
                <span class="popup-input-text">City</span>
                <select name="" id="" class="popup-input">
                <option value="">City 1</option>
                    <option value="">City 2</option>
                    <option value="">City 3</option>
                    <option value="">City 4</option>
                    </select>
            </div>
        </div>
        <br>

        <span class="popup-input-text">Mission Title</span>

        <input type="text" class="popup-input" placeholder="Enter Mission Title"><br><br>
        <span class="popup-input-text">Mission Description</span>
        <textarea type="text" class="popup-dis" placeholder="Enter your message..."></textarea><br><br>
       
        <span class="popup-input-text">Mission Organization Name</span>
        <input type="text" class="popup-input" placeholder="Enter Mission organizarion name"><br><br>

        <span class="popup-input-text">Mission Organization Detail</span>
        <textarea type="text" class="popup-dis" placeholder="Enter your message..."></textarea><br><br>
        <span class="popup-input-text">Start Date</span>
        <input type="date" class="popup-input" placeholder="Enter start Date"><br><br>
        <span class="popup-input-text">End Date</span>
        <input type="date" class="popup-input" placeholder="Enter End Date"><br><br>
        <span class="popup-input-text">Total seats</span>
        <input type="text" class="popup-input" placeholder="Enter total seats"><br><br>
        <span class="popup-input-text">Mission Registration Deadline</span>
        <input type="text" class="popup-input" placeholder="Enter Mission Registration Deadline"><br><br>
        <span class="popup-input-text">Mission Theme</span>
                <select name="" id="" class="popup-input">
                <option value="">Select Mission Theme</option>
                    <option value="">Mission 1</option>
                    <option value="">Mission 2</option>
                    <option value="">Mission 3</option>
                    </select><br><br>

                    <span class="popup-input-text">Mission Skills</span>
                <select name="" id="" class="popup-input">
                <option value="" class="popup-input">Select Mission Skills</option>
                    <option value="">Skill 1</option>
                    <option value="">skill 2</option>
                    <option value="">skill 3</option>
                    </select><br><br>

                    <Span class="popup-input-text">Uploads Your Photos</Span><br>
                <div class="uploadOuter">
                
<div class="dragBox drag-nav"  >
<img src="images/upload.png" class="nav-popup-img" alt="">
  <span class="popup-text">Upload Image here</span>
<input type="file" onChange="dragNdrop(event)"  ondragover="drag()" ondrop="drop()" id="uploadFile"  />
</div>
                </div>
<div id="preview"></div><br>

<Span class="popup-input-text">Mission Documents</Span><br>
                <div class="uploadOuter">
<div class="dragBox drag-nav" >
    
  <img src="images/upload.png" class="nav-popup-img" alt="">
  <span class="popup-text-1">Drag and drop resume here or click*</span>
<input type="file" onChange="dragNdrop(event)"  ondragover="drag()" ondrop="drop()" id="uploadFile"  />
</div>
</div>
<div id="preview"></div>
<span class="popup-text-2">Allowed file types:PDF,Doc</span><br><br>

<span class="popup-input-text">Mission Availability</span>
                <select name="" id="" class="popup-input">
                <option value="" class="popup-input">Select Availability</option>
                    <option value="">Availability 1</option>
                    <option value="">Availability 2</option>
                    <option value="">Availability 3</option>
                    </select><br><br>



           <div class="popup-btn-add">
                <input type="submit" class="popup-button" name="" value="cancel" id="">
                <input type="submit" class="contact-button-1" value="Submit"  name="" id="">
                </div>

        </div>
        <div class="overlay-1"></div>


        <script>
                    


                    $(function() {
    var p = new Popup({
        popup: '.popup-1',
        content: '.popup-content-1',
        overlay: '.overlay-1',
    });

    //    setTimeout(function() {
    //     var form = $('.for-call-popup');
    //     p.open(form.html());
    // }, 1000);

    $('.nav-button').click(function() {
        var form = $('.for-call-popup-1');
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

    
    // <!-- drag and drop image js -->


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

}

    </script>