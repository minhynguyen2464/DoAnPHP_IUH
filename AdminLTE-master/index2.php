<?php 
	session_start();
	include ("../class/admin.php");
	$p = new admin();
	$p->checkSession();
?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <style type="text/css">
    .jqstooltip {
        position: absolute;
        left: 0px;
        top: 0px;
        visibility: hidden;
        background: rgb(0, 0, 0) transparent;
        background-color: rgba(0, 0, 0, 0.6);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
        -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
        color: white;
        font: 10px arial, san serif;
        text-align: left;
        white-space: nowrap;
        padding: 5px;
        border: 1px solid white;
        z-index: 10000;
    }

    .jqsfield {
        color: white;
        font: 10px arial, san serif;
        text-align: left;
    }
    </style>
    <style type="text/css">
    .jqstooltip {
        position: absolute;
        left: 0px;
        top: 0px;
        visibility: hidden;
        background: rgb(0, 0, 0) transparent;
        background-color: rgba(0, 0, 0, 0.6);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
        -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
        color: white;
        font: 10px arial, san serif;
        text-align: left;
        white-space: nowrap;
        padding: 5px;
        border: 1px solid white;
        z-index: 10000;
    }

    .jqsfield {
        color: white;
        font: 10px arial, san serif;
        text-align: left;
    }
    </style>
</head>

<body class="skin-blue sidebar-mini" cz-shortcut-listen="true">
    <div class="wrapper">

        <header class="main-header">

            <!-- Logo -->
            <a href="index2.php" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>A</b>LT</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Admin</b>LTE</span>
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <div class="slimScrollDiv"
                                        style="position: relative; overflow: hidden; width: auto; height: 200px;">
                                        <ul class="menu" style="overflow: hidden; width: 100%; height: 200px;">
                                            <li>
                                                <!-- start message -->
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="dist/img/user2-160x160.jpg" class="img-circle"
                                                            alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Support Team
                                                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <!-- end message -->
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="dist/img/user3-128x128.jpg" class="img-circle"
                                                            alt="User Image">
                                                    </div>
                                                    <h4>
                                                        AdminLTE Design Team
                                                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="dist/img/user4-128x128.jpg" class="img-circle"
                                                            alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Developers
                                                        <small><i class="fa fa-clock-o"></i> Today</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="dist/img/user3-128x128.jpg" class="img-circle"
                                                            alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Sales Department
                                                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="dist/img/user4-128x128.jpg" class="img-circle"
                                                            alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Reviewers
                                                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="slimScrollBar"
                                            style="background: rgb(0, 0, 0); width: 3px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px;">
                                        </div>
                                        <div class="slimScrollRail"
                                            style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;">
                                        </div>
                                    </div>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <div class="slimScrollDiv"
                                        style="position: relative; overflow: hidden; width: auto; height: 200px;">
                                        <ul class="menu" style="overflow: hidden; width: 100%; height: 200px;">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-warning text-yellow"></i> Very long description here
                                                    that may not fit into the
                                                    page and may cause design problems
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-users text-red"></i> 5 new members joined
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-user text-red"></i> You changed your username
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="slimScrollBar"
                                            style="background: rgb(0, 0, 0); width: 3px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px;">
                                        </div>
                                        <div class="slimScrollRail"
                                            style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;">
                                        </div>
                                    </div>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-flag-o"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <div class="slimScrollDiv"
                                        style="position: relative; overflow: hidden; width: auto; height: 200px;">
                                        <ul class="menu" style="overflow: hidden; width: 100%; height: 200px;">
                                            <li>
                                                <!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        Design some buttons
                                                        <small class="pull-right">20%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-aqua" style="width: 20%"
                                                            role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                            aria-valuemax="100">
                                                            <span class="sr-only">20% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                            <li>
                                                <!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        Create a nice theme
                                                        <small class="pull-right">40%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-green" style="width: 40%"
                                                            role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                            aria-valuemax="100">
                                                            <span class="sr-only">40% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                            <li>
                                                <!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        Some task I need to do
                                                        <small class="pull-right">60%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-red" style="width: 60%"
                                                            role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                            aria-valuemax="100">
                                                            <span class="sr-only">60% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                            <li>
                                                <!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        Make beautiful transitions
                                                        <small class="pull-right">80%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-yellow" style="width: 80%"
                                                            role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                            aria-valuemax="100">
                                                            <span class="sr-only">80% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                        </ul>
                                        <div class="slimScrollBar"
                                            style="background: rgb(0, 0, 0); width: 3px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px;">
                                        </div>
                                        <div class="slimScrollRail"
                                            style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;">
                                        </div>
                                    </div>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs">Alexander Pierce</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                    <p>
                                        Alexander Pierce - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="row">
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Followers</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Sales</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Friends</a>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                    </ul>
                </div>

            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar" style="height: auto;">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Alexander Pierce</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                                    class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="treeview active">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i
                                class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu menu-open" style="display: block;">

                            <li class=""><a href="index2.php"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-files-o"></i>
                            <span>Layout Options</span>
                            <span class="label label-primary pull-right">4</span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a>
                            </li>
                            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed
                                    Sidebar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="pages/widgets.html">
                            <i class="fa fa-th"></i> <span>Widgets</span>
                            <small class="label pull-right bg-green">new</small>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-pie-chart"></i>
                            <span>Charts</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>UI Elements</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
                            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
                            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
                            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
                            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
                            <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>Forms</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/forms/general.php"><i class="fa fa-circle-o"></i> General Elements</a>
                            </li>
                            <li><a href="pages/forms/advanced.php"><i class="fa fa-circle-o"></i> Advanced Elements</a>
                            </li>
                            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-table"></i> <span>Tables</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="pages/calendar.html">
                            <i class="fa fa-calendar"></i> <span>Calendar</span>
                            <small class="label pull-right bg-red">3</small>
                        </a>
                    </li>
                    <li>
                        <a href="pages/mailbox/mailbox.html">
                            <i class="fa fa-envelope"></i> <span>Mailbox</span>
                            <small class="label pull-right bg-yellow">12</small>
                        </a>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-folder"></i> <span>Examples</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a>
                            </li>
                            <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                            <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                            <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                            <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-share"></i> <span>Multilevel</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o"></i> Level One <i
                                        class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                                    <li>
                                        <a href="#"><i class="fa fa-circle-o"></i> Level Two <i
                                                class="fa fa-angle-left pull-right"></i></a>
                                        <ul class="treeview-menu">
                                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                        </ul>
                    </li>
                    <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a>
                    </li>
                    <li class="header">LABELS</li>
                    <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 1745px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                    <small>Version 2.0</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">CPU Traffic</span>
                                <span class="info-box-number">90<small>%</small></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Likes</span>
                                <span class="info-box-number">41,410</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class="clearfix visible-sm-block"></div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Sales</span>
                                <span class="info-box-number">760</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">New Members</span>
                                <span class="info-box-number">2,000</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Monthly Recap Report</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i>
                                    </button>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-box-tool dropdown-toggle"
                                            data-toggle="dropdown">
                                            <i class="fa fa-wrench"></i></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                            class="fa fa-times"></i></button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="text-center">
                                            <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                                        </p>

                                        <div class="chart">
                                            <!-- Sales Chart Canvas -->
                                            <canvas id="salesChart" style="height: 180px; width: 816px;" width="1020"
                                                height="225"></canvas>
                                        </div>
                                        <!-- /.chart-responsive -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-4">
                                        <p class="text-center">
                                            <strong>Goal Completion</strong>
                                        </p>

                                        <div class="progress-group">
                                            <span class="progress-text">Add Products to Cart</span>
                                            <span class="progress-number"><b>160</b>/200</span>

                                            <div class="progress sm">
                                                <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                                            </div>
                                        </div>
                                        <!-- /.progress-group -->
                                        <div class="progress-group">
                                            <span class="progress-text">Complete Purchase</span>
                                            <span class="progress-number"><b>310</b>/400</span>

                                            <div class="progress sm">
                                                <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                                            </div>
                                        </div>
                                        <!-- /.progress-group -->
                                        <div class="progress-group">
                                            <span class="progress-text">Visit Premium Page</span>
                                            <span class="progress-number"><b>480</b>/800</span>

                                            <div class="progress sm">
                                                <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                                            </div>
                                        </div>
                                        <!-- /.progress-group -->
                                        <div class="progress-group">
                                            <span class="progress-text">Send Inquiries</span>
                                            <span class="progress-number"><b>250</b>/500</span>

                                            <div class="progress sm">
                                                <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                                            </div>
                                        </div>
                                        <!-- /.progress-group -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- ./box-body -->
                            <div class="box-footer">
                                <div class="row">
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="description-block border-right">
                                            <span class="description-percentage text-green"><i
                                                    class="fa fa-caret-up"></i> 17%</span>
                                            <h5 class="description-header">$35,210.43</h5>
                                            <span class="description-text">TOTAL REVENUE</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="description-block border-right">
                                            <span class="description-percentage text-yellow"><i
                                                    class="fa fa-caret-left"></i> 0%</span>
                                            <h5 class="description-header">$10,390.90</h5>
                                            <span class="description-text">TOTAL COST</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="description-block border-right">
                                            <span class="description-percentage text-green"><i
                                                    class="fa fa-caret-up"></i> 20%</span>
                                            <h5 class="description-header">$24,813.53</h5>
                                            <span class="description-text">TOTAL PROFIT</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="description-block">
                                            <span class="description-percentage text-red"><i
                                                    class="fa fa-caret-down"></i> 18%</span>
                                            <h5 class="description-header">1200</h5>
                                            <span class="description-text">GOAL COMPLETIONS</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.box-footer -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <div class="col-md-8">
                        <!-- MAP & BOX PANE -->

                        <!-- /.box -->
                        <div class="row">
                            <div class="col-md-6">
                                <!-- DIRECT CHAT -->

                                <!--/.direct-chat -->
                            </div>
                            <!-- /.col -->


                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- TABLE: LATEST ORDERS -->
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">Latest Orders</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                            class="fa fa-times"></i></button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table class="table no-margin">
                                        <thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Item</th>
                                                <th>Status</th>
                                                <th>Popularity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                                <td>Call of Duty IV</td>
                                                <td><span class="label label-success">Shipped</span></td>
                                                <td>
                                                    <div class="sparkbar" data-color="#00a65a" data-height="20"><canvas
                                                            width="34" height="20"
                                                            style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                                <td>Samsung Smart TV</td>
                                                <td><span class="label label-warning">Pending</span></td>
                                                <td>
                                                    <div class="sparkbar" data-color="#f39c12" data-height="20"><canvas
                                                            width="34" height="20"
                                                            style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                                <td>iPhone 6 Plus</td>
                                                <td><span class="label label-danger">Delivered</span></td>
                                                <td>
                                                    <div class="sparkbar" data-color="#f56954" data-height="20"><canvas
                                                            width="34" height="20"
                                                            style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                                <td>Samsung Smart TV</td>
                                                <td><span class="label label-info">Processing</span></td>
                                                <td>
                                                    <div class="sparkbar" data-color="#00c0ef" data-height="20"><canvas
                                                            width="34" height="20"
                                                            style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                                <td>Samsung Smart TV</td>
                                                <td><span class="label label-warning">Pending</span></td>
                                                <td>
                                                    <div class="sparkbar" data-color="#f39c12" data-height="20"><canvas
                                                            width="34" height="20"
                                                            style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                                <td>iPhone 6 Plus</td>
                                                <td><span class="label label-danger">Delivered</span></td>
                                                <td>
                                                    <div class="sparkbar" data-color="#f56954" data-height="20"><canvas
                                                            width="34" height="20"
                                                            style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                                <td>Call of Duty IV</td>
                                                <td><span class="label label-success">Shipped</span></td>
                                                <td>
                                                    <div class="sparkbar" data-color="#00a65a" data-height="20"><canvas
                                                            width="34" height="20"
                                                            style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer clearfix">
                                <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New
                                    Order</a>
                                <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All
                                    Orders</a>
                            </div>
                            <!-- /.box-footer -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->

                    <div class="col-md-4">
                        <!-- Info Boxes Style 2 -->
                        <div class="info-box bg-yellow">
                            <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Inventory</span>
                                <span class="info-box-number">5,200</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: 50%"></div>
                                </div>
                                <span class="progress-description">
                                    50% Increase in 30 Days
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <div class="info-box bg-green">
                            <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Mentions</span>
                                <span class="info-box-number">92,050</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: 20%"></div>
                                </div>
                                <span class="progress-description">
                                    20% Increase in 30 Days
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <div class="info-box bg-red">
                            <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Downloads</span>
                                <span class="info-box-number">114,381</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                                    70% Increase in 30 Days
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <div class="info-box bg-aqua">
                            <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Direct Messages</span>
                                <span class="info-box-number">163,921</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: 40%"></div>
                                </div>
                                <span class="progress-description">
                                    40% Increase in 30 Days
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->


                        <!-- /.box -->

                        <!-- PRODUCT LIST -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Recently Added Products</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                            class="fa fa-times"></i></button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <?php
				$sql = 'SELECT * FROM products';
                	$p->recent_product($sql);
				?>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer text-center">
                                <a href="javascript:void(0)" class="uppercase">View All Products</a>
                            </div>
                            <!-- /.box-footer -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.3.3
            </div>
            <strong>Copyright © 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li class="active"><a href="#control-sidebar-theme-demo-options-tab" data-toggle="tab"><i
                            class="fa fa-wrench"></i></a></li>
                <li class="active"><a href="#control-sidebar-theme-demo-options-tab" data-toggle="tab"><i
                            class="fa fa-wrench"></i></a></li>
                <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane" id="control-sidebar-home-tab">
                    <h3 class="control-sidebar-heading">Recent Activity</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                    <p>Will be 23 on April 24th</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-user bg-yellow"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                    <p>New phone +1(800)555-1234</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                    <p>nora@example.com</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-file-code-o bg-green"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                    <p>Execution time 5 seconds</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                    <h3 class="control-sidebar-heading">Tasks Progress</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Custom Template Design
                                    <span class="label label-danger pull-right">70%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Update Resume
                                    <span class="label label-success pull-right">95%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Laravel Integration
                                    <span class="label label-warning pull-right">50%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Back End Framework
                                    <span class="label label-primary pull-right">68%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                </div>
                <div id="control-sidebar-theme-demo-options-tab" class="tab-pane active">
                    <div>
                        <h4 class="control-sidebar-heading">Layout Options</h4>
                        <div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox"
                                    data-layout="fixed" class="pull-right"> Fixed layout</label>
                            <p>Activate the fixed layout. You can't use fixed and boxed layouts together</p>
                        </div>
                        <div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox"
                                    data-layout="layout-boxed" class="pull-right"> Boxed Layout</label>
                            <p>Activate the boxed layout</p>
                        </div>
                        <div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox"
                                    data-layout="sidebar-collapse" class="pull-right"> Toggle Sidebar</label>
                            <p>Toggle the left sidebar's state (open or collapse)</p>
                        </div>
                        <div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox"
                                    data-enable="expandOnHover" class="pull-right"> Sidebar Expand on Hover</label>
                            <p>Let the sidebar mini expand on hover</p>
                        </div>
                        <div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox"
                                    data-controlsidebar="control-sidebar-open" class="pull-right"> Toggle Right Sidebar
                                Slide</label>
                            <p>Toggle between slide over content and push content effects</p>
                        </div>
                        <div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox"
                                    data-sidebarskin="toggle" class="pull-right"> Toggle Right Sidebar Skin</label>
                            <p>Toggle between dark and light skins for the right sidebar</p>
                        </div>
                        <h4 class="control-sidebar-heading">Skins</h4>
                        <ul class="list-unstyled clearfix">
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);"
                                    data-skin="skin-blue" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 7px; background: #367fa9;"></span><span
                                            class="bg-light-blue"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #222d32;"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin">Blue</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);"
                                    data-skin="skin-black" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div style="box-shadow: 0 0 2px rgba(0,0,0,0.1)" class="clearfix"><span
                                            style="display:block; width: 20%; float: left; height: 7px; background: #fefefe;"></span><span
                                            style="display:block; width: 80%; float: left; height: 7px; background: #fefefe;"></span>
                                    </div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #222;"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin">Black</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);"
                                    data-skin="skin-purple" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                            class="bg-purple-active"></span><span class="bg-purple"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #222d32;"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin">Purple</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);"
                                    data-skin="skin-green" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                            class="bg-green-active"></span><span class="bg-green"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #222d32;"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin">Green</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);"
                                    data-skin="skin-red" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                            class="bg-red-active"></span><span class="bg-red"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #222d32;"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin">Red</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);"
                                    data-skin="skin-yellow" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                            class="bg-yellow-active"></span><span class="bg-yellow"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #222d32;"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin">Yellow</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);"
                                    data-skin="skin-blue-light"
                                    style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 7px; background: #367fa9;"></span><span
                                            class="bg-light-blue"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc;"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin" style="font-size: 12px">Blue Light</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);"
                                    data-skin="skin-black-light"
                                    style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div style="box-shadow: 0 0 2px rgba(0,0,0,0.1)" class="clearfix"><span
                                            style="display:block; width: 20%; float: left; height: 7px; background: #fefefe;"></span><span
                                            style="display:block; width: 80%; float: left; height: 7px; background: #fefefe;"></span>
                                    </div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc;"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin" style="font-size: 12px">Black Light</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);"
                                    data-skin="skin-purple-light"
                                    style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                            class="bg-purple-active"></span><span class="bg-purple"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc;"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin" style="font-size: 12px">Purple Light</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);"
                                    data-skin="skin-green-light"
                                    style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                            class="bg-green-active"></span><span class="bg-green"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc;"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin" style="font-size: 12px">Green Light</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);"
                                    data-skin="skin-red-light"
                                    style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                            class="bg-red-active"></span><span class="bg-red"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc;"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin" style="font-size: 12px">Red Light</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);"
                                    data-skin="skin-yellow-light"
                                    style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                            class="bg-yellow-active"></span><span class="bg-yellow"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc;"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin" style="font-size: 12px;">Yellow Light</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="control-sidebar-theme-demo-options-tab" class="tab-pane active">
                    <div>
                        <h4 class="control-sidebar-heading">Layout Options</h4>
                        <div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox"
                                    data-layout="fixed" class="pull-right"> Fixed layout</label>
                            <p>Activate the fixed layout. You can't use fixed and boxed layouts together</p>
                        </div>
                        <div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox"
                                    data-layout="layout-boxed" class="pull-right"> Boxed Layout</label>
                            <p>Activate the boxed layout</p>
                        </div>
                        <div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox"
                                    data-layout="sidebar-collapse" class="pull-right"> Toggle Sidebar</label>
                            <p>Toggle the left sidebar's state (open or collapse)</p>
                        </div>
                        <div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox"
                                    data-enable="expandOnHover" class="pull-right"> Sidebar Expand on Hover</label>
                            <p>Let the sidebar mini expand on hover</p>
                        </div>
                        <div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox"
                                    data-controlsidebar="control-sidebar-open" class="pull-right"> Toggle Right Sidebar
                                Slide</label>
                            <p>Toggle between slide over content and push content effects</p>
                        </div>
                        <div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox"
                                    data-sidebarskin="toggle" class="pull-right"> Toggle Right Sidebar Skin</label>
                            <p>Toggle between dark and light skins for the right sidebar</p>
                        </div>
                        <h4 class="control-sidebar-heading">Skins</h4>
                        <ul class="list-unstyled clearfix">
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);"
                                    data-skin="skin-blue" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 7px; background: #367fa9;"></span><span
                                            class="bg-light-blue"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #222d32;"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin">Blue</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);"
                                    data-skin="skin-black" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div style="box-shadow: 0 0 2px rgba(0,0,0,0.1)" class="clearfix"><span
                                            style="display:block; width: 20%; float: left; height: 7px; background: #fefefe;"></span><span
                                            style="display:block; width: 80%; float: left; height: 7px; background: #fefefe;"></span>
                                    </div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #222;"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin">Black</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);"
                                    data-skin="skin-purple" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                            class="bg-purple-active"></span><span class="bg-purple"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #222d32;"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin">Purple</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);"
                                    data-skin="skin-green" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                            class="bg-green-active"></span><span class="bg-green"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #222d32;"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin">Green</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);"
                                    data-skin="skin-red" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                            class="bg-red-active"></span><span class="bg-red"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #222d32;"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin">Red</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);"
                                    data-skin="skin-yellow" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                            class="bg-yellow-active"></span><span class="bg-yellow"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #222d32;"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin">Yellow</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);"
                                    data-skin="skin-blue-light"
                                    style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 7px; background: #367fa9;"></span><span
                                            class="bg-light-blue"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc;"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin" style="font-size: 12px">Blue Light</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);"
                                    data-skin="skin-black-light"
                                    style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div style="box-shadow: 0 0 2px rgba(0,0,0,0.1)" class="clearfix"><span
                                            style="display:block; width: 20%; float: left; height: 7px; background: #fefefe;"></span><span
                                            style="display:block; width: 80%; float: left; height: 7px; background: #fefefe;"></span>
                                    </div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc;"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin" style="font-size: 12px">Black Light</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);"
                                    data-skin="skin-purple-light"
                                    style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                            class="bg-purple-active"></span><span class="bg-purple"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc;"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin" style="font-size: 12px">Purple Light</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);"
                                    data-skin="skin-green-light"
                                    style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                            class="bg-green-active"></span><span class="bg-green"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc;"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin" style="font-size: 12px">Green Light</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);"
                                    data-skin="skin-red-light"
                                    style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                            class="bg-red-active"></span><span class="bg-red"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc;"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin" style="font-size: 12px">Red Light</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);"
                                    data-skin="skin-yellow-light"
                                    style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                            class="bg-yellow-active"></span><span class="bg-yellow"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc;"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin" style="font-size: 12px;">Yellow Light</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.tab-pane -->

                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <form method="post">
                        <h3 class="control-sidebar-heading">General Settings</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Report panel usage
                                <input type="checkbox" class="pull-right" checked="">
                            </label>

                            <p>
                                Some information about this general settings option
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Allow mail redirect
                                <input type="checkbox" class="pull-right" checked="">
                            </label>

                            <p>
                                Other sets of options are available
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Expose author name in posts
                                <input type="checkbox" class="pull-right" checked="">
                            </label>

                            <p>
                                Allow the user to show his name in blog posts
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <h3 class="control-sidebar-heading">Chat Settings</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Show me as online
                                <input type="checkbox" class="pull-right" checked="">
                            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Turn off notifications
                                <input type="checkbox" class="pull-right">
                            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Delete chat history
                                <a href="javascript:void(0)" class="text-red pull-right"><i
                                        class="fa fa-trash-o"></i></a>
                            </label>
                        </div>
                        <!-- /.form-group -->
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg" style="position: fixed; height: auto;"></div>

    </div>
    <!-- ./wrapper -->

    <!-- jQuery 2.2.0 -->
    <script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="plugins/chartjs/Chart.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>


    <div class="jvectormap-label" style="display: none; left: 300px; top: 808px;">Mexico</div>
</body>

</html>