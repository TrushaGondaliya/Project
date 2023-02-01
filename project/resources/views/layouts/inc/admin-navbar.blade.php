<nav class="sb-topnav navbar navbar-expand navbar-dark bg-light">

    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm " id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    {{now()->toRfc850String()}}

    <!-- Navbar-->
    <ul class="navbar-nav ms-auto  me-3 me-lg-4" style="float: right">
        <div class="nav-item dropdown" style="display: flex">
            <div>
                <img src="{{asset('uploads/user/'.Auth::user()->avtar)}}" alt="Avatar"
                    style="width:40px;height: 40px; border-radius:100%;object-fit:cover ;margin-right: 12px;">
            </div>
            <a class="nav-link dropdown-toggle Explore-Stories-Policy common-font" style="font-size: 15px;" href="#"
                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->full_name}}
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{url('admin/admin-profile')}}">My Profile</a></li>
                <li><a class="dropdown-item" href="{{url('logout')}}">Logout</a></li>
            </ul>
        </div>
    </ul>
</nav>