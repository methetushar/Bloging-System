@extends('pages.dashboard')

@section('content')
    <div class="col-md-12 my-4">
        <div class="row">
            <div class="col-md-7 ">
                <span style="font-size: 25px" class="font-weight-bold">Category </span><small> Display All Category</small>
            </div>
            <div class="col-md-4 ml-auto">
                <small class="text-dark"><i class="la la-dashboard"></i>Dashboard
                    <span class="mx-2" style="color: #ced4da"> > </span>
                    Category <span class="mx-2" style="color: #ced4da "> > </span>All Category</small>
            </div>
        </div>
    </div>
    <div class="card card-body">
        <div class="col-md-12 my-3">
            <div class="row">
                <div class="col-md-5 ">
                    <a data-toggle="modal" data-target="#addCategoryModal" class="btn btn-info border-0"><i class="la la-plus"></i>Add Category</a>
                </div>
            </div>
        </div>
        @if(session('deleted'))
            <span class="text-danger">{{session('deleted')}}</span>
        @endif
        <table class="table table-bordered">
            <thead class="bg-info text-white">
            <tr>
                <th width="5%">Action</th>
                <th>Category name</th>
                <th width="10%">Publication Status</th>
                <th width="10%">Post count</th>
            </tr>
            </thead>
            <?php
                $category = DB::table('category')->get();
            ?>
            @foreach ($category as $data)


            <tbody>
            <tr>
                <td>
                <!-- {{url('/categoryEdit',[$data->id])}} -->
                    <a href="" data-toggle="modal" data-target="#editCategoryModal" class=""><span class="badge badge-default"><i class="la la-edit la-2x"></i></span></a>
                    <a href="{{url('/categoryDelete',[$data->id])}}" class=""><span class="badge badge-danger"><i class="la la-trash la-2x"></i></span></a>
                </td>
                <td>{{$data->category_name}}</td>
                <td>
                    @if ($data->publication_status == 1)
                        <a href="{{url('/active',[$data->id])}}">
                            <span class="btn btn-success btn-sm"><i class="la la-check"></i>Active</span>
                        </a>
                        @else
                        <a href="{{url('/unactivated',[$data->id])}}" class="">
                            <span class="btn btn-warning btn-sm"><i class="la la-stop"></i>Unactivated</span>
                        </a>
                    @endif

                </td>
                <td>
                    4
                </td>
            </tr>
            </tbody>
            <div class="modal fade show" id="editCategoryModal">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title text-white" >Edit Category</h5>
                    <button class="close" data-dismiss="modal">
                        <span>×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{url('create-category')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Category name</label>
                            <input type="text"
                             name="category_name" 
                             value="{{$data->id}}"
                             class="form-control">
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-info" >Update</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

            @endforeach
        </table>
    </div>




    <div class="modal fade show" id="addCategoryModal">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title text-white" >Add Category</h5>
                    <button class="close" data-dismiss="modal">
                        <span>×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{url('create-category')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Category name</label>
                            <input type="text" name="category_name" placeholder="Enter category name" class="form-control">
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-info" >Add</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade show" id="editCategoryModal">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title text-white" >Edit Category</h5>
                    <button class="close" data-dismiss="modal">
                        <span>×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{url('create-category')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Category name</label>
                            <input type="text" name="category_name" class="form-control">
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-info" >Update</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@stop
