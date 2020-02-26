@extends('dashboard_pages.all_blog')
@section('table')
    <table class="table table-bordered">
        <span class="text-success font-weight-bold">
            @if (session('post_undo'))
                <small>{{session('post_undo')}}</small>
            @endif
        </span>
        <span class="text-success font-weight-bold">
            @if (session('post_delete'))
                <small>{{session('post_delete')}}</small>
            @endif
        </span>
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
        $allpost = DB::table('deleted_post')->get();
        ?>
        @foreach($allpost as $post)
            <tbody>
            <tr>
                <td>
                    <a href="{{url('/undo-post',[$post->post_id])}}" class=""><span class="badge badge-warning"><i class="la la-undo la-2x"></i></i></span></a>
                    <a href="{{url('/permanent-delete',[$post->post_id])}}" class=""><span class="badge badge-danger"><i class="la la-trash la-2x"></i></span></a>
                </td>
                <td>{{$post->title}}</td>
                <td>Ariyat sinha</td>
                <td>{{$post->category}}</td>
                <td>{{$post->publish_date}}

                </td>
            </tr>
            </tbody>
        @endforeach
    </table>
@stop
