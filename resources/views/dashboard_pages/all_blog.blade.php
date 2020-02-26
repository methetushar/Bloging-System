@extends('pages.dashboard')

@section('content')
    <div class="col-md-12 my-4">
        <div class="row">
            <div class="col-md-7 ">
                <span style="font-size: 25px" class="font-weight-bold">Blog </span><small> Display All Blog Post</small>
            </div>
            <div class="col-md-3 ml-auto">
                <small class="text-dark"><i class="la la-dashboard"></i>Dashboard
                    <span class="mx-2" style="color: #ced4da"> > </span>
                    Blog <span class="mx-2" style="color: #ced4da "> > </span>All Blog Post</small>
            </div>
        </div>
    </div>
    <div class="card card-body">
        <div class="col-md-12 my-3">
            <div class="row">
                <div class="col-md-5 ">
                    <a href="{{url('/create-post')}}" class="btn btn-info border-0"><i class="la la-plus"></i>Add Post</a>
                </div>
                <div class="col-md-7 ml-auto">
                    <?php
                        $allpost = DB::table('post')->count();
                        $publish_post = DB::table('post')->where('publish_status',1)->count();
                        $draft_post = DB::table('post')->where('publish_status',0)->count();
                        $deleted_post = DB::table('deleted_post')->count();
                    ?>
                    <a href="{{url('/blogs')}}" class="btn text-info">All ({{$allpost}})</a> <span class="mx-2" style="color: #ced4da "> || </span>
                    <a href="{{url('/published-post')}}" class="btn text-success">Published ({{$publish_post}})</a> <span class="mx-2" style="color: #ced4da "> || </span>
                    <a href="{{url('/draft')}}" class="btn text-warning">Draft ({{$draft_post}})</a> <span class="mx-2" style="color: #ced4da "> || </span>
                    <a href="{{url('/trash')}}" class="btn text-danger">Trash ({{$deleted_post}})</a>
                </div>
            </div>
        </div>
        @yield('table')
    </div>
@stop
