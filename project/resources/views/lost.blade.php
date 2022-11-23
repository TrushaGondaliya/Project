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
                        <p class="para-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 form-group my-auto">
                <div class="container py-5">
                @if($errors->any())
                            <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                            <div>{{$error}}</div>
                            @endforeach
                            </div>
                           
                            @endif
                            @if(session('message'))
                        <div class="alert alert-success">{{session('message')}}</div>
                        @endif
                    <p class="reset">Forgot Password</p>
                    <p>Enter your email Address you've using for your account below and we will send you a passowrd reset link</p>
                    <form action="{{url('send-email')}}" method="post">
@csrf
                        <label for="email" class="common-text">Email Address</label><br>
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