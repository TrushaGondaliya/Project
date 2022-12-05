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
        @php
$banner=App\Models\Banner::all()
@endphp
            <div id="carouselExampleCaptions" class="carousel slide col-lg-8" data-bs-ride="carousel">
  <ul class="carousel-indicators">
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></li>
</ul>
  <div class="carousel-inner containre-fluid ">
  @foreach($banner as $item)

    <div class="carousel-item active">
      <img src="{{asset('uploads/banner/'.$item->image)}}" class="img" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <div class="bottom">
        
                        <p class="text">{{$item->title}}</p>
                        <p class="para-text">{{$item->text}}</p>
                    </div>
      </div>
    
    </div>
    @endforeach
 
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