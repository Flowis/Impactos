<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/puic-unam.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/puic-unam.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <title> Inicio de Sesión </title>

    
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

        <div class="main-panel" style="width: 100%;">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand text-center" href="#"> SISTEMA DE CATALOGACIÓN IMPACTOS </a>
                    </div>
                </div>
            </nav>

            <div class="content" >
                <div class="col-md-4 col-md-offset-4">                
                    <div class="card card-user">
                        <div class="image"> <img src="assets/img/lib3.jpg" alt="..."/> </div>
                        
                        <div class="content">
                            <div class="author"> 
                                <img class="avatar border-white" src="assets/img/avatar.jpg" alt="..."/>
                               <h3 class="title"> Inicio de Sesión <br /> </h3>
                            </div>
                            <br>    
                            <form method="POST" action="{{ route('login') }}">
                            @csrf

                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <label> E-mail: </label>
                                        <input id="email" type="email" class="form-control border-input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <label>Contraseña: </label>
                                        <input id="password" type="password" class="form-control border-input{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <br> <hr><br>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary"> {{ __('Iniciar Sesión') }} </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
    <script src="{{asset('js/jquery-1.10.2.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="{{asset('js/bootstrap-checkbox-radio.js')}}" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="{{asset('js/chartist.min.js')}}" type="text/javascript"></script>

    <!--  Notifications Plugin    -->
    <script src="{{asset('js/bootstrap-notify.js')}}" type="text/javascript"></script>
    
    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="{{asset('js/paper-dashboard.js')}}" type="text/javascript"></script>
    
    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{asset('js/demo.js')}}" type="text/javascript"></script>
    
    @yield('footer-script')
    <!--  Google Maps Plugin  "Esta linea se cargará en las vistas de Lugar"  
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    -->
</html>
