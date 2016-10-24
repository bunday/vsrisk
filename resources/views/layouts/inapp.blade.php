<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>After Login</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }
        .beem{
            color: red;
        }
        .fa-btn {
            margin-right: 6px;
        }
        .navbar-default {
            background-color: #722F37;

        }
        .btn-primary {
            background-color: #722F37;
            border-color: #722F37;

        }
        .navbar-default .navbar-brand{
            color: wheat;
        }
        .panel-default>.panel-heading{
            background-color: #722F37; 
            color: wheat; 
        }
        .navbar-default .navbar-nav>li>a{
            color: wheat;
        }
        .progress-bar-mine{
            background-color: #808080;
        }
        .num{
            color: #722F37;
        }
        .col-md-0{
            position: relative;
            min-height: 0.5px;
        }

        #pic{
            margin: 10px;
        }
        #footer {
           position:fixed;
           left:0px;
           bottom:0px;
           height:30px;
           width:100%;
           color: wheat;
           background:#722F37;
        }
        
    </style>
</head>
<body id="app-layout">
    <div class="">

        <img  src="logo.jpg" width="100" height="100" id="pic">
       
        <img  align="Right" src="manu.jpg" width="100" height="100" id="pic">
        
       
    </div>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Organization Name
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                               UserName <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
    <div id="footer" class="row">
        <div class="col-md-3">© "Our Name", 2016. All Rights Reserved.</div>
        <div class="col-md-2"></div><div class="col-md-1"></div>
        
        <div class="col-md-6" align="Right">Contact Support | Share</div>
    </div>
    <!-- JavaScripts -->
    <script type="text/javascript" src="progress.js" ></script>
    <script type="text/javascript" src="maths.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
