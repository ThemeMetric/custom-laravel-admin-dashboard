<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{URL::asset('css/app.css')}}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <link href="{{URL::asset('dashboard/css/laraspace.css')}}" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="{{URL::asset('dashboard/img/favicons/apple-touch-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{URL::asset('dashboard/img/favicons/apple-touch-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{URL::asset('dashboard/img/favicons/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('dashboard/img/favicons/apple-touch-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{URL::asset('dashboard/img/favicons/apple-touch-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{URL::asset('dashboard/img/favicons/apple-touch-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{URL::asset('dashboard/img/favicons/apple-touch-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{URL::asset('dashboard/img/favicons/apple-touch-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{URL::asset('dashboard/img/favicons/apple-touch-icon-180x180.png')}}">
    <link rel="icon" type="image/png" href="{{URL::asset('dashboard/img/favicons/favicon-32x32.png" sizes="32x32')}}">
    <link rel="icon" type="image/png" href="{{URL::asset('dashboard/img/favicons/android-chrome-192x192.png" sizes="192x192')}}">
    <link rel="icon" type="image/png" href="{{URL::asset('dashboard/img/favicons/favicon-96x96.png" sizes="96x96')}}">
    <link rel="icon" type="image/png" href="{{URL::asset('dashboard/img/favicons/favicon-16x16.png" sizes="16x16')}}">
    <link rel="manifest" href="{{URL::asset('dashboard/img/favicons/manifest.json')}}">
    <link rel="mask-icon" href="{{URL::asset('dashboard/img/favicons/safari-pinned-tab.svg')}}" color="#333333">
    <link rel="shortcut icon" href="{{URL::asset('dashboard/img/favicons/favicon.ico')}}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="{{URL::asset('dashboard/img/favicons/mstile-144x144.png')}}">
    <meta name="msapplication-config" content="{{URL::asset('dashboard/img/favicons/browserconfig.xml')}}">

    <!-- Scripts -->
    <script src="{{URL::asset('dashboard/js/core/pace.js')}}"></script>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body id="app" class="login-page">
<div class="login-wrapper">
    <div class="login-box">
        <div class="brand-main">
            <a href="{{ url('/') }}"><img src="{{URL::asset('dashboard/img/logo-large.png')}}" alt="Laraspace Logo"></a>
        </div>

        @yield('content')
        <div class="text-center">
            <p><strong>Copyright &copy; <?php echo date("Y") ?> <a href="http://webdesignernet.com" target="_blank">Sajjad Hossain</a>.</strong> </p>
        </div>
    </div>

</div>


    <!-- Scripts -->
    <script src="{{URL::asset('js/app.js')}}"></script>
    <script src="{{URL::asset('dashboard/js/core/plugins.js')}}"></script>
    <script src="{{URL::asset('dashboard/js/dashboard/dashboard.js')}}"></script>
</body>
</html>


