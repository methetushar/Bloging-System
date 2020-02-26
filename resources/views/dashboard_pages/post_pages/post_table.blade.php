@extends('dashboard_pages.all_blog')

@section('table')
    <table class="table table-bordered">
        <span class="text-success font-weight-bold">
            @if (session('post_undo'))
                <small>{{session('post_undo')}}</small>
            @endif
        </span>
        <thead class="bg-info text-white">
        <tr>
            <th width="5%">Action</th>
            <th width="10%">Title</th>
            <th width="20%">Author</th>
            <th width="10%">Category</th>
            <th width="10%">Date</th>
        </tr>
        </thead>
        <?php
        $allpost = DB::table('post')->get();
        ?>
        @foreach($allpost as $post)
            <tbody>
            <tr>
                <td>
                    <a href="{{url('/edit-post',[$post->id])}}" class=""><span class="badge badge-default"><i class="la la-edit la-2x"></i></span></a>
                    <a href="{{url('/delete-post',[$post->id])}}" class=""><span class="badge badge-danger"><i class="la la-trash la-2x"></i></span></a>
                </td>
                <td>{{$post->title}}</td>
                <td >{{$post->author}} </td>
                <td>{{$post->category}}</td>
                <td>{{$post->publish_date}} ||
                    @if ($post->publish_status==1)
                        <span class="btn btn-success btn-sm">
                            <a class="text-white" href="{{url('/published',[$post->post_id])}}">Published</a>
                        </span>
                        @else
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
