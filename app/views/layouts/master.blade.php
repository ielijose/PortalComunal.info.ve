<!Doctype html>
<!--[if lt IE 7]>      <html class="no-js sidebar-large lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js sidebar-large lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js sidebar-large lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js sidebar-large"> <!--<![endif]-->

<head>
    <!-- BEGIN META SECTION -->
    <meta charset="utf-8">


    @if(Auth::user()->tipo == 'usuario')
        <title>Usuario - PortalComunal.info.ve</title>
    @elseif(Auth::user()->tipo == 'encargado')
        <title>Encargado - PortalComunal.info.ve</title>
    @elseif(Auth::user()->tipo == 'coordinador')
        <title>Coordinador - PortalComunal.info.ve</title>    
    @endif


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description" />
    <meta content="themes-lab" name="author" />
    <link rel="shortcut icon" href="favicon.ico">
    <!-- END META SECTION -->
    <!-- BEGIN MANDATORY STYLE -->
    <link href="{{ asset('/assets/css/icons/icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/plugins.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/style.min.css') }}" rel="stylesheet">
    <link href="#" rel="stylesheet" id="theme-color">
    <!-- END  MANDATORY STYLE -->
    <!-- BEGIN PAGE LEVEL STYLE -->
    @yield('css')
    <!-- END PAGE LEVEL STYLE -->
    <script src="{{ asset('/assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
</head>

<body data-page="">
    <!-- BEGIN TOP MENU -->
    @if(Auth::user()->tipo == 'usuario')
        @include('layouts.usuario.navigation')
    @elseif(Auth::user()->tipo == 'encargado')
        @include('layouts.encargado.navigation')
    @elseif(Auth::user()->tipo == 'coordinador')
        @include('layouts.coordinador.navigation')
    @endif

    <!-- END TOP MENU -->
    <!-- BEGIN WRAPPER -->
    <div id="wrapper">
        <!-- BEGIN MAIN SIDEBAR -->
        @if(Auth::user()->tipo == 'usuario')
            @include('layouts.usuario.sidebar')
        @elseif(Auth::user()->tipo == 'encargado')
            @include('layouts.encargado.sidebar')
        @elseif(Auth::user()->tipo == 'coordinador')
            @include('layouts.coordinador.sidebar')
        @endif
        <!-- END MAIN SIDEBAR -->
        <!-- BEGIN MAIN CONTENT -->
        @yield('content')
        <!-- END MAIN CONTENT -->
    </div>
    <!-- END WRAPPER -->

    <!-- BEGIN MANDATORY SCRIPTS -->
    <script src="{{ asset('/assets/plugins/jquery-1.11.js') }}"></script>
    <script src="{{ asset('/assets/plugins/jquery-migrate-1.2.1.js') }}"></script>
    <script src="{{ asset('/assets/plugins/jquery-ui/jquery-ui-1.10.4.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/jquery-mobile/jquery.mobile-1.4.2.js') }}"></script>
    <script src="{{ asset('/assets/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('/assets/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/mmenu/js/jquery.mmenu.min.all.js') }}"></script>
    <script src="{{ asset('/assets/plugins/nprogress/nprogress.js') }}"></script>
    <script src="{{ asset('/assets/plugins/charts-sparkline/sparkline.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/breakpoints/breakpoints.js') }}"></script>
    <script src="{{ asset('/assets/plugins/numerator/jquery-numerator.js') }}"></script>
    <script src="{{ asset('/assets/plugins/jquery.cookie.min.js') }}" tipo="text/javascript"></script>

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    @yield('javascript')
    <!-- END  PAGE LEVEL SCRIPTS -->

    <!-- END MANDATORY SCRIPTS -->
    <script src="{{ asset('/assets/js/application.js') }}"></script>
</body>
</html>
