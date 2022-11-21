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
                <div class="col-lg-8 ">
                    <div class="container-fluid">
                        <img src="images/Grow-Trees-On-the-path-to-environment-sustainability-login.png" class="img">
                        <div class="bottom">
                            <p class="text">Sed ut perspiciatis unde omnis iste natus voluptatem</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ipsa iure possimus dolor. Dignissimos vero laboriosam fugit beatae dicta placeat obcaecati, iste nobis reprehenderit incidunt et ratione quia amet quisquam?</p>
                        </div>
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
                            <label for="fname">First Name</label><br>
                            <input type="text" name="first_name" placeholder="Enter your First Name" class="form-control"><br>
                            <label for="lname">Last Name</label><br>
                            <input type="text" name="last_name" placeholder="Enter your Last Name" class="form-control"><br>
                            <label for="email">Email Address</label><br>
                            <input type="email" name="email" placeholder="Enter your email Address" class="form-control"><br>
                            <label for="num">Phone Number</label><br>
                            <input type="text" name="phone_number" placeholder="Enter your Phone Number" class="form-control"><br>
                            <label for="password">Password</label><br>
                            <input type="password" name="password" placeholder="Enter your password" class="form-control"><br>
                            <label for="password">Confirm Password</label><br>
                            <input type="password" name="confirm_password" placeholder="Re-write your Password" class="form-control"><br>
                            <input type="submit" value="Register" name="Register" class="btn btn-primary"><br><br>

                        </form>
                        <div class="text-center">
                        <a class="pwd" href="{{URL('lost')}}">Lost your password?</a><br><br>
                    <span>Already Registered? </span><a class="reg" href="{{URL('login')}}">Login Here</a><br><br>
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