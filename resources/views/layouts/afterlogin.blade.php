<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>iRisk</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="riskassessment.css">
    <link rel="stylesheet" href="toggle.css">
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
        .navbar-default .navbar-brand,{
            color: wheat;
        }
        .panel-default>.panel-heading{
            background-color: #722F37;
            color: wheat;
        }
        .navbar-default .navbar-nav>li>a{
            color: wheat;
        }
        .footer{
            clear: both;
            color: wheat;
            background-color: #722F37;
        }
        .footer .last{ text-align: center; width: 100%; padding-top: 50px; padding-bottom: 10px;}
        .selectBox {
            position: relative;
        }
        .multiselect label{
            padding-left: 20px;
        }
        .selectBox select {
            width: 100%;
            font-weight: bold;
        }
        .overSelect {
            position: absolute;
            left: 0; right: 0; top: 0; bottom: 0;
        }
        #checkboxes {
            display: none;
            border: 1px #dadada solid;
        }
        #checkboxes label {
            display: block;
        }
        #checkboxes label:hover {
            background-color: #1e90ff;
        }
        #groupassess #conf{ padding-bottom: 10px; }
        #groupassess #conf #roundconf, #groupassess #conf #roundint, #groupassess #conf #roundava {
            -webkit-border-radius: 20px 20px 20px 20px;
            border-radius: 20px 20px 20px 20px;
            text-align: center; font-size: 18px; font-style: bold;
            background-color: #722F37; color: wheat; width: 30px; height: 30px;
        }
        #groupassess #conf #roundconf { margin-left: 20px; }
        #groupassess #conf #roundint { margin-left: 60px; }
        #groupassess #conf #roundava { margin-left: 45px; }
    </style>
</head>
<body id="app-layout">
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
                    iRisk
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login To An Existing ISMS</a></li>
                        <li><a href="{{ url('/register') }}">Register A New ISMS</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
    <div class="footer">
        <div class = "last"><i>Developed by >> <a  href = "https://twitter.com/Jaymikels">Ezeokoye Micheal</a> >> <a href = "https://twitter.com/bundayy_">Olayinka Z.O.</a> >> <a href = "https://github.com/Alade-of-GOD">Akintola Femi</a></i></div>
    </div>
    <!-- JavaScripts -->
    <script type="text/javascript" src="forasset.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
