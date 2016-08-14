<!DOCTYPE html>
<html class="no-js">

<head>
    <title>Admin Home Page</title>
    <!-- Bootstrap -->
    <link href="{{URL::to('/')}}/Src/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="{{URL::to('/')}}/Src/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="{{URL::to('/')}}/Src/assets/styles.css" rel="stylesheet" media="screen">
    <link href="{{URL::to('/')}}/Src/assets/DT_bootstrap.css" rel="stylesheet" media="screen">
    <script src="{{URL::to('/')}}/Src/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>





    <!-- Bootstrap -->
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
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
</head>
<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="{{ url('home')}}" style="border-right: 2px solid">Dashboard </a>
            <div class="nav-collapse collapse">
                <ul class="nav pull-right">
                    <li class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i>{{ Auth::user()->name }} <i class="caret"></i>

                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a tabindex="-1" href="{{ url('change-password')}}">Change password</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a tabindex="-1" href="{{ url('/logout') }}">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav">

                    <li>

                        <a href="{{ url('category-create-form')}}" style="border-right: 2px solid">Category
                            <br/>
                            @if($category =DB::table('news_table')->count())
                            <span class="badge badge-info">{{$category}}
                            </span>
                            @endif
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('slider-form')}}" style="border-left: 2px #c0c0c0;border-right: 2px solid">Slider <br/>
                            @if($slider =DB::table('slider')->count())
                            <span class="badge badge-info">{{$slider}}</span>
                            @endif
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('news-create')}}" style="border-left: 2px #c0c0c0;border-right: 2px solid">News <br/>
                            @if($news =DB::table('news_table')->count())
                            <span class="badge badge-info">{{$news}}</span>
                            @endif
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('backing-news')}}" style="border-left: 2px #c0c0c0;border-right: 2px solid">Backing News <br/>
                            @if($beakingNews =DB::table('breaking_news')->count())
                            <span class="badge badge-info">{{ $beakingNews}}</span>
                            @endif
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('news-show')}}" style="border-left: 2px #c0c0c0;border-right: 2px solid">News Manage<br/>
                            @if($newsMenage =DB::table('news_table')->count())
                            <span class="badge badge-info">{{$newsMenage}}</span>
                            @endif
                        </a>

                    </li>
                    <li>
                        <a href="{{ url('add-create-form')}}" style="border-left: 2px #c0c0c0;">Adds <br/>
                            @if($adds =DB::table('add_table')->count())
                            <span class="badge badge-info">{{$adds}}</span>
                            @endif
                        </a>

                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
