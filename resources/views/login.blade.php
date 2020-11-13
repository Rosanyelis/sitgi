<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
        <title>..:::: SISTGI - Sistema de Toma de Decisión de Gestión de Inventario ::::..</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-extension.css" rel="stylesheet">
        <link href="plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="css/sidebar-nav.min.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">    
        <link href="css/style.css" rel="stylesheet">
        <link href="css/colors/default-dark.css" id="theme" rel="stylesheet">
    </head>

        <section id="wrapper" class="login-register">
            <div class="login-box">
                <div class="white-box">
                    <form class="form-horizontal form-material" action="{{ route('dashboard') }}" autocomplete="off">
                        <a href="javascript:void(0)" class="text-center db">
                            <!--<img src="plugins/images/eliteadmin-logo-dark.png" alt="Home" /><br/>-->
                            <h2>SISTGI</h2>
                            <h3>Sistema de Apoyo a la Toma de Decisiones de Gestión de Inventario</h3>
                        </a>  
                        
                        <div class="form-group m-t-40">
                            <div class="col-xs-12">
                                
                                <input id="email" placeholder="correo@gmail.com" type="email" class="form-control" name="" required autofocus>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input id="password" type="password"  class="form-control" name="" placeholder="password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <a href="javascript:void(0)" id="to-recover" class="text-dark"><i class="fa fa-lock m-r-5"></i>Olvidaste la contraseña?</a>
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Iniciar Sesión</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    <!-- jQuery -->
        <script src="../public/js/jquery.min.js"></script>
        <script src="../public/js/tether.min.js"></script>
        <script src="../public/js/bootstrap.min.js"></script>
        <script src="../public/js/bootstrap-extension.min.js"></script>
        <script src="../public/js/sidebar-nav.min.js"></script>
        <script src="../public/js/jquery.slimscroll.js"></script>
        <script src="../public/js/waves.js"></script>
        <script src="../public/js/custom.min.js"></script>
        <script src="../public/js/jquery.sparkline.min.js"></script>
        <script src="../public/js/jquery.charts-sparkline.js"></script>
    
    </body>

</html>
