<footer>
<div class="footer">

  <a href="">Privacy</a>
    <a href="">Policy</a>
<button class="contact">Contact Us</button>

</div>

<div class="popup-c">
            <div class="popup-close-btn"></div>
            <div class="popup-content-c"></div>
        </div>
        <div class="for-call-popup-c">
            <form action="{{url('contactUs')}}" class="call-popup">
                <h3>Contact Us</h3>
                <br>
                <span class="popup-input-text">Name*</span>
                <input type="text" class="popup-input" value="{{Auth::user()->full_name}}" style="background-color: #ebe7e7;" name="name" id=""><br><br>
                <span class="popup-input-text">Email Address*</span>
                <input type="email" class="popup-input" value="trushagondaliya30@gmail.com" style="background-color: #ebe7e7;" name="email" id=""><br><br>
                <span class="popup-input-text">Subject*</span>
                <input type="text" class="popup-input" placeholder="Enter Your Subject" name="subject" id=""><br><br>
                <span class="popup-input-text">Message*</span>
                <textarea type="text" class="popup-dis" placeholder="Enter Your Message" name="message" id=""></textarea><br><br>

                <div class="popup-btn-contact">
                    <input type="button" class="popup-button" name="" value="cancel" id="">
                    <input type="submit" class="contact-button-1" value="Save" name="" id="">
                </div>
            </form>
        </div>
        <div class="overlay-c"></div>
</footer>
</div>
</body>
</html>
<script>
        $(function() {
            var p = new Popup({
                popup: '.popup-c',
                content: '.popup-content-c',
                overlay: '.overlay-c',
            });

          

            $('.contact').click(function() {
                var form = $('.for-call-popup-c');
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