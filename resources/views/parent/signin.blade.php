<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/login.css">
        <link rel="stylesheet" href="/css/signup.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name',"GLAZBA")}}</title>
        
    </head>
    <body>
        @include('layouts.navbar')
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>