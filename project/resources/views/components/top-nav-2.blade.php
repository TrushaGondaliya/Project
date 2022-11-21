<div class="nav-2">
            
       
                <div class="navbar-nav mb-lg-0" style="display: contents;"><img src="images/search.png" alt="Avatar" style="object-fit:cover ;">
                </div>
                <form class="d-flex" action="{{url('search')}}" method="post" role="search">
                    @csrf
                    <input class="form-control me-2 Search-mission common-font" type="search"
                        placeholder="Search mission..." aria-label="Search">
                </form>
         
            
            <nav class="navbar navbar-expand-lg">
                <div class="container nav-style" >
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navigation-2" aria-controls="navigation-1" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span><img src="images/filter.png"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navigation-2">
                       <div class="right-nav-2">

                        <div class="nav-item dropdown" style="width: 25%;" >

                            <a class="nav-link nav-2-items dropdown-toggle City common-font" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Country
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Afghanistan</a></li>
                                <li><a class="dropdown-item" href="#">Albania</a></li>
                                <li><a class="dropdown-item" href="#">Algeria</a></li>
                                <li><a class="dropdown-item" href="#">Barbados</a></li>
                                <li><a class="dropdown-item" href="#">Belarus</a></li>
                                <li><a class="dropdown-item" href="#">Belgium</a></li>
                            </ul>
                        </div>
                        <div class="nav-item dropdown">

                            <a class="nav-link nav-2-items dropdown-toggle City common-font" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                City
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Japan</a></li>
                                <li><a class="dropdown-item" href="#">Vadodara</a></li>
                                <li><a class="dropdown-item" href="#">Hydrabad</a></li>
                                <li><a class="dropdown-item" href="#">Ahmedabad</a></li>
                                <li><a class="dropdown-item" href="#">Rajkot</a></li>
                                <li><a class="dropdown-item" href="#">Canada</a></li>
                            </ul>
                        </div>
                        <div class="nav-item dropdown">

                            <a class="nav-link nav-2-items dropdown-toggle City common-font" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Theme
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Animal</a></li>
                                <li><a class="dropdown-item" href="#">Farmer</a></li>
                                <li><a class="dropdown-item" href="#">Education</a></li>
                                <li><a class="dropdown-item" href="#">Environment</a></li>
                                <li><a class="dropdown-item" href="#">Plantation</a></li>
                                <li><a class="dropdown-item" href="#">Children</a></li>
                            </ul>
                        </div>
                        <div class="nav-item dropdown">

                            <a class="nav-link nav-2-items dropdown-toggle City common-font city-1"href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Skills
                            </a>
                            <ul class="dropdown-menu ">
                                <li><a class="dropdown-item" href="#"><input type="checkbox"> Anthropolgy</a></li>
                                <li><a class="dropdown-item" href="#"><input type="checkbox">Archeolgy</a></li>
                                <li><a class="dropdown-item" href="#"><input type="checkbox">Astronomy</a></li>
                                <li><a class="dropdown-item" href="#"><input type="checkbox">Computer Science</a></li>
                                <li><a class="dropdown-item" href="#"><input type="checkbox">History</a></li>
                                <li><a class="dropdown-item" href="#"><input type="checkbox">Research</a></li>
                            </ul>
                        </div>

                    </div>
                    </div>
                </div>
            </nav>
        </div>
       