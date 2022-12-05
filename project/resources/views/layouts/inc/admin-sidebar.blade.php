<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">

                            <div class="sb-sidenav-menu-heading">Navigation</div>
                            
                            <a class="nav-link {{Request::is('admin/user')||Request::is('admin/add-user')||Request::is('admin/edit-user/*') ? 'active' : ''}}" href="{{url('admin/user')}}" >
                                <div class="sb-nav-link-icon {{Request::is('admin/user')||Request::is('admin/add-user')||Request::is('admin/edit-user/*') ? 'active' : ''}}"><i class="fas fa-user {{Request::is('admin/user')||Request::is('admin/add-user')||Request::is('admin/edit-user/*') ? 'active' : ''}}"></i></div>
                                User    
                            </a>
                         
                            <a class="nav-link {{Request::is('admin/cms') || Request::is('admin/add-cms') || Request::is('admin/cms-edit/*') ? 'collapsed active' : 'collapsed'}}" href="{{url('admin/cms')}}" data-bs-toggle="collapse" data-bs-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-file-alt {{Request::is('admin/cms') || Request::is('admin/add-cms') || Request::is('admin/cms-edit/*') ? ' active' : ''}}"></i></div>
                                CMS Page
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link {{Request::is('admin/add-cms') ? 'active' : ''}}" href="{{url('admin/add-cms')}}">Add CMS</a>
                                   
                                    <a class="nav-link {{Request::is('admin/cms') || Request::is('admin/cms-edit/*') ? 'active' : ''}}" href="{{url('admin/cms')}}">View CMS</a>
                                </nav>
                            </div>

                            <a class="nav-link {{Request::is('admin/mission') || Request::is('admin/mission-add') ||Request::is('admin/edit-mission/*') ? 'active' : ''}}" href="{{url('admin/mission')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-achieved {{Request::is('admin/mission')|| Request::is('admin/mission-add') ||Request::is('admin/edit-mission/*') ? 'active' : ''}}"></i></div>
                                Mission    
                            </a>
                            <a class="nav-link {{Request::is('admin/theme')||Request::is('admin/add-theme')||Request::is('admin/edit-theme/*') ? 'active' : ''}}" href="{{url('admin/theme')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-application {{Request::is('admin/theme')||Request::is('admin/add-theme')||Request::is('admin/edit-theme/*') ? 'active' : ''}}" href="{{url('admin/theme')}}"></i></div>
                                Mission Theme    
                            </a>
                            <a class="nav-link {{Request::is('admin/skill')||Request::is('admin/add-skill')||Request::is('admin/edit-skill/*') ? 'active' : ''}}" href="{{url('admin/skill')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-tools {{Request::is('admin/skill')||Request::is('admin/add-skill')||Request::is('admin/edit-skill/*') ? 'active' : ''}}"></i></div>
                                Mission skill    
                            </a>
                            <a class="nav-link {{Request::is('admin/application') || Request::is('admin/add-application') ? 'active' : ''}}" href="{{url('admin/application')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-tools {{Request::is('admin/application')|| Request::is('admin/add-application') ? 'active' : ''}}"></i></div>
                                Mission Application    
                            </a>
                            <a class="nav-link {{Request::is('admin/story') ? 'active' : ''}}" href="{{url('admin/story')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-tools {{Request::is('admin/story') ? 'active' : ''}}"></i></div>
                                Story    
                            </a>
                            <a class="nav-link {{Request::is('admin/banner')|| Request::is('admin/add-banner')|| Request::is('admin/banner-edit/*') ? 'active' : ''}}" href="{{url('admin/banner')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-users {{Request::is('admin/banner')|| Request::is('admin/banner-edit/*')|| Request::is('admin/edit-banner') ? 'active' : ''}}"></i></div>
                                Banner Management    
                            </a>
                        </div>
                    </div>
                    
                </nav>
            </div>