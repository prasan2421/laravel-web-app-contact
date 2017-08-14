<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @section ('head')
        <link href="{{URL::asset('/css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{URL::asset('/css/style.css')}}" rel="stylesheet">
        <link href="{{URL::asset('/css/style _gallery.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{URL::asset('font-awesome-4.7.0/css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{URL::asset('/css/animate.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Italianno" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Croissant+One|Italianno" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
</head>
<body>
@include('inc.navbar')
@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif
@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

@yield('body')
@include('inc.footer')
@yield('javascriptfiles')
</body>
</html>