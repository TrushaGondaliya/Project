<x-header></x-header>
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
                        <p class="para-text">{!!$item->text!!}</p>
                    </div>
      </div>
    
    </div>
    @endforeach
 
  </div>
 
</div>


      <div class="col-lg-3 form-group my-auto">
        <div class="container">
          <p class="reset">New Password</p>
          <p>Please enter a new password in this list below</p>
          <form action="{{url('reset-password')}}" method="post">
        @csrf
        <input type="hidden" name="token" value="{{$token}}">
        <input type="hidden" name="email" value="{{$email ?? old('email')}}">
            <label for="password" class="common-text">New Password</label><br>
            <input type="password" name="password" placeholder="Enter your new password" class="form-control"><br>
            <label for="password" class="common-text">Confirm New Password</label><br>
            <input type="password" name="password_confirmation" placeholder="Enter your confirm new password" class="form-control"><br>
            <input type="submit" value="Change Password" name="change" class="btn btn-primary"><br><br>
          </form>

          <div class="text-center">
            <a class="pwd" href="{{url('login')}}">Login</a><br>
            <footer>
              <div class="footer-login">

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