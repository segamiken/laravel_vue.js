<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vue TODO</title>

    <link rel="stylesheet" href="css/app.css">

    <script>
        window.Laravel = {};
        window.Laravel.csrfToken = "{{ csrf_token() }}";
    </script>
</head>
<body>
    <div id="app">
        <navbar></navbar>
        <div class="container">
          <router-view></router-view>
        </div>
    </div>
    <script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>