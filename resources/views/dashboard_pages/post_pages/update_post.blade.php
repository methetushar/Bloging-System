@extends('pages.dashboard')

@section('content')
<div class="container">
<div class="row my-5">
<div class="col-md-12">
<form action="{{url('/update-post')}}" method="post">
    @csrf
    <div class="row">
        @foreach($select_edit_data as $data)
        <div class="col-md-11">
            <div class="header">
                <span style="font-size: 25px;font-weight: bold">Blog</span> <spna>Update </spna>
            </div>

            <div class="card card-body">
            </span>
                <div class="">
                    <div class="col-md-12">
                        <input type="hidden" name="post_id" value="{{$data->post_id}}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="text-dark font-weight-bold">Author</label>
                                    <input type="text"
                                           name="author"
                                           class="form-control"
                                           value="{{$data->author}}"
                                    >
                                    <span class="text-danger">
                                        @if (session('author'))
                                            <small>{{session('author')}}</small>
                                        @endif
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="text-dark font-weight-bold">Title</label>
                                    <input type="text"
                                           name="title"
                                           class="form-control"
                                           value="{{$data->title}}"
                                    >
                                    <span class="text-danger">
                                        @if (session('title'))
                                            <small>{{session('title')}}</small>
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="text-dark font-weight-bold">Slug</label>
                                    <input type="text"
                                           name="slug"
                                           class="form-control"
                                           value="{{$data->slug}}"
                                    >
                                    <span class="text-danger">
                                        @if (session('slug'))
                                            <small>{{session('slug')}}</small>
                                        @endif
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category" class="text-dark font-weight-bold">Category </label>
                                    <select name="category" class="form-control" id="category">
                                        <option disabled selected>Select category</option>
                                        <?php
                                        $select_category = DB::table('category')->where('publication_status',1)->get();
                                        ?>
                                        @foreach($select_category as $category)
                                            <option value="{{$category->category_name}}"  >{{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                                    <small class="text-info">Your category we can't catch please select the  category </small><br>
                                    <span class="text-danger">
                                    @if (session('category'))
                                            <small>{{session('category')}}</small>
                                        @endif
                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="body" class="text-dark font-weight-bold">Body</label>
                                    <input style="height: 70px"
                                            type="text"
                                            name="body"
                                            class="form-control"
                                            id="body"
                                            value="{{$data->body}}"
                                    >

                                    <span class="text-danger">
                                        @if (session('body'))
                                            <small>{{session('body')}}</small>
                                        @endif
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pl-4">
                            <div class="form-group">
                                <label for="date" class="text-dark font-weight-bold">Publish Date</label>
                                <input type="date" id="date"
                                       name="publish_date"
                                       class="form-control"
                                       value="{{$data->publish_date}}"
                                >
                                <span class="text-danger">
                                       @if (session('publish_date'))
                                        <small>{{session('publish_date')}}</small>
                                    @endif
                                    </span>
                            </div>
                        </div>
                        <div class="col-md-5 m-auto">
                            <div class="form-group">
                                <small class="text-info">Your image we can't catch please select the image </small>                              <input type="file" name="image" id="image" style="display: none">
                                <label for="image">
                                    <span class="btn btn-primary">Select image</span>
                                </label>

                                <span class="text-danger">
                                    @if (session('image'))
                                        <small>{{session('image')}}</small>
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-info">Update Post</button>

            </div>
        </div>
            @endforeach
    </div>
</form>
</div>
</div>
</div>
@stop



