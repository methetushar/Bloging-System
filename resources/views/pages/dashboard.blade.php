@include('pages.header')
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand" href="">
            <img src="{{asset('blog/img/avater2.png')}}" alt="">
            <div class="username">
                <p class="text-dark font-weight-bold">Ariyat sinha</p>
                <span class="text-success"><i class="fa fa-circle"></i> online</span>
            </div>

        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ni ni-bell-55"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <i class="la la-user"></i>
              </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome!</h6>
                    </div>
                    <a href="./examples/profile.html" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>My profile</span>
                    </a>
                    <a href="./examples/profile.html" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>Settings</span>
                    </a>
                    <a href="./examples/profile.html" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>Activity</span>
                    </a>
                    <a href="./examples/profile.html" class="dropdown-item">
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
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="">
                            <img src="{{asset('blog/img/avater2.png')}}" alt="">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item  class=">
                <a class=" nav-link " href="{{url('/dashboard')}}"> <i class="la la-dashboard text-primary"></i> Dashboard
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{url('/category')}}">
                        <i class="la la-cubes   text-yellow"></i> Categories
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/user-table')}}">
                        <i class="la la-users text-info"></i> User
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#collapseBrand" role="button" aria-expanded="false" aria-controls="collapseBrand">
                        <i class="la la-tasks text-pink"></i> Blog
                    </a>

                    <div class="collapse" id="collapseBrand">
                        <a class="nav-link pl-5" href="{{url('/create-post')}}">
                            <i class="la la-cube text-success"></i>Add new blog
                        </a>
                        <a class="nav-link pl-5" href="{{url('/blogs')}}">
                            <i class="la la-list-alt text-warning"></i> All blog
                        </a>
                    </div>
                </li>
            </ul>
            <!-- Divider -->
            <hr class="my-3">
        </div>
    </div>
</nav>
<div class="main-content px-2">
    @yield('content')










<!-- dashboard js  Core   -->
<script src="{{asset('blog/dashboard/js/plugins/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('blog/dashboard/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('blog/dashboard/js/plugins/clipboard/dist/clipboard.min.js')}}"></script>
<!--   Optional JS   -->
<!--   Argon JS   -->
<script src="{{asset('blog/dashboard/js/argon-dashboard.min.js?v=1.1.0')}}"></script>
<script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
<script>
    window.TrackJS &&
    TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
    });
</script>

</body>
</html>
