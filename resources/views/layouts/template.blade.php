<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/puic-unam.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/puic-unam.png') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<title> @yield('title') </title>
	
	<!-- Bootstrap core CSS     -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css')}}">
	
	<!-- Animation library for notifications   -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.min.css')}}">
	
	<!--  Paper Dashboard core CSS    -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/paper-dashboard.css')}}">
	
	<!--  CSS for Demo Purpose, don't include it in your project     -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/demo.css')}}">
	
	<!--  Fonts and icons    -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themify-icons.css')}}">	
    
</head>
<body>

	<div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="danger">
        <!--
    		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
    		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    	-->
        	<div class="sidebar-wrapper">
                <div class="logo" align="center">
                    <h2 class="simple-text">PUIC-UNAM</h2>

                    <img src="../assets/img/puic-unam.png" alt="..."/> 

                </div>

                <ul class="nav">
                    <li class="{{ Request::segment(1) === 'documento' ? 'active' : null }}">

                        <a href="{{ URL::action('Documento\DocumentoController@index') }}">

                       		<i class="ti-file"></i>
                       		<p>Documento</p>
                       	</a>
                    </li>
                    <li class="{{ Request::segment(1) === 'autor' ? 'active' : null }}">

                        <a href="{{ URL::action('Autor\AutorController@index') }}">

                        	<i class="ti-id-badge"></i>
                        	<p>Autor</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(1) === 'editor' ? 'active' : null }}">
                        <a href="">
                        	<i class="ti-notepad"></i>
                        	<p>Editor</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(1) === 'impacto' ? 'active' : null }}">
                        <a href="">
                        	<i class="ti-bookmark"></i>
                        	<p>Impacto</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(1) === 'institucion' ? 'active' : null }}">
                        <a href="">
                        	<i class="ti-bar-chart-alt"></i>
                        	<p>Institución</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(1) === 'persona' ? 'active' : null }}">
                        <a href="">
                        	<i class="ti-user"></i>
                        	<p>Persona - Actor</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(1) === 'tema' ? 'active' : null }}">
                        <a href="">
                        	<i class="ti-agenda"></i>
                        	<p>Tema</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(1) === 'lugar' ? 'active' : null }}">
                        <a href="">
                        	<i class="ti-location-pin"></i>
                        	<p>Lugar</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(1) === 'etnia' ? 'active' : null }}">
                        <a href="">
                        	<i class="ti-map-alt"></i>
                        	<p>Etnia</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(1) === 'pais' ? 'active' : null }}">
                        <a href="">
                        	<i class="ti-world"></i>
                        	<p>País</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(1) === 'subtema' ? 'active' : null }}">
                        <a href="">
                        	<i class="ti-menu"></i>
                        	<p>Subtema</p>
                        </a>
                    </li>
                </ul>
        	</div>
        </div>

        <div class="main-panel">
    		<nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar bar1"></span>
                            <span class="icon-bar bar2"></span>
                            <span class="icon-bar bar3"></span>
                        </button>
                        <a class="navbar-brand" href="#">SISTEMA DE CATALOGACIÓN IMPACTOS</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>

                            	<a>

                     			<i class="ti-user"></i>
    							<p>{{ Auth::user()->name }}</p>
                                </a>
                            </li> 
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
    								<b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Documentos</a></li>
                                    <li><a href="#">Descargas</a></li>
                                </ul>
                            </li>
    						<li>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
    								<i class="ti-share"></i>
    								{{ __('Salir') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="content">
            	@yield('content')
            </div>

            <footer class="footer">
                <div class="container-fluid">
    				<div class="copyright pull-right">
                        &copy; <script>document.write(new Date().getFullYear())</script>, PUIC-UNAM
                    </div>
                </div>
            </footer>
        </div>
    </div>

</body>

	<!--   Core JS Files   -->
	<script src="{{asset('assets/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="{{asset('assets/js/bootstrap-checkbox-radio.js')}}" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="{{asset('assets/js/chartist.min.js')}}" type="text/javascript"></script>

	<!--  Notifications Plugin    -->
	<script src="{{asset('assets/js/bootstrap-notify.js')}}" type="text/javascript"></script>
	
	<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="{{asset('assets/js/paper-dashboard.js')}}" type="text/javascript"></script>
	
	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="{{asset('assets/js/demo.js')}}" type="text/javascript"></script>
	
	@yield('footer-script')
	<!--  Google Maps Plugin  "Esta linea se cargará en las vistas de Lugar"  
    	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
	-->
</html>
