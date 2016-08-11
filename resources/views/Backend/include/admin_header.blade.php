<!DOCTYPE html>
<html class="no-js">

<head>
    <title>Admin Home Page</title>
    <!-- Bootstrap -->
    <link href="{{URL::to('/')}}/Src/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="{{URL::to('/')}}/Src/assets/DT_bootstrap.css" rel="stylesheet" media="screen">
    <link href="{{URL::to('/')}}/Src/vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
    <link href="{{URL::to('/')}}/Src/css/toastr.min.css" rel="stylesheet" media="screen">
    <!--- Sweet Alert message --->
    <script src="{{URL::to('/')}}/Src/js/jquery-2.1.3.min.js"></script>
    <script src="{{URL::to('/')}}/Src/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/Src/dist/sweetalert.css">
    <!-- Jquery form validation -->



  <!--  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>-->
    <link type="text/css" rel="stylesheet" href="{{URL::to('/')}}/Src/css/jaquery_validation.css"/>
    <!-- Jquery form validation -->
    <script type="text/javascript" src="{{URL::to('/')}}/Src/validation/jquery.min.js"></script>



    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/Src/vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css">
    <link href="{{URL::to('/')}}/Src/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="{{URL::to('/')}}/Src/assets/styles.css" rel="stylesheet" media="screen">
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="{{URL::to('/')}}/Src/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">Admin Panel</a>
            <div class="nav-collapse collapse">
                <ul class="nav pull-right">
                    <li class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> Vincent Gabriel <i class="caret"></i>

                        </a>
                        <ul class="dropdown-menu">
                            <li class="divider"></li>
                            <li>
                                <a tabindex="-1" href="{{ url('/logout') }}">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>