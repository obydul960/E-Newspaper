<!DOCTYPE html>
<html class="no-js">

<head>
    <title>Admin Home Page</title>
    <!-- Bootstrap -->
    <link href="Src/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="Src/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="Src/assets/DT_bootstrap.css" rel="stylesheet" media="screen">
    <link href="Src/vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
    <link href="Src/assets/styles.css" rel="stylesheet" media="screen">
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="Src/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>


    <!----- Flash message show ---->
    <?php
    function css($styles, $default) {
        $html = '';
        foreach ($styles as $style) {
            $html.= Html::style($default . $style . '.css');
        }
        return $html;
    }
    ?>

    <!-- ========== Css Files ========== -->
    {!!
    css([
    'root',
    'select2',
    'datatabletools',
    'toastr.min',
    ],'css/')
    !!}


    <style>
        body{
            /*overflow-x:hidden;*/
            overflow-y:auto;
            /*background: rgb(0, 188, 212);*/

        }
        #chart {
            position: relative;
            left: 40px;
        }
        #y_axis {
            position: absolute;
            top: 0;
            bottom: 0;
            width: 40px;
        }
        #top {
            background: #16a085;
        }
        /*   .sidebar {
         background: #95a5a6;
         }*/
        body {
            font-family: Helvetica Neue, Arial, sans-serif;
            font-size: 14px;
            color: #444;
        }

        table {
            border: 2px solid #42b983;
            border-radius: 3px;
            background-color: #fff;
        }

        th {
            background-color: #42b983;
            color: black;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -user-select: none;
        }

        td {
            background-color: #f9f9f9;
        }

        th, td {
            min-width: 120px;
            padding: 10px 20px;
        }

        th.active {
            color: #fff;
        }
        table.dataTable.no-footer {
            border-bottom: 2px solid #42b983;
        }
        .applogo2{
            width: 384px;
            height: 60px;
            color: #fff;
            position: relative;
            padding: 19px 0 0 0px;
            float: left;
            text-align: center;
            overflow: hidden;
            background: #16a085;
            margin-left:10%;
        }
        .applogo {
            width: 250px;
            height: 60px;
            background: #16a085;
            color: #fff;
            position: relative;
            padding: 19px 0 0 0px;
            float: left;
            text-align: center;
            margin-top: -10px;
        }
        .active{
            background: #16a085;
            color: #2c3e50;
        }
        /*.title_print{background-color:#EEEEEE;  width:150px; height:100px; padding:10px;}*/
    </style>
    <!---- Flash message end ----->



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
                            <li>
                                <a tabindex="-1" href="#">Profile</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a tabindex="-1" href="{{ url('/logout') }}">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav">
                    <li class="active">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Settings <b class="caret"></b>

                        </a>
                        <ul class="dropdown-menu" id="menu1">
                            <li>
                                <a href="#">Tools <i class="icon-arrow-right"></i>

                                </a>
                                <ul class="dropdown-menu sub-menu">
                                    <li>
                                        <a href="#">Reports</a>
                                    </li>
                                    <li>
                                        <a href="#">Logs</a>
                                    </li>
                                    <li>
                                        <a href="#">Errors</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">SEO Settings</a>
                            </li>
                            <li>
                                <a href="#">Other Link</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">Other Link</a>
                            </li>
                            <li>
                                <a href="#">Other Link</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Content <i class="caret"></i>

                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a tabindex="-1" href="#">Blog</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#">News</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#">Custom Pages</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#">Calendar</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a tabindex="-1" href="#">FAQ</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Users <i class="caret"></i>

                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a tabindex="-1" href="#">User List</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#">Search</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#">Permissions</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>