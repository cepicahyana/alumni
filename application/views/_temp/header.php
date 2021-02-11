<!DOCTYPE html>
<html lang="en">
 <meta http-equiv="content-type" content="text/html;charset=UTF-8" /> 
<head>
<title>Gradient Able bootstrap admin template by codedthemes </title>

 

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
<meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
<meta name="author" content="codedthemes" />


	<script src="<?php echo base_url()?>plug/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url()?>plug/jqueryform/jquery.form.js"></script>
	<script src="<?php echo base_url()?>plug/blokui.js"></script>
	<script src="<?php echo base_url()?>plug/js/angular.js"></script>
 	<script src="<?php echo base_url()?>plug/js/proses.js"></script>
 	<link href="<?php echo base_url()?>plug/css/add.css"  rel="stylesheet"/> 
	<link rel="stylesheet" href="<?php echo base_url()?>plug/toast/jquery.toast.css"/>
   <link href="<?php echo base_url()?>plug/js/alertify/css/alertify.css" rel="stylesheet"/>

    <link rel="stylesheet" href="<?php echo base_url()?>plug/timepicker/jquery.ui.timepicker.css?v=0.3.3" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url()?>plug/timepicker/include/ui-1.10.0/ui-lightness/jquery-ui-1.10.0.custom.min.css" type="text/css" />


<link rel="icon" href="http://html.codedthemes.com/gradient-able/files/assets/images/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bower_components/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/icon/themify-icons/themify-icons.css">
 
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fontawesome/css/all.css">
 
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery.mCustomScrollbar.css">
  
<link href="<?php echo base_url()?>plug/date/daterangepicker.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url()?>plug/date/date_moment.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>plug/date/date_range.js"></script>


<!-- datatables 
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>plug/datatables/css.css"/>
<script type="text/javascript" src="<?php echo base_url()?>plug/datatables/pdf.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>plug/datatables/font.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>plug/datatables/datatable.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>plug/datatables/js/dataTables.checkboxes.min.js"></script> 
-->

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>datatables/datatables.min.css"/> 
<script type="text/javascript" src="<?php echo base_url()?>datatables/datatables.min.js"></script>

 
</head>
<body >

<div class="theme-loader">
<div class="loader-track">
<div class="loader-bar"></div>
</div>
</div>

<div id="pcoded" class="pcoded">
<div class="pcoded-overlay-box"></div>
<div class="pcoded-container navbar-wrapper">
<nav class="navbar header-navbar pcoded-header iscollapsed" header-theme="theme3" pcoded-header-position="fixed">
<div class="navbar-wrapper">
<div class="navbar-logo">
<a class="mobile-menu" id="mobile-collapse" href="#!">
<i class="ti-menu"></i>
</a>
<div class="mobile-search">
<div class="header-search">
<div class="main-search morphsearch-search">
<div class="input-group">
<span class="input-group-addon search-close"><i class="ti-close"></i></span>
<input type="text" class="form-control" placeholder="Enter Keyword">
<span class="input-group-addon search-btn"><i class="ti-search"></i></span>
</div>
</div>
</div>
</div>
<a href="index-2.html">
<img class="img-fluid" src="<?php echo base_url();?>assets/images/logo.png" alt="Theme-Logo" />
</a>
<a class="mobile-options">
<i class="ti-more"></i>
</a>
</div>
<div class="navbar-container container-fluid">
<ul class="nav-left">
<li>
<div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
</li>
<li class="header-search">
<div class="main-search morphsearch-search">
<div class="input-group">
<span class="input-group-addon search-close"><i class="ti-close"></i></span>
<input type="text" class="form-control">
<span class="input-group-addon search-btn"><i class="ti-search"></i></span>
</div>
</div>
</li>
<li>
<a href="#!" onclick="javascript:toggleFullScreen()">
<i class="ti-fullscreen"></i>
</a>
</li>
</ul>
<ul class="nav-right">
<li class="header-notification">
<a href="#!">
<i class="ti-bell"></i>
<span class="badge bg-c-pink"></span>
</a>
<ul class="show-notification">
<li>
<h6>Notifications</h6>
<label class="label label-danger">New</label>
</li>
<li>
<div class="media">
<img class="d-flex align-self-center img-radius" src="<?php echo base_url();?>assets/images/avatar-2.jpg" alt="Generic placeholder image">
<div class="media-body">
<h5 class="notification-user">John Doe</h5>
<p class="notification-msg" >Lorem ipsum dolor sit amet, consectetuer elit.</p>
<span class="notification-time">30 minutes ago</span>
</div>
</div>
</li>
<li>
<div class="media">
<img class="d-flex align-self-center img-radius" src="<?php echo base_url();?>assets/images/avatar-4.jpg" alt="Generic placeholder image">
<div class="media-body">
<h5 class="notification-user">Joseph William</h5>
<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
<span class="notification-time">30 minutes ago</span>
</div>
</div>
</li>
<li>
<div class="media">
<img class="d-flex align-self-center img-radius" src="<?php echo base_url();?>assets/images/avatar-3.jpg" alt="Generic placeholder image">
<div class="media-body">
<h5 class="notification-user">Sara Soudein</h5>
<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
<span class="notification-time">30 minutes ago</span>
</div>
</div>
</li>
</ul>
</li>
<li class="">
<a href="#!" class="displayChatbox">
<i class="ti-comments"></i>
<span class="badge bg-c-green"></span>
</a>
</li>
<li class="user-profile header-notification">
<a href="#!">
<img src="<?php echo base_url();?>assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
<span>John Doe</span>
<i class="ti-angle-down"></i>
</a>
<ul class="show-notification profile-notification">
<li>
<a href="#!">
<i class="ti-settings"></i> Settings
</a>
</li>
<li>
<a href="user-profile.html">
<i class="ti-user"></i> Profile
</a>
</li>
<li>
<a href="email-inbox.html">
<i class="ti-email"></i> My Messages
</a>
</li>
<li>
<a href="auth-lock-screen.html">
<i class="ti-lock"></i> Lock Screen
</a>
</li>
<li>
<a href="auth-normal-sign-in.html">
<i class="ti-layout-sidebar-left"></i> Logout
</a>
</li>
</ul>
</li>
</ul>
</div>
</div>
</nav>





