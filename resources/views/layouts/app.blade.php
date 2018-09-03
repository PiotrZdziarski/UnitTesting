<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Unit Testing</title>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="icon" href="{{asset('img/logo.png')}}" type="image/png">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CMontserrat:400,500">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/perfect-scrollbar.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/morris.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-jvectormap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/horizontal-timeline.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/weather-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/dropzone.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/ion.rangeSlider.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/ion.rangeSlider.skinFlat.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

<div class="wrapper">

    @include('components.navbar')
    @yield('content')

</div>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('js/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('js/raphael.min.js')}}"></script>
<script src="{{asset('js/morris.min.js')}}"></script>
<script src="{{asset('js/select2.min.js')}}"></script>
<script src="{{asset('js/jquery-jvectormap.min.js')}}"></script>
<script src="{{asset('js/jquery-jvectormap-world-mill.min.js')}}"></script>
<script src="{{asset('js/horizontal-timeline.min.js')}}"></script>
<script src="{{asset('js/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/jquery.steps.min.js')}}"></script>
<script src="{{asset('js/dropzone.min.js')}}"></script>
<script src="{{asset('js/ion.rangeSlider.min.js')}}"></script>
<script src="{{asset('js/datatables.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
