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
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link active">Register</a>
                            </li>
                        </ul>

                        <!-- Register -->
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <ul class="row">

                                    <!--Full Name -->
                                    <li class="col-md-12">
                                        <label>Full Name *
                                            <input type="text" name="fullname" class="form-control{{ $errors->has('fullname') ? ' is-invalid' : '' }}"
                                                value="{{ old('fullname') }}" required autofocus>
                                            @if ($errors->has('fullname'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('fullname') }}</strong>
                                            </span>
                                            @endif
                                        </label>
                                    </li>

                                    <!--User Name -->
                                    <li class="col-md-12">
                                        <label>User Name *
                                            <input type="text" name="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
                                                value="{{ old('username') }}" required autofocus>
                                            @if ($errors->has('username'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                            @endif
                                        </label>
                                    </li>
                                    <!-- Email -->
                                    <li class="col-md-12">
                                        <label> Email Address *
                                            <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                name="email" value="{{ old('email') }}" required>
                                            @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </label>
                                    </li>
                                    <!-- Phone -->
                                    <li class="col-md-12">
                                        <label> Phone Number *
                                            <input type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                                name="phone" value="{{ old('phone') }}" required>
                                            @if ($errors->has('phone'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                            @endif
                                        </label>
                                    </li>
                                    <!-- City -->
                                    <li class="col-md-12">
                                        <label> City *
                                            <select name="city_id" class="form-control{{ $errors->has('city_id') ? ' is-invalid' : '' }}">
                                                <option value="1">Khartoum</option>
                                                <option value="2">Bahri</option>
                                                <option value="3">Omdurman</option>
                                            </select>
                                            @if ($errors->has('city_id'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('city_id') }}</strong>
                                            </span>
                                            @endif
                                        </label>
                                    </li>

                                    <!-- Password -->
                                    <li class="col-md-12">
                                        <label> Password *
                                            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                name="password" required>
                                            @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </label>
                                    </li>
                                    <!-- Password -->
                                    <li class="col-md-12">
                                        <label>Confirm Password *
                                            <input name="password_confirmation" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                required>
                                            @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </label>
                                    </li>

                                    <!-- Register -->
                                    <li class="col-md-6">
                                        <button type="submit" class="btn">Register</button>
                                    </li>

                                </ul>
                            </form>

                            <!-- Main Heading -->
                            <div class="heading text-center margin-bottom-50 margin-top-50">
                                <h4>Register WITH SOCIAL MEDIA</h4>
                                <hr>
                            </div>
                            <ul class="login-with">
                                <li> <a href="#."><i class="fa fa-facebook"></i>FACEBOOK</a> </li>
                                <li> <a href="#."><i class="fa fa-google"></i>GOOGLE</a> </li>
                                <li> <a href="#."><i class="fa fa-twitter"></i>TWITTER</a> </li>
                            </ul>
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
        methods: {

        },
    });

</script>
@endsection
