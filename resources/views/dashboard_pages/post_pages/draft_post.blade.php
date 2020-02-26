@extends('dashboard_pages.all_blog')
@section('table')
    <table class="table table-bordered">

        <thead class="bg-info text-white">
        <tr>
            <th width="5%">Action</th>
            <th>Title</th>
            <th>Author</th>
            <th>Category</th>
            <th>Date</th>
        </tr>
        </thead>
        <?php
        $allpost = DB::table('post')->where('publish_status',0)->get();
        ?>
        @foreach($allpost as $post)
            <tbody>
            <tr>
                <td>
                    <a href="{{url('/delete-post',[$post->id])}}" class=""><span class="badge badge-danger"><i class="la la-trash la-2x"></i></span></a>
                </td>
                <td>{{$post->title}}</td>
                <td>Ariyat sinha</td>
                <td>{{$post->category}}</td>
                <td>{{$post->publish_date}} ||
                    @if ($post->publish_status==0)

                        <span class="btn btn-danger btn-sm">
                            <a class="text-white" href="{{url('/unpublished',[$post->post_id])}}">Unpublished</a>
                        </span>
                    @endif
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>
@stop
