@include('pages.header')
<div class="container">

    @foreach($single_blog as $postData)
    <div class="col-md-10  m-auto py-4">
        <div class="row">
            <div class="col-md-7">
                <img src="{{asset('blog/img/background.jpg')}}" width="100%" alt="image place">
            </div>
            <div class="col-md-5 pt-5">
                <h2 class="my-3 text-capitalize">{{$postData->title}}
                    <hr>
                </h2>

                <div class="text-white">
                    <ul class="d-flex" style="list-style: none;padding: 0px;">
                        <li class="mr-2 px-1 bg-gradient-purple">
                            <i class="fa fa-user"></i>
                            <span>{{$postData->author}}</span>
                        </li>
                        <li class="mr-2 px-1 bg-gradient-info"> <i class="fa fa-clock-o"></i>
                            <span>{{$postData->publish_date}}</span>
                        </li>
                        <li class="mr-2 px-1 bg-gradient-yellow">
                            <i class="fa fa-bars"></i>
                            <span>{{$postData->category}}</span>
                        </li>
                    </ul>
                </div>
                <!-- social -->
                <h3 class="text-warning">
                    <i class="fa fa-share"></i> Share!
                    <hr>
                </h3>
                <div class="card card-body pl-1 social_plugin ">
                    <ul>
                        <li>
                            <a target="_blank" href="http://facebook.com" class="facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://linkedin.com" class="linkedin">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://whatsapp.com" class="whatsapp">
                                <i class="fa fa-whatsapp"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://pinterest.com" class="pinterest">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://google-plus.com" class="google-plus">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://github.com" class="github">
                                <i class="fa fa-github"></i>
                            </a>
                        </li>

                        <li>
                            <a target="_blank" href="http://google.com" class="google">
                                <i class="fa fa-google"></i>
                            </a>
                        </li>

                        <li>
                            <a target="_blank" href="http://link.com" class="link">
                                <i class="fa fa-link"></i>
                            </a>
                        </li>

                    </ul>
                </div>

            </div>
            <div class="col-md-12 my-3">
                <div class="body">
                    <p class="">
                        {{$postData->body}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>



@include('pages.footer')