<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js sidebar-large lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js sidebar-large lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js sidebar-large lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js sidebar-large"> <!--<![endif]-->

<head>
    <!-- BEGIN META SECTION -->
    <meta charset="utf-8">
    <title>Recuperar contraseña :: SabuesOOnline.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description" />
    <meta content="themes-lab" name="author" />
    <link rel="shortcut icon" href="/backend/assets/img/favicon.png">
    <!-- END META SECTION -->
    <!-- BEGIN MANDATORY STYLE -->
    <link href="/backend/assets/css/icons/icons.min.css" rel="stylesheet">
    <link href="/backend/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/backend/assets/css/plugins.min.css" rel="stylesheet">
    <link href="/backend/assets/plugins/bootstrap-loading/lada.min.css" rel="stylesheet">
    <link href="/backend/assets/css/style.min.css" rel="stylesheet">
    <link href="#" rel="stylesheet" id="theme-color">
    <!-- END  MANDATORY STYLE -->
    <!-- BEGIN PAGE LEVEL STYLE -->
    <link href="/backend/assets/css/animate-custom.css" rel="stylesheet">

    <style>
    #bg {
    	position: fixed; 
    	top: 0; 
    	left: 0; 

    	/* Preserve aspet ratio */
    	min-width: 100%;
    	min-height: 100%;
    }
    </style>
    <!-- END PAGE LEVEL STYLE -->
    <script src="/backend/assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body class="login fade-in" data-page="login" >
	<img src="/backend/assets/img/bg_login.jpg" id="bg" alt="">
    <!-- START SIGNUP BOX -->
    <div class="container" id="login-block">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-sm-offset-2 col-md-offset-6">
                @include('backend.layouts.alert')
                <div class="login-box clearfix animated flipInY">
                    <div class="page-icon animated bounceInDown">
                        <img src="/backend/assets/img/account/login-questionmark-icon.png" alt="Register icon" />
                    </div>

                    <div class="login-form">
                        <!-- Start Error box -->
                        @if($errors->all())
                        <div class="alert alert-danger ">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <h4>Error!</h4>
                            @foreach ($errors->all('<li>:message</li>') as $message)
                            {{ $message }}
                            @endforeach
                        </div>
                        @endif
                        <hr>
                        <!-- End Error box -->

                        <form action="/auth/forgot/reset" method="post" id="login">

                            <p>Introduce tu correo electronico y tus nuevas contraseñas para cambiarlas.</p>

                            <input type="hidden" name="token" value="{{ $token }}">
                            <input type="email" name="email" class="input-field" required>
                            <input type="password" name="password" class="input-field" required>
                            <input type="password" name="password_confirmation" class="input-field" required>

                            <button type="submit" class="btn btn-login btn-reset">Reestablecer Contraseña</button>
                        </form>
                        <div class="login-links">
                            <a href="/auth/login">Ya tienes una cuenta? <strong>Acceder</strong></a>
                            <br>
                            <a href="/auth/register">No tienes una cuenta? <strong>Registrate</strong></a>                        </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- END SIGNUP BOX -->
        <!-- BEGIN MANDATORY SCRIPTS -->
        <script src="/backend/assets/plugins/jquery-1.11.js"></script>
        <script src="/backend/assets/plugins/jquery-migrate-1.2.1.js"></script>
        <script src="/backend/assets/plugins/jquery-ui/jquery-ui-1.10.4.min.js"></script>
        <script src="/backend/assets/plugins/jquery-mobile/jquery.mobile-1.4.2.js"></script>
        <script src="/backend/assets/plugins/bootstrap/bootstrap.min.js"></script>
        <script src="/backend/assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
        <!-- END MANDATORY SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="/backend/assets/plugins/backstretch/backstretch.min.js"></script>
        <script src="/backend/assets/plugins/bootstrap-loading/lada.min.js"></script>
        <script src="/backend/assets/js/account.js"></script>
        <!-- END PAGE LEVEL SCRIPTS -->

        <script type="text/javascript">

        $(document).on("ready", function(){


        });

        </script>
    </body>

    </html>
