@extends('layouts.master')

@section('content')

    <section class="chart-page login gray-bg padding-top-100 padding-bottom-100">
        <div class="container">

            <!-- Payments Steps -->
            <div class="shopping-cart">

                <!-- SHOPPING INFORMATION -->
                <div class="cart-ship-info">
                    <div class="row">

                        <!-- Login Register -->
                        <div class="col-sm-7 center-block">

                            <!-- Nav Tabs -->
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link active">Login</a>
                                </li>
                            </ul>

                            <!-- Login Register Inside -->
                            <div class="tab-content" id="myTabContent">

                                <!-- Login -->
                                <div class="tab-pane fade show active" id="log" role="tabpanel"
                                     aria-labelledby="login-tab">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <ul class="row">

                                            <!-- Email -->
                                            <li class="col-md-12">
                                                <label>Email Address
                                                    <input type="text"
                                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                           name="email" value="{{ old('email') }}" required autofocus>
                                                    @if ($errors->has('email'))
                                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                    @endif
                                                </label>
                                            </li>
                                            <!-- Password -->
                                            <li class="col-md-12">
                                                <label>Password
                                                    <input type="password" name="password"
                                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                           required>

                                                    @if ($errors->has('password'))
                                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                    @endif
                                                </label>
                                            </li>

                                            <!-- LOGIN -->
                                            <li class="col-md-6">
                                                <button type="submit" class="btn">LOGIN</button>
                                            </li>

                                            <!-- FORGET PASS -->
                                            <li class="col-md-6">
                                                <div class="margin-top-15 text-right"><a href="{{route('register')}}">Register</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>

                                    <!-- Main Heading -->
                                    <div class="heading text-center margin-bottom-50 margin-top-50">
                                        <h4>LOGIN WITH SOCIAL MEDIA</h4>
                                        <hr>
                                    </div>
                                    <ul class="login-with">
                                        <li><a href="#"><i class="fa fa-facebook"></i>FACEBOOK</a></li>
                                        <li><a href="#"><i class="fa fa-google"></i>GOOGLE</a></li>
                                        <li><a href="{{ route('login.social', 'github') }}"><i class="fa fa-github"></i>GITHUB</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('scripts')
    <script>
        const app = new Vue({
            el: '#app',
            data: {
                search: '',
            },
            methods: {},
        });

    </script>
@endsection
