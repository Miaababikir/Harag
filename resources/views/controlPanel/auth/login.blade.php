@extends('layouts.admin-login')

@section('content')

    <div class="login-box">
        <div class="login-logo">
            <h1>Harag</h1>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="{{ route('admin.login') }}" method="post">
                    @csrf

                    @if ($errors->has('username'))
                        <span class="text-danger"><strong>{{ $errors->first('username') }}</strong></span>
                    @endif

                    <div class="form-group has-feedback">
                        <span class="fa fa-user form-control-feedback"></span>
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>

                    <div class="form-group has-feedback">
                        <span class="fa fa-lock form-control-feedback"></span>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

@endsection
