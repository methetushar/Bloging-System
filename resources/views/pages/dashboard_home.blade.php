@extends('pages.dashboard')

@section('content')
        <!-- Navbar -->
        <nav class="navbar  navbar-expand-md border-bottom"  id="navbar-main">
            <div class="container-fluid">
                <ul class="navbar-nav align-items-center ml-auto d-none d-md-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                           <img src="{{asset('blog/img/avater2.png')}}" alt="">

                        </span>
                                <div class="media-body ml-2 d-none d-lg-block">
                                    <span class="mb-0 text-sm text-dark  font-weight-bold">Ariyat sinha</span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome!</h6>
                            </div>
                            <a href="../examples/profile.html" class="dropdown-item">
                                <i class="ni ni-single-02"></i>
                                <span>My profile</span>
                            </a>
                            <a href="../examples/profile.html" class="dropdown-item">
                                <i class="ni ni-settings-gear-65"></i>
                                <span>Settings</span>
                            </a>
                            <a href="../examples/profile.html" class="dropdown-item">
                                <i class="ni ni-calendar-grid-58"></i>
                                <span>Activity</span>
                            </a>
                            <a href="../examples/profile.html" class="dropdown-item">
                                <i class="ni ni-support-16"></i>
                                <span>Support</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="{{url('/login-ui')}}" class="dropdown-item">
                                <i class="ni ni-user-run"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container mt-4">
            <h4>Dashboard <i class="la la-dashboard"> <a href="">username</a></i></h4>
            <div class="jumbotron">
                <span>Welcome to </span>
                <span style="font-size: 17px;"> <a href="" class="text-success">RT BLOG</a>
                   <img src="{{asset('blog/img/bird.gif')}}" alt="">
                    <hr>
                </span>
                <div class="mt-4">
                    <h4>Get Started</h4>
                    <a href="{{url('/create-post')}}">
                        <button class="btn btn-success px-5">Create a blog post</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-12 ">
            <img class="m-auto" width="100%" src="{{asset('blog/img/tree1.gif')}}" alt="">
        </div>





        <!-- Footer -->
        <footer class="footer mt-5 px-4 bg-gradient-white">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        &copy; 2020 <a href="" class="font-weight-bold ml-1" target="_blank">Ariyat</a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                        <li class="nav-item">
                            <a href="" class="nav-link" target="_blank">Find Ariyat</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link" target="_blank">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
@stop
