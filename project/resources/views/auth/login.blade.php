
<x-header></x-header>


<!-- login page -->
<html>

<head>

    <link rel="stylesheet" href="{{url('/css/index.css')}}">

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

            <div class="col-lg-3  form-group my-auto">
            @if($errors->any())
                            <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                            <div>{{$error}}</div>
                            @endforeach
                            </div>
                           
                            @endif
                            @if(session('error'))
                    <div class="alert alert-danger">{{session('error')}}</div>
                    @endif
                            @if(session('message'))
                    <div class="alert alert-success">{{session('message')}}</div>
                    @endif
                <div class="container">
                    <form action="{{route('login')}}" method="post">
                        @csrf
                        <label for="email" class="common-text">Email Address</label><br>
                        <input type="email" name="email" placeholder="Enter your email Address" class="form-control"><br>
                        <label for="password" class="common-text">Password</label><br>
                        <input type="password" name="password" placeholder="Enter your password" class="form-control"><br>
                        <input type="submit" value="login" name="login" class="btn btn-primary"><br><br>
                        <div class="text-center">

                    </form>
                    <a class="pwd" href="{{URL('lost')}}">Lost your password</a><br><br>
                    <span class="pwd">Don't have any account? </span><a class="reg" href="{{URL('register')}}">Create an account</a><br><br>


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