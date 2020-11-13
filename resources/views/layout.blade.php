<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('plugins/images/favicon.png')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>..:::: SISTGI - Sistema de Toma de Decisión de Gestión de Inventario ::::..</title>
        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-extension.css')}}" rel="stylesheet">
        <link href="{{ asset('plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/bower_components/custom-select/custom-select.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/bower_components/morrisjs/morris.css')}}" rel="stylesheet">
        <link href="{{ asset('css/sidebar-nav.min.css')}}" rel="stylesheet">
        <link href="{{ asset('css/animate.css')}}" rel="stylesheet">    
        <link href="{{ asset('css/style.css')}}" rel="stylesheet">
        <link href="{{ asset('css/sweetalert.css')}}" rel="stylesheet">
        <link href="{{ asset('css/colors/default-dark.css')}}" id="theme" rel="stylesheet">
    </head>

    <body class="fix-sidebar">
        <!-- Preloader -->
        <div class="preloader">
            <div class="cssload-speeding-wheel"></div>
        </div>

        <div id="wrapper">
            <!-- Top Navigation -->
            <nav class="navbar navbar-default navbar-static-top m-b-0">
                <div class="navbar-header">
                    <!-- Toggle icon for mobile view -->
                    <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                    <!-- Logo -->
                    <div class="top-left-part">
                        <a class="logo" href="index.html">
                            <!-- Logo icon image, you can use font-icon also -->
                            <b>
                            <!--This is dark logo icon-->
                            <img src="{{ asset('plugins/images/eliteadmin-logo.png')}}" alt="home" class="dark-logo" />
                            <!--This is light logo icon-->
                            <img src="{{ asset('plugins/images/eliteadmin-logo-dark.png')}}" alt="home" class="light-logo" />
                         </b>
                            <!-- Logo text image you can use text also -->
                            <span class="hidden-xs">
                                <!--This is dark logo text-->
                                <img src="{{ asset('plugins/images/nombre.png')}}" alt="home" class="dark-logo" />
                            </span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <!-- Search input and Toggle icon -->
                    <ul class="nav navbar-top-links navbar-left hidden-xs">
                        <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#">
                                <i class="fa fa-bell"></i>
                                <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                            </a>
                            <!-- .dropdown-messages -->
                            <ul class="dropdown-menu mailbox animated slideInUp">
                                <li>
                                    <div class="drop-title">Tienes 0 notificación</div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        <!--<a href="#">
                                            <div class="mail-contnet">
                                                <span class="mail-desc">Just see the my admin!</span> 
                                                <span class="time">9:30 AM</span>
                                            </div>
                                        </a>-->
                                    </div>
                                </li>
                                
                                <li>
                                    <a class="text-center" href="javascript:void(0);"> <strong>Ver todas las notificaciones</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                            <!-- /.dropdown-messages -->
                        </li>
                        <li>
                            <a href="{{ asset('pdf/Manual de Usuario.pdf')}}" target="/blank" class=" waves-effect waves-light">
                                <i class="fa fa-question-circle" style="font-size: 18px;"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-header -->
                <!-- /.navbar-top-links -->
                <!-- /.navbar-static-side -->
            </nav>
            <!-- End Top Navigation -->
            <!-- Left navbar-sidebar -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                    <!-- User Profile -->
                    <div class="user-profile">
                        <div class="dropdown user-pro-body">
                            <div><img src="{{ asset('plugins/images/users/4.jpg')}}" alt="user-img" class="img-circle"></div>
                            <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rosanyelis Mendoza <span class="caret"></span></a>
                            <ul class="dropdown-menu animated slideInUp">
                                <li><a href="{{ route('login')}}"><i class="fa fa-power-off"></i> Cerrar Sesión</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Close user profile -->
                    <ul class="nav" id="side-menu">
                        <li class="nav-small-cap m-t-10 text-center">--- Main Menu ---</li>
                        <li><a href="{{ route('dashboard') }}" class="waves-effect"><i  class="fa fa-home fa-fw"></i> <span class="hide-menu">Dashboard </span></a> </li>
                        <li>
                            <a href="javascript:void(0)" class="waves-effect "><i class="fa fa-archive fa-fw"></i> <span class="hide-menu">Inventario<span class="fa arrow"></span><span class="label label-rouded label-purple pull-right">3</span></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="{{ route('productos') }}">Productos</a></li>
                                <li><a href="{{ route('inventariogeneral') }}">Inventario General</a></li>
                                <li><a href="{{ route('stockmerma') }}">Inventario de Merma</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="waves-effect "><i class="fa fa-shopping-bag fa-fw"></i> <span class="hide-menu">Ventas<span class="fa arrow"></span><span class="label label-rouded label-purple pull-right">3</span></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="{{ route('ventas') }}">Ventas</a></li>
                                <li><a href="{{ route('clientes') }}">Clientes</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="waves-effect "><i class="fa fa-shopping-cart fa-fw"></i> <span class="hide-menu">Compras<span class="fa arrow"></span><span class="label label-rouded label-purple pull-right">2</span></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="{{ route('ingresos') }}">Ingresos</a></li>
                                <li><a href="{{ route('proveedores') }}">Proveedores</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="waves-effect "><i class="fa fa-file-pdf-o fa-fw"></i> <span class="hide-menu">Reportes<span class="fa arrow"></span><span class="label label-rouded label-purple pull-right">2</span></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="{{ route('reportes') }}">PDF</a></li>
                                <li><a href="{{ route('estadisticas') }}">Estadísticos</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="waves-effect "><i class="fa fa-cogs fa-fw"></i> <span class="hide-menu">Configuración<span class="fa arrow"></span><span class="label label-rouded label-purple pull-right">4</span></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="{{ route('categoria') }}  ">Categorias</a></li>
                                <li><a href="{{ route('marca') }}">Marcas</a></li>
                                <li><a href="{{ route('empresa') }}">Empresa</a></li>
                                <li><a href="{{ route('usuarios') }}">Usuarios</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Left navbar-header end -->
            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    
                @yield('contenido')

                <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
                <footer class="footer text-center"> 2019 &copy; Desarrollado y Documentado por TSU. Rosanyelis Mendoza y TSU. María Fabiola Giraldo. </footer>
            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->
        <!-- jQuery -->
        <script src="{{ asset('js/jquery.min.js')}}"></script>

        <script src="{{ asset('js/tether.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap-extension.min.js')}}"></script>
        <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('plugins/bower_components/custom-select/custom-select.min.js')}}"></script>
        <script src="{{ asset('js/sidebar-nav.min.js')}}"></script>
        <script src="{{ asset('js/jquery.slimscroll.js')}}"></script>
        <script src="{{ asset('js/waves.js')}}"></script>
        <script src="{{ asset('js/custom.min.js')}}"></script>
        <!-- Chart JS -->

        <script src="{{ asset('js/jquery.sparkline.min.js')}}"></script>
        <script src="{{ asset('js/jquery.charts-sparkline.js')}}"></script>

        <script>
            $(document).ready(function() {
                //Funcion para inicializar la datatables
                $('#myTable').DataTable();
                $(".select2").select2();
            });
        </script>
        @stack('scripts')
    </body>

</html>
