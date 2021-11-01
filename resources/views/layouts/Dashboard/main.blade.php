<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{asset('synadmin/assets/images/favicon-32x32.png')}}" type="image/png" />
    <!--plugins-->
    <link href="{{asset('synadmin/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{asset('synadmin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{asset('synadmin/assets/plugins/highcharts/css/highcharts.css')}}" rel="stylesheet" />
    <link href="{{asset('synadmin/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <link href="{{asset('synadmin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{asset('synadmin/assets/css/pace.min.css')}}" rel="stylesheet" />
    <script src="{{asset('synadmin/assets/js/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{asset('synadmin/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('synadmin/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{asset('synadmin/assets/css/app.cs')}}s" rel="stylesheet">
    <link href="{{asset('synadmin/assets/css/icons.css')}}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{asset('synadmin/assets/css/dark-theme.css')}}" />
    <link rel="stylesheet" href="{{asset('synadmin/assets/css/semi-dark.css')}}" />
    <link rel="stylesheet" href="{{asset('synadmin/assets/css/header-colors.css')}}" />
    <title>@yield('title')</title>
</head>

<body>
<!--wrapper-->
@include('layouts.Dashboard.sidebar')
@include('layouts.Dashboard.header')
@yield('content')

<!-- Bootstrap JS -->
<script src="{{asset('synadmin/assets/js/bootstrap.bundle.min.js')}}"></script>
<!--plugins-->
<script src="{{asset('synadmin/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('synadmin/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{asset('synadmin/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{asset('synadmin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
<script src="{{asset('synadmin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('synadmin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('synadmin/assets/plugins/highcharts/js/highcharts.js')}}"></script>
<script src="{{asset('synadmin/assets/plugins/highcharts/js/exporting.js')}}"></script>
<script src="{{asset('synadmin/assets/plugins/highcharts/js/variable-pie.js')}}"></script>
<script src="{{asset('synadmin/assets/plugins/highcharts/js/export-data.js')}}"></script>
<script src="{{asset('synadmin/assets/plugins/highcharts/js/accessibility.js')}}"></script>
<script src="{{asset('synadmin/assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
<script>
    new PerfectScrollbar('.dashboard-top-countries');
</script>
<script src="{{asset('synadmin/assets/js/index.js')}}"></script>
<!--app JS-->
<script src="{{asset('synadmin/assets/js/app.js')}}"></script>
</body>

</html>

