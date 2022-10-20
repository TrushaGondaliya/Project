<?php session_start(); ?>
<x-header></x-header>

<!-- if user forgot passwrod they can reset password to send link in mail -->

<html>

<head>
    <link rel="stylesheet" href="{{url('css/index.css')}}">
</head>

</html>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="container-fluid">
                    <img src="images/Grow-Trees-On-the-path-to-environment-sustainability-login.png" class="img">
                    <div class="bottom">
                        <p class="text">Sed ut perspiciatis unde omnis iste natus voluptatem</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ipsa iure possimus dolor. Dignissimos vero laboriosam fugit beatae dicta placeat obcaecati, iste nobis reprehenderit incidunt et ratione quia amet quisquam?</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 form-group my-auto">
               <div class="container py-5"> 
                
                <p class="reset">Forgot Password</p>
                <p>Enter your email Address you've using for your account below and we will send you a passowrd reset link</p>
                <form action="{{url('send-email')}}" method="get">
                  
                    <label for="email">Email Address</label><br>
                    <input type="email" name="email" placeholder="Enter your email Address" class="form-control"><br>
                    
                    <input type="submit" value="Reset my Password" name="reset" class="btn btn-primary"><br><br>
                </form>
                <div class="text-center">
                    <a class="pwd" href="{{url('login')}}">Login</a><br>
  
                </div>
            </div>
            <footer>
<div class="footer-login">

  <a href="">Privacy</a>
    <a href="">Policy</a>

</div>
</footer>
        </div>
        </div>
    </div>

</section>