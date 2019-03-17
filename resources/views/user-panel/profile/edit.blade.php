@extends('layouts.user-cpanel')


@section('header')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Profile</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Profile</a></li>
                        <li class="breadcrumb-item active">Edit Information</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

@endsection


@section('content')


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header p-2">
                        <h3 class="card-title">Settings</h3>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="inputName" class="control-label">Name</label>
                                <input type="email" class="form-control"
                                       placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="control-label">Email</label>
                                <input type="email" class="form-control"
                                       placeholder="Email">
                            </div>

                            <div class="form-group">
                                <label for="inputName" class="control-label">Phone</label>
                                <input type="number" class="form-control"
                                       placeholder="Phone">
                            </div>

                            <div class="form-group">
                                <label for="inputName" class="control-label">Password</label>
                                <input type="password" class="form-control"
                                       placeholder="Password">
                            </div>

                            <div class="form-group">
                                <label>City</label>
                                <select class="form-control">
                                    <option>Khartoum</option>
                                    <option>Omdurman</option>
                                    <option>Bahri</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
        </div>
    </div>


@endsection
