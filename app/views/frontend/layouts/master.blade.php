<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>{{ $portal->consejo_comunal }} || PortalComunal.info.ve</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="/frontend/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
    <link href="/frontend/css/styles.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-static">
        <div class="container">
            <a class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                <span class="glyphicon glyphicon-chevron-down"></span>
            </a>
            <div class="nav-collapse collase">
                <ul class="nav navbar-nav">
                    <li><a href="/{{ $portal->subdominio }}">Inicio</a></li>
                    <li><a href="/{{ $portal->subdominio }}/cartelera">Cartelera Informativa</a></li>
                    <li><a href="/{{ $portal->subdominio }}/mision-vision">Misión y Visión</a></li>
                    <li><a href="/{{ $portal->subdominio }}/directiva">Directiva</a></li>
                    <li><a href="/{{ $portal->subdominio }}/proyectos">Proyectos</a></li>
                </ul>
                <ul class="nav navbar-right navbar-nav">
                    {{--<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-search"></i></a>
                        <ul class="dropdown-menu" style="padding:12px;">
                            <form class="form-inline">
                                <button type="submit" class="btn btn-default pull-right"><i class="glyphicon glyphicon-search"></i>
                                </button>
                                <input type="text" class="form-control pull-left" placeholder="Search">
                            </form>
                        </ul>
                    </li>--}}
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <i class="glyphicon glyphicon-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            
                            @if(!Auth::user())
                            <li><a href="/auth/login">Acceder</a></li>
                            <li><a href="/{{ $portal->subdominio }}/registro">Registrarse</a></li>
                            @else
                            
                            <li><a href="/">{{Auth::user()->nombre}} {{Auth::user()->apellido}}</a></li>

                            @endif
                            {{--<li class="divider"></li>
                            <li><a href="#">About</a></li>--}}
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /.navbar -->

    <header class="masthead">
        <div class="container">
            <div class="row">
                <div class="col col-sm-12">
                   <img src="/frontend/images/cintillo.jpg" style="width:100%;height:auto;margin-top:0px;margin-bottom:10px;"/>         
                </div>
                <div class="col col-sm-6">
                    <h1>
                        <a href="#" title="scroll down for your viewing pleasure">{{ $portal->consejo_comunal }}</a>
                        <p class="lead">{{ $portal->direccion }}</p>
                    </h1>
                </div>
                <div class="col col-sm-6">

                    <div class="well pull-right">
                        <img src="/frontend/images/logo.jpg"/>
                    </div>
                </div>
            </div>
        </div>

       {{-- <div class="container">
            <div class="row">
                <div class="col col-sm-12">

                    <div class="panel">
                        <div class="panel-body">
                            You may want to put some news here <span class="glyphicon glyphicon-heart-empty"></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>--}}
    </header>

    <!-- Begin Body -->
    <div class="container">
        <div class="row">
            <div class="col col-sm-3">
                <div id="sidebar">
                    <ul class="nav nav-stacked">
                        <li>
                            <h3 class="highlight">Enlaces <i class="glyphicon glyphicon-dashboard pull-right"></i></h3>
                        </li>

                        <li><a href="/{{ $portal->subdominio }}">Inicio</a></li>
                        <li><a href="/{{ $portal->subdominio }}/cartelera">Cartelera Informativa</a></li>
                        <li><a href="/{{ $portal->subdominio }}/mision-vision">Misión y Visión</a></li>
                        <li><a href="/{{ $portal->subdominio }}/directiva">Directiva</a></li>
                        <li><a href="/{{ $portal->subdominio }}/proyectos">Proyectos</a></li>
                    </ul>
                    
                </div>
            </div>
            <div class="col col-sm-9">
               @yield('content')
            </div>
        </div>
    </div>


    <!-- script references -->
    <script src="/frontend/js/jquery.min.js"></script>
    <script src="/frontend/js/bootstrap.min.js"></script>
    <script src="/frontend/js/scripts.js"></script>
</body>

</html>