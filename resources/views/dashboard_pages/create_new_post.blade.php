@extends('pages.dashboard')

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-md-12">
            <form action="{{url('/add-new-post')}}" method="post">
                @csrf
                <div class="row">
                <div class="col-md-8">
                    <div class="header">
                        <span style="font-size: 25px;font-weight: bold">Blog</span> <spna>add new blog </spna>
                    </div>
                    <div class="card card-body p-3">
                        <span class="text-success font-weight-bold">
                            @if (session('success'))
                                <small>{{session('success')}}</small>
                            @endif
                        </span>
                        <div class="">

                            <div class="form-group">
                                <label for="" class="text-dark font-weight-bold">Title</label>
                                <input type="text" name="title" class="form-control">
                                <span class="text-danger">
                                    @if (session('title'))
                                        <small>{{session('title')}}</small>
                                    @endif
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="" class="text-dark font-weight-bold">Slug</label>
                                <input type="text" name="slug" class="form-control">
                                <span class="text-danger">
                                    @if (session('slug'))
                                        <small>{{session('slug')}}</small>
                                    @endif
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="body" class="text-dark font-weight-bold">Body</label>
                                <span class="text-danger">
                                    @if (session('body'))
                                        <small>{{session('body')}}</small>
                                    @endif
                                </span>
                                <textarea name="body" class="form-control" id="body" cols="30" rows="10"></textarea>
                                <!-- <div class="" id="summernote">                     <input type="text"  name="body">
                                </div>
                                <script>
                                    $('#summernote').summernote({
                                        tabsize: 2,
                                        height: 100
                                    });
                                </script> -->
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="header pb-3">
                        <samp class="">Dashboard <i class="la la-dashboard"></i> > Blog > add new blog </samp>
                    </div>
                    <div class="card card-body  p-3">
                        <h3>Publish<hr></h3>
                        <div class="form-group">
                            <label for="" class="text-default">Publish Date</label>
                            <input type="date" name="publish_date" class="form-control">
                            <span class="text-danger">
                               @if (session('publish_date'))
                                    <small>{{session('publish_date')}}</small>
                                @endif
                             </span>
                        </div>
                        
                    </div>

                    <div class="card card-body mt-3  p-3">
                        <h3>Category<hr></h3>
                        <select name="category" class="form-control" id="">
                            <option disabled selected>Select category</option>
                            <?php
                            $select_category = DB::table('category')->where('publication_status',1)->get();
                            ?>
                            @foreach($select_category as $category)
                                <option value="{{$category->category_name}}"  >{{$category->category_name}}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">
                            @if (session('category'))
                                <small>{{session('category')}}</small>
                            @endif
                          </span>
                    </div>

                    <div class="card card-body mt-3 p-3">
                        <h3>Feature Image<hr></h3>
                        <div class="card card-body mb-3">
                            <img src="" alt="No Image">

                        </div>
                        <input type="file" name="image" id="image" style="display: none">
                        <label for="image">
                            <span class="btn btn-primary btn-sm">Select image</span>
                        </label>
                        <span class="text-danger">
                            @if (session('image'))
                                <small>{{session('image')}}</small>
                            @endif
                        </span>
                    </div>
                    <div class="py-3">
                    <div class="form-group offset-sm-8">
                            <button  type="submit"class="btn btn-danger btn-sm ">Publish</button>
                        </div>
                    </div>
                </div>

                
            </form>
            </div>

        </div>
    </div>

    
@stop









