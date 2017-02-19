<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Market</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div id="app" class="col-md-10 col-sm-10 col-lg-10 col-md-offset-1 col-sm-offset-1 col-lg-offset-1">
    @include('layouts.menu')


    <div class="row">
        <div class="col-md-2">
            @include('categories.menu')
        </div>
        <div class="col-md-10">
            @yield('content')
        </div>
    </div>

    @include('layouts.further')
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Scripts -->
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
