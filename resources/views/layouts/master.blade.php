<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="M_Adnan">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @include('includes.styles')

</head>
<body>

<div id="app">
    <!-- Wrap -->
    <div id="wrap">

    @include('includes.cart')

    @include('includes.navbar')

    <!-- Main Layout -->
        <main class="cd-main-content">

        @yield('header')

        <!-- Content -->
            <div id="content">

                @yield('content')

            </div>

            @include('includes.footer')

        </main>
        <!-- GO TO TOP  -->
        <a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a>
        <!-- GO TO TOP End -->
    </div>
</div>

@include('includes.scripts')

</body>
</html>
