<!DOCTYPE html>
<html lang="en" ng-app="information_system">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>WVSU Information System</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Fixed header with independent scrolling left nav and right content." />
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">   

    <!-- CSS code from Bootply.com editor -->

    <style type="text/css">
        /* custom template */

        html,
        body {
            height: 100%;
            font-family: verdana, arial, sans-serif;
            color: #555555;
        }

        .nav {
            font-family: Arial, sans-serif;
            font-size: 13px;
        }

        a {
            color: #222222;
        }

        a:hover {
            text-decoration: none;
        }

        hr {
            border-color: #dedede;
        }

        .wrapper,
        .row {
            height: 100%;
            margin-left: 0;
            margin-right: 0;
        }

        .wrapper:before,
        .wrapper:after,
        .column:before,
        .column:after {
            content: "";
            display: table;
        }

        .wrapper:after,
        .column:after {
            clear: both;
        }

        .column {
            height: 100%;
            overflow: auto;
            *zoom: 1;
        }

        .column .padding {
            padding: 20px;
        }

        .full {
            padding-top: 70px;
        }

        .box {
            bottom: 0;
            /* increase for footer use */
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            background-color: #444444;
            /*
    background-image:url('/assets/example/bg_suburb.jpg');
    background-size:cover;
    background-attachment:fixed;
  */
        }

        .divider {
            margin-top: 32px;
        }

        .navbar-blue {
            border-width: 0;
            background: linear-gradient(to bottom, #FFB88C, #DE6262);
            color: #ffffff;
            font-family: arial, sans-serif;
            top: 0;
            position: fixed;
            width: inherit;
        }

        .navbar-blue li>a,
        .navbar-toggle {
            color: #efefef;
        }

        .navbar-blue .dropdown-menu li a {
            color: #2A4888;
        }

        .navbar-blue .dropdown-menu li>a {
            padding-left: 30px;
        }

        .navbar-blue li>a:hover,
        .navbar-blue li>a:focus,
        .navbar-blue .open,
        .navbar-blue .open>a,
        .navbar-blue .open>a:hover,
        .navbar-blue .open>a:focus {
            /* background-color: #2A4888; */
            color: #fff;
            background-color: #E06864;
        }

        #main {
            background-color: #e9eaed;
            padding-left: 0;
            padding-right: 0;
        }

        #main .img-circle {
            margin-top: 18px;
            height: 70px;
            width: 70px;
        }

        #sidebar {
            padding: 0px;
            padding-top: 15px;
        }

        #sidebar,
        #sidebar a,
        #sidebar-footer a {
            color: #ffffff;
            background-color: transparent;
            text-shadow: 0 0 2px #000000;
            padding-left: 5px;
        }

        #sidebar .nav li>a:hover {
            background-color: #393939;
        }

        .logo {
            display: block;
            padding: 3px;
            background-color: #fff;
            color: #3B5999;
            height: 28px;
            width: 28px;
            margin: 9px;
            margin-right: 2px;
            margin-left: 15px;
            font-size: 20px;
            font-weight: 700;
            text-align: center;
            text-decoration: none;
            text-shadow: 0 0 1px;
            border-radius: 2px;
        }

        #sidebar-footer {
            background-color: #444;
            position: absolute;
            bottom: 5px;
            padding: 5px;
        }

        #footer {
            margin-bottom: 20px;
        }
        /* bootstrap overrides */

        h1,
        h2,
        h3 {
            font-weight: 800;
        }

        .navbar-toggle,
        .close {
            outline: 0;
        }

        .navbar-toggle .icon-bar {
            background-color: #fff;
        }

        .btn-primary,
        .label-primary,
        .list-group-item.active,
        .list-group-item.active:hover,
        .list-group-item.active:focus {
            background-color: #3B5999;
            color: #fffffe;
        }

        .btn-default {
            color: #666666;
            text-shadow: 0 0 1px rgba(0, 0, 0, .3);
        }

        .form-control {}

        .panel textarea,
        .well textarea,
        textarea.form-control {
            resize: none;
        }

        .badge {
            color: #3B5999;
            background-color: #fff;
        }

        .badge:hover,
        .badge-inverse {
            background-color: #3B5999;
            color: #fff;
        }

        .jumbotron {
            background-color: transparent;
        }

        .label-default {
            background-color: #dddddd;
        }

        .page-header {
            margin-top: 55px;
            padding-top: 9px;
            border-top: 1px solid #eeeeee;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .panel-default .panel-heading {
            background-color: #f9fafb;
            color: #555555;
        }

        .col-sm-9.full {
            width: 100%;
        }

        .modal-header,
        .modal-footer {
            background-color: #f2f2f2;
            font-weight: 800;
            font-size: 12px;
        }

        .modal-footer i,
        .well i {
            font-size: 20px;
            color: #c0c0c0;
        }

        .modal-body {
            padding: 0px;
        }

        .modal-body textarea.form-control {
            resize: none;
            border: 0;
            box-shadow: 0 0 0;
        }

        small.text-muted {
            font-family: courier, courier-new, monospace;
        }
        /* adjust the contents on smaller devices */

        @media (max-width: 768px) {

            .column .padding {
                padding: 7px;
            }

            .full {
                padding-top: 20px;
            }

            .navbar-blue {
                background-color: #3B5999;
                top: 0;
                width: 100%;
                position: relative;
            }
        }
        /*
 * off canvas sidebar
 * --------------------------------------------------
 */

        @media screen and (max-width: 768px) {
            .row-offcanvas {
                position: relative;
                -webkit-transition: all 0.25s ease-out;
                -moz-transition: all 0.25s ease-out;
                transition: all 0.25s ease-out;
            }

            .row-offcanvas-left.active {
                left: 33%;
            }

            .row-offcanvas-left.active .sidebar-offcanvas {
                left: -33%;
                position: absolute;
                top: 0;
                width: 33%;
                margin-left: 5px;
            }

            #sidebar,
            #sidebar a,
            #sidebar-footer a {
                padding-left: 3px;
            }
        }   

        .error { 
            text-align: center;  
            color: #fff;   
            background-color: #E06864;
            padding: 20px;
        }  

        .success { 
            text-align: center;  
            color: #fff;   
            background-color: #5CB85C;
            padding: 20px;
        }  

        .success p { 
            padding: 0px;
            margin: 0px;
        } 

        .error p { 
            padding: 0px;
            margin: 0px;
        }    

        .the_message { 
            margin-top: 50px;
        }     

        .profile_image { 
            margin: 40px auto 0px auto;  
        }  

        .profile_name { 
            text-align: center;
        }   

        .comment_list {   
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 4px;
        }           

        .inner_wall_container .panel-heading { 
            border-bottom: 1px solid #ddd;
        }

    </style>
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

                    