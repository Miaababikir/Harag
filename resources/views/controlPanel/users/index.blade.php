@extends('layouts.cpanel')

@section('header')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Control Users</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Users Table</h3>

                        <div class="card-tools">

                            <div class="input-group input-group-sm">

                                <a href="#" class="btn btn-primary btn-sm float-right" data-toggle="modal"
                                   data-target="#add"><i class="fa fa-plus"></i> New User</a>

                                <input type="text" name="table_search" class="form-control float-right"
                                       placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>

                            </div>


                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>City</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>183</td>
                                <td>Mosab</td>
                                <td>miaababikir@gmail.com</td>
                                <td>+249904741609@gmail.com</td>
                                <td>Khartoum</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#edit"><i class="fa fa-edit"></i> Edit
                                    </button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#delete"><i class="fa fa-trash"></i> Delete
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add new User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label">User Name</label>

                                <input type="text" class="form-control" placeholder="Full name">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Email</label>

                                <input type="email" class="form-control" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Phone</label>

                            <input type="number" class="form-control" placeholder="Phone">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Password</label>

                            <input type="password" class="form-control" placeholder="Password">
                        </div>

                        <div class="form-group">
                            <label>City</label>
                            <select class="form-control">
                                <option>Khartoum</option>
                                <option>Omdurman</option>
                                <option>Bahri</option>
                            </select>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label">User Name</label>

                            <input type="text" class="form-control" placeholder="Full name">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Email</label>

                            <input type="email" class="form-control" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Phone</label>

                            <input type="number" class="form-control" placeholder="Phone">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Password</label>

                            <input type="password" class="form-control" placeholder="Password">
                        </div>

                        <div class="form-group">
                            <label>City</label>
                            <select class="form-control">
                                <option>Khartoum</option>
                                <option>Omdurman</option>
                                <option>Bahri</option>
                            </select>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are sure to <strong>DELETE</strong> this User?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>

@endsection
