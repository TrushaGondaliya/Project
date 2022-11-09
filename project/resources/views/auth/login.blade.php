
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
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ipsa iure possimus dolor. Dignissimos vero laboriosam fugit beatae dicta placeat obcaecati, iste nobis reprehenderit incidunt et ratione quia amet quisquam?</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3  form-group my-auto">
                
                <div class="container">
                    <form action="" method="post">
                        @csrf
                        <label for="email">Email Address</label><br>
                        <input type="email" name="email" placeholder="Enter your email Address" class="form-control"><br>
                        <label for="password">Password</label><br>
                        <input type="password" name="password" placeholder="Enter your password" class="form-control"><br>
                        <input type="submit" value="login" name="login" class="btn btn-primary"><br><br>
                        <div class="text-center">

                    </form>
                    <a class="pwd" href="{{URL('lost')}}">Lost your password</a><br><br>
                    <span>Don't have any account? </span><a class="reg" href="{{URL('register')}}">Create an account</a><br><br>


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