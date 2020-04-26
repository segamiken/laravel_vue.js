<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>todo</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="container">
          <router-view></router-view>
        </div>
        <hr>
        <div class="container-fluid">
            <a href="https://github.com/acro5piano/laravel-vue-jwtauth-spa-todo-app" target="_blank">
                <img src="https://image.flaticon.com/icons/svg/25/25231.svg" width="30" height="20">
            </a>
        </div>
    </div>
    <script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>