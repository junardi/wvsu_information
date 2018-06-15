<!DOCTYPE html>
<html lang="en" ng-app="information_system">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>WVSU Information System</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Fixed header with independent scrolling left nav and right content." />
    <link href="<?php echo base_url(); ?>css/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <!-- <link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">   --> 

    <link rel="stylesheet" href="<?php echo base_url(); ?>css/my_style.css">
</head>

<!-- HTML code from Bootply.com editor -->

<body>

    

    <div class="wrapper" id="whole_wrapper" ng-controller="wall">
        <div class="box">
            <div class="row row-offcanvas row-offcanvas-left"> 

                <!-- main right col -->
                <div class="column col-sm-12 col-xs-12" id="main">  



                    <!-- top nav -->
                    <div class="navbar navbar-blue navbar-static-top">
                        <div class="navbar-header">
                            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="/" class="navbar-brand logo">b</a>
                        </div>
                        <nav class="collapse navbar-collapse" role="navigation">
                            <form class="navbar-form navbar-left">
                                <div class="input-group input-group-sm" style="max-width:360px;">
                                    <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit">
                                            <i class="glyphicon glyphicon-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/home">
                                        <i class="glyphicon glyphicon-home"></i> Home</a>
                                </li>    
                                <?php if($this->session->userdata('role') == 'admin') { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/account">
                                       Registered Applicant</a>
                                </li>      
                                 <li>
                                    <a href="<?php echo base_url(); ?>index.php/account/alumnis">
                                       Alumnis</a>
                                </li>   
                                <?php } ?>

                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </a>
                                    <ul class="dropdown-menu">  
                                        <li>
                                            <a href="<?php echo base_url(); ?>index.php/logout">Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- /top nav -->

                    