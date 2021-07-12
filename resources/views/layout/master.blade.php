<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/style.css')}}">
</head>
<body background="{{asset('photo/mainbackground.jpg')}}">

@include('layout.nav')
@yield('content')
</body>
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</html>
