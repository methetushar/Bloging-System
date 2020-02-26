@include('pages.header')
<div class="index_header">
    <div class="container">
        <nav class="navbar navbar-expand-lg  text-dard navbar-dark">
            <div class="container-fluid">
                <div class="navbar-brand">
                    <a href="">
                        <h1 class="bg-light text-dark p-2">LoGo</h1>
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">Gallary</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">Others</a>
                        </li>
                    </ul>
                    <ul class="ml-auto">
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" 
                                style="border-radius: 0px;" 
                                placeholder="Search your keyword">
                                <button class="btn btn-default" style="border-radius: 0px;padding: 0px; width: 76px;">Search</button>
                            </div>
                        </form>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>



<div class="container" style="margin-top: 40px;">
    <div class="row my-3">
        <div class="col-md-8 col-lg-8">
            <div class="col-md-12">
                <div class="row">
                    
                        <?php 
                            $post_data = DB::table('post')->where('publish_status',1)->get();
                            // echo "<pre>";
                            //     print_r($post_data);
                            // echo "</pre>";
                        ?>
                        @foreach($post_data as $data)  
                        <div class="col-md-6 mb-5">
                        <div class="card card-body">
                            <a href=" {{url('/single-blog',[$data->id])}} ">
                                <div class="image mb-4">
                                    <img src="{{asset('blog/img/background.jpg')}}" width="100%" alt="not image">
                                </div>
                                <div class="title px-3">
                                    <h3>{{$data->title}}</h3>
                                    <hr>
                                </div>
                            </a>
                            <div class="card card-footer post-action">
                                <ul>
                                    <li>
                                        <a href="">
                                            <i class="fa fa-user"></i> 
                                            <small> {{$data->author}} </small>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fa fa-clock-o"></i>
                                            <small> {{$data->created_at}} </small>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="text px-3 ">
                                <p class="text-mute"> {{$data->body}} </p>
                                <a href="{{url('/single-blog',[$data->id])}}">Read more...</a>
                            </div>
                        </div>
                        
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
                <div class="col-md-12">
                        <div class="card card-header  pt-3">
                            <h3 class="text-success">Social Plugin</h3>
                        </div>
                        <div class="card card-body pl-1 social_plugin ">
                            <ul>
                                <li>
                                    <a href="" class="facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="linkedin">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="whatsapp">
                                        <i class="fa fa-whatsapp"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="pinterest">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="google-plus">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="github">
                                        <i class="fa fa-github"></i>
                                    </a>
                                </li> 
                                
                                <li>
                                    <a href="" class="google">
                                        <i class="fa fa-google"></i>
                                    </a>
                                </li> 
                                
                                <li>
                                    <a href="" class="link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
            
            <div class="col-md-12 my-5">
                <div class="card card-header  pt-3">
                    <h3 class="text-success">Pupoler Post</h3>
                </div>
                <div class="card card-body category">
                    <ul>
                        <li>
                            <a class="text-dark" href="">
                                <div class="single_post">
                                    <img src="{{asset('blog/img/background.jpg')}}" width="30%" height="40%" alt="">
                                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, quia?</span>
                                    <br><small>10 minutes ago</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="text-dark" href="">
                                <div class="single_post">
                                    <img src="{{asset('blog/img/background.jpg')}}" width="30%" height="40%" alt="">
                                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, quia?</span>
                                    <br><small>4 munites ago</small>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-12 my-5">
                    <div class="card card-header  pt-3">
                        <h3 class="text-success">Subscribe Us</h3>
                    </div>
                    <div class="card card-body pl-1 social_plugin ">
                        <div class="m-auto col-md-10 py-4">
                            <form action="">
                                <input type="text" class="form-control" 
                                placeholder="Enter your email address"><br>
                                <button class="btn btn-success btn-sm">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 my-5">
                        <div class="card card-header  pt-3">
                            <h3 class="text-success">Facebook</h3>
                        </div>
                        <div class="card card-body pl-1 social_plugin ">
                            <ul>
                                <li>
                                    <a href="" class="">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

            <div class="col-md-12 my-5">
                <div class="card card-header  pt-3">
                    <h3 class="text-success">Categories</h3>
                </div>
                    <div class="card card-body px-3 category">
                        <ul>
                                <?php 
                                $category_data = DB::table('category')->where('publication_status',1)->get();
                                // echo "<pre>";
                                //     print_r($category_data);
                                // echo "</pre>";
                            ?>
                            @foreach($category_data as $c_data) 
                            <li> 
                                <a class="text-default" href="{{$c_data->id}} ">
                                        {{$c_data->category_name}} 
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
        </div>
    </div>
    <div class="chat">
        <a href="" data-toggle="modal" data-target="#addCategoryModal">
            <h1 class="">
                <i class="fa fa-plus-circle"></i>
            </h1>
        </a>
    </div>
</div>








<div class="modal fade show" id="addCategoryModal">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title text-white" >Chat with us!!</h5>
                <button class="close" data-dismiss="modal">
                    <span>×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                       Message details
                       <hr><br>
                       <div class="col-md-12 p-3 bg-secondary m-auto">
                           <h3>hello!</h3>
                           <h3>hi!</h3>
                          <h3> How are you?</h3>
                       </div>
                       <br>
                       <form action="">
                           <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Type messaage">
                                <button class="btn btn-success btn-sm px-5">
                                    <i class="fa fa-send"></i>
                                </button>
                            </div>
                         </div>
                           </div>
                       </form>
                </div>
            </div>

        </div>
    </div>
</div>
@include('pages.footer')