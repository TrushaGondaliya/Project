<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">

                            <div class="sb-sidenav-menu-heading">Navigation</div>
                            <!-- <a class="nav-link {{Request::is('admin/dashboard') ? 'active' : ''}}" href="{{url('admin/dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a> -->
                            <!-- <div class="sb-sidenav-menu-heading">Interface</div> -->
                            <a class="nav-link {{Request::is('admin/users') ? 'active' : ''}}" href="{{url('admin/user')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                User    
                            </a>
                         
                            <a class="nav-link {{Request::is('admin/post') || Request::is('admin/add-post') || Request::is('admin/edit-post/*') ? 'collapsed active' : 'collapsed'}}" href="{{url('admin/user')}}" data-bs-toggle="collapse" data-bs-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                                CMS Page
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse {{Request::is('admin/post') || Request::is('admin/add-post') ||Request::is('admin/edit-post/*') ? 'show ' : ''}}" id="collapseLayouts1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link {{Request::is('admin/add-post') ? 'active' : ''}}" href="{{url('admin/add-post')}}">Add post</a>
                                    <a class="nav-link {{Request::is('admin/post') || Request::is('admin/edit-post/*') ? 'active' : ''}}" href="{{url('admin/post')}}">View post</a>
                                </nav>
                            </div>

                            <a class="nav-link {{Request::is('admin/users') ? 'active' : ''}}" href="{{url('admin/users')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Mission    
                            </a>
                            <a class="nav-link {{Request::is('admin/users') ? 'active' : ''}}" href="{{url('admin/users')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Mission Theme    
                            </a>
                            <a class="nav-link {{Request::is('admin/users') ? 'active' : ''}}" href="{{url('admin/users')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Mission skill    
                            </a>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Mission Application
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Story
                            </a>
                            <a class="nav-link {{Request::is('admin/users') ? 'active' : ''}}" href="{{url('admin/users')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Banner Management    
                            </a>
                        </div>
                    </div>
                    
                </nav>
            </div>