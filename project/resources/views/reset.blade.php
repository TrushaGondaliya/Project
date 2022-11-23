<x-header></x-header>
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
          <img src="../images/Grow-Trees-On-the-path-to-environment-sustainability-login.png" class="img">
          <div class="bottom">
          <p class="text">Sed ut perspiciatis unde omnis iste natus voluptatem</p>
                        <p class="para-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
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