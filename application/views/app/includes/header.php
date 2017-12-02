<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>The Expense | Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- fav-icons -->
    <link rel="apple-touch-icon" sizes="76x76" href=<?php echo BASE_URL ?>apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo BASE_URL ?>favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo BASE_URL ?>favicon-16x16.png">
    <link rel="manifest" href="<?php echo BASE_URL ?>manifest.json">
    <link rel="mask-icon" href="<?php echo BASE_URL ?>safari-pinned-tab.svg" color="#5bbad5">
    <meta name="apple-mobile-web-app-title" content="Expense Tracker">
    <meta name="application-name" content="Expense Tracker">
    <meta name="theme-color" content="#ffffff">
    <!-- fav-icons -->
    
    <link rel="stylesheet" href="<?php echo ASSETS_URL ?>css/normalize.css">
    <link rel="stylesheet" href="<?php echo ASSETS_URL ?>css/main.css">
    <link rel="stylesheet" href="<?php echo ASSETS_URL ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS_URL ?>css/log.css">
    <link href="<?php echo ASSETS_URL ?>css/animate.css" rel="stylesheet"/>
    <link href="<?php echo ASSETS_URL ?>css/waypoints.css" rel="stylesheet"/>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="<?php echo ASSETS_URL ?>js/vendor/jquery-1.12.0.min.js"></script>
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="<?php echo ASSETS_URL ?>js/jquery.waypoints.min.js" type="text/javascript"></script>
    <script src="<?php echo ASSETS_URL ?>js/waypoints.js" type="text/javascript"></script>
    <script src="<?php echo ASSETS_URL ?>js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo ASSETS_URL ?>css/admin.css">
    <script src="<?php echo ASSETS_URL ?>js/Chart.js"></script>
    <script src="<?php echo ASSETS_URL ?>js/pace.min.js"></script>
    <link href="<?php echo ASSETS_URL ?>css/pace-theme-minimal.css" rel="stylesheet" />
    
  </head>
  <body>
    <!-- ======================================
    Nav bar
    ===========================================-->
    <div id="navigation">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo BASE_URL ?>"><img src="<?php echo ASSETS_URL ?>images/logo.png" alt="Logo" class="img-responsive"></a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo BASE_URL.'app/logout' ?>"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li>
            </ul>
            </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
        </div>
        <!-- ======================================
        Nav bar
        ===========================================-->
        <div id="side-bar clear-fix">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-1">
                <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <ul class="nav nav-pills nav-stacked admin-menu">
                    <li class="active"><a href="<?php echo BASE_URL.'app/dashboard' ?>" data-target-id="user"><i class="fa fa-tachometer fa-fw"></i> Dashboard</a></li>
                    <li><a href="<?php echo BASE_URL.'app/edit-profile' ?>" data-target-id="user"><i class="fa fa-user fa-fw"></i> User Profile</a></li>
                    <li><a href="<?php echo BASE_URL.'app/add-income' ?>" data-target-id="user"><i class="fa fa-file-o fa-fw"></i> Add Income</a></li>
                    <li><a href="<?php echo BASE_URL.'app/new-expense' ?>" data-target-id="user"><i class="fa fa-list-alt fa-fw"></i> New Expense</a></li>
                    <li><a href="<?php echo BASE_URL.'app/expense-overview' ?>" data-target-id="user"><i class="fa fa-list-alt fa-fw"></i> Expense Overview</a></li>
                    <li><a href="javascript:void(0)" data-target-id="user"><i class="fa fa-bar-chart-o fa-fw"></i> Charts</a></li>
                    <li><a href="javascript:void(0)" data-target-id="user"><i class="fa fa-table fa-fw"></i> Tables</a></li>
                    <li><a href="javascript:void(0)" data-target-id="user"><i class="fa fa-calendar fa-fw"></i> Calender</a></li>
                    <li><a href="javascript:void(0)" data-target-id="user"><i class="fa fa-check fa-fw"></i>Create Report</a></li>
                  </ul>
                </div>
                <div id="main">
                  <span style="font-size:25px;cursor:pointer" class="visible" onclick="openNav()">&#9776;</span>
                </div>
              </div>

        <div class="col-md-11 well admin-content" id="user">