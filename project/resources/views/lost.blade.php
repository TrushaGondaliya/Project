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
            $banners=App\Models\Banner::all()
            @endphp
            <div id="carouselExampleCaptions" class="carousel slide col-lg-8" data-bs-ride="carousel">
                <ul class="carousel-indicators">
                    @foreach($banners as $banner)
                    @php
                    $sort=$banner->sort_order-1 
                    @endphp
                    @if($banner->sort_order==1)
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$sort}}" class="active"
                        aria-current="true" aria-label="Slide {{$banner->sort_order}}"></li>
                    @else

                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$sort}}"
                        aria-label="Slide {{ $banner->sort_order}}"></li>
                    @endif
                    @endforeach
                </ul>

                <div class="carousel-inner containre-fluid ">

                    @foreach($banners as $item)
                    @if($item->sort_order==1)
                    <div class="carousel-item active">
                        @else
                        <div class="carousel-item">
                            @endif
                            <img src="{{asset('uploads/banner/'.$item->image)}}" class="img" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="bottom">

                                    <p class="text">{{$item->title}}</p>
                                    <p>{!!$item->text!!}</p>
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
                        <p>Enter your email Address you've using for your account below and we will send you a passowrd
                            reset link</p>
                        <form action="{{url('send-email')}}" method="post">
                            @csrf
                            <label for="email" class="common-text">Email Address</label><br>
                            <input type="email" name="email" placeholder="Enter your email Address"
                                class="form-control"><br>
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
<script>
$('.alert-success').fadeOut(3000);
</script>