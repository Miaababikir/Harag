<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @include('user-panel.includes.styles')

</head>
<body class="hold-transition sidebar-mini">

<div id="app">
    <!-- Site wrapper -->
    <div class="wrapper">

    @include('user-panel.includes.navbar')

    @include('user-panel.includes.sidebar')

    <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            @yield('header')

            @yield('content')

        </div>
        <!-- /.content-wrapper -->

        @include('user-panel.includes.footer')

    </div>
    <!-- ./wrapper -->


    @include('user-panel.includes.scripts')
</div>

</body>
</html>
