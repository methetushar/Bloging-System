<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('blog/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('blog/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('blog/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('blog/css/style.css')}}">

    {{--    dashboard css--}}
    <link rel="stylesheet" href="{{asset('blog/dashboard/css/argon-dashboard.css')}}">

    <title>Blog </title>

</head>

<body class="bg-default">
<div class="main-content mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-5">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header bg-transparent pb-5">
                        <div class="text-muted text-center mt-2 mb-3"><small>Sign in with</small></div>
                        <div class="btn-wrapper text-center">
                            <a href="#" class="btn btn-neutral btn-icon">
                                <span class="btn-inner--icon"><img src="{{asset('blog/img/github.svg')}}"></span>
                                <span class="btn-inner--text">Github</span>
                            </a>
                            <a href="#" class="btn btn-neutral btn-icon">
                                <span class="btn-inner--icon"><img src="{{asset('blog/img/google.svg')}}"></span>
                                <span class="btn-inner--text">Google</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <small>Or sign in with credentials</small>
                        </div>
                        <form role="form">
                            <div class="form-group mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Email" type="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Password" type="password">
                                </div>
                            </div>
                            <div class="custom-control custom-control-alternative custom-checkbox">
                                <input class="custom-control-input" id="customCheckLogin" type="checkbox">
                                <label class="custom-control-label" for="customCheckLogin">
                                    <span class="text-muted">Remember me</span>
                                </label>
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-info my-4 px-5">Sign in</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <a href="#" class="text-light"><small>Forgot password?</small></a>
                    </div>
                    <div class="col-6 text-right">
                        <a href="#" class="text-light"><small>Create new account</small></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--   Core   -->
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
