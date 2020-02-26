@extends('pages.dashboard')


@section('content')
    <div class="col-md-12 my-4">
        <div class="row">
            <div class="col-md-7 ">
                <span style="font-size: 25px" class="font-weight-bold">User </span><small>All User</small>
            </div>
            <div class="col-md-3 ml-auto">
                <small class="text-dark"><i class="la la-dashboard"></i>Dashboard
                    <span class="mx-2" style="color: #ced4da "> > </span>
                    User <span class="mx-2" style="color: #ced4da "> > </span> All User</small>
            </div>
        </div>
    </div>
    <div class="row  px-3">
        <div class="col">
            <div class="card bg-default shadow">
                <div class="card-header bg-transparent border-0">
                    <h3 class="text-white mb-0">User table</h3>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-light table-flush">
                        <thead class="thead-dark text-white">
                        <tr>
                            <th scope="col">User</th>
                            <th scope="col">Role</th>
                            <th scope="col">Status</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Work for this site</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <a href="#" class="avatar rounded-circle mr-3">
                                        <img src="{{asset('blog/img/avater2.png')}}" alt="">


                                    </a>
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">Ariyat sinha</span>
                                    </div>
                                </div>
                            </th>
                            <td>
                                Administrator
                            </td>
                            <td>
                                  <span class="text-success">
                                    <i class="fa fa-circle"></i> Active
                                  </span>
                            </td>
                            <td>
                                <a href="">ariyat@gmail.com</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="mr-2">60%</span>
                                    <div>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a class="btn  btn-icon-only text-warning" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-wrench"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="#">Profile</a>
                                        <a class="dropdown-item" href="#">Posts</a>
                                        <a class="dropdown-item" href="#">Details</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <a href="#" class="avatar rounded-circle mr-3">
                                        <img src="{{asset('blog/img/avater2.png')}}" alt="">


                                    </a>
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">Bappy ahmed</span>
                                    </div>
                                </div>
                            </th>
                            <td>
                                Subscriber
                            </td>
                            <td>
                                  <span class="text-success">
                                    <i class="fa fa-circle-o"></i> Unactivated
                                  </span>
                            </td>
                            <td>
                                24
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="mr-2">40%</span>
                                    <div>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a class="btn  btn-icon-only text-warning" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-wrench"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="#">Profile</a>
                                        <a class="dropdown-item" href="#">Posts</a>
                                        <a class="dropdown-item" href="#">Details</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
