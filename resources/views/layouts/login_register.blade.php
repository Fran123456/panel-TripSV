<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->


  <!--PLANTILLA---------------------------------------------------------------------->

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">


    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

<!--PLANTILLA------------------------------------------------------------------------>

<style type="text/css">
    #op1 {
    background-image: url(perfil/plume.png);
    background-repeat:no-repeat;
    padding-left:25px;
    line-height:50px;
    margin-bottom:2px;
    }
</style>
</head>
<body class="gray-bg">


  @yield('content')

<!--PLANTILLA----------------------------------------------->

<!-- Mainly scripts -->
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

<!--PLANTILLA----------------------------------------------->



</body>
</html>
