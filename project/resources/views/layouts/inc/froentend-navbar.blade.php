<div class="global-navbar">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="{{asset('assets/images/logo.jpg')}}" class="w-50" alt="logo" />
            </div>
            <div class="col-md-9 my-auto">
                <div class="border text-center p-2">
                <h5>Advertise here</h5>
            </div>
        </div>
    </div>
</div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-green mt-2">
        <div class="container">
        
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('/')}}">Home</a>
                    </li>
                 
                   
                    @php
                        $categories=App\Models\Category::where('navbar_status','0')->where('status','0')->get();
                    @endphp
                    @foreach($categories as $item)
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('tutorial/'.$item->slug)}}">{{$item->name}}</a>
                    </li>
                    @endforeach
                    @if(Auth::check() )
                
                    <li><a class="nav-link btn-danger" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>

                    <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
                        @csrf
                    </form>
                    @endif
                
                </ul>
            </div>
        </div>
    </nav>

