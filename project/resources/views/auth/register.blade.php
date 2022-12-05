<x-header></x-header>
<html>

<head>

    <link rel="stylesheet" href="{{url('/css/index.css')}}">

</head>

</html>
<section>
    <div class="body-1">
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
                @if($errors->any())
                            <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                            <div>{{$error}}</div>
                            @endforeach
                            </div>
                           
                            @endif
                    <div class="container">
                        <form action="{{url('add-user')}}" method="post">
                            @csrf
                            <label for="fname" class="common-text">First Name</label><br>
                            <input type="text" name="first_name" placeholder="Enter your First Name" class="form-control"><br>
                            <label for="lname" class="common-text">Last Name</label><br>
                            <input type="text" name="last_name" placeholder="Enter your Last Name" class="form-control"><br>
                            <label for="email" class="common-text">Email Address</label><br>
                            <input type="email" name="email" placeholder="Enter your email Address" class="form-control"><br>
                            <label for="num" class="common-text">Phone Number</label><br>
                            <input type="text" name="phone_number" placeholder="Enter your Phone Number" class="form-control"><br>
                            <label for="password" class="common-text">Password</label><br>
                            <input type="password" name="password" placeholder="Enter your password" class="form-control"><br>
                            <label for="password" class="common-text">Confirm Password</label><br>
                            <input type="password" name="confirm_password" placeholder="Re-write your Password" class="form-control"><br>
                            <input type="submit" value="Register" name="Register" class="btn btn-primary"><br><br>

                        </form>
                        <div class="text-center">
                        <a class="pwd" href="{{URL('lost')}}">Lost your password?</a><br><br>
                    <span class="pwd">Already Registered? </span><a class="reg" href="{{URL('login')}}">Login Here</a><br><br>
                        </div>
                        <footer>
                            <div class="footer-reg">

                                <a href="">Privacy</a>
                                <a href="">Policy</a>

                            </div>
                        </footer>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>

<script>
    function myfun()
    {
        document.getElementById("abc").style.boxShadow="0 0 10px 0 #2b64b1"
    }
</script>