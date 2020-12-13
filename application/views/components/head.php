<?php 
/*
* Filename: head.php
* Filepath: views / components / head.php
* Author: Saddam
*/
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
	<title><?php echo $title; ?></title>
	<!-- <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Open+Sans:400,700,800|Roboto:400,700,900" rel="stylesheet"> -->
	<link rel="stylesheet" href="<?php //echo base_url('assets/css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" href="<?php //echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php //echo base_url('assets/css/style.css'); ?>">
  <link rel="stylesheet" href="<?php //echo base_url('assets/css/styles.css'); ?>">
  <link rel="stylesheet" href="<?php //echo base_url('assets/css/mdb.min.css'); ?>">
</head>
<body>
    <!-- Main navigation -->
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark default-color fixed-top scrolling-navbar">
            <div class="container">
                <a class="navbar-brand" href="#">InfoKP Solutions</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto smooth-scroll">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>">Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about" data-offset="90">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#projects" data-offset="90">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#articles" data-offset="90">Articles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact" data-offset="90">Contact</a>
                        </li>
                    </ul>
                    <!-- Social Icon  -->
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="fab fa-facebook light-green-text-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="fab fa-twitter light-green-text-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="fab fa-instagram light-green-text-2"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->
        <!-- Full Page Intro -->
        <div id="intro-section" class="view">
            <video class="video-intro" poster="https://mdbootstrap.com/img/Photos/Others/background.jpg" playsinline
                autoplay muted loop>
                <source src="https://mdbootstrap.com/img/video/animation.mp4" type="video/mp4">
            </video>
            <!-- Mask & flexbox options-->
            <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
                <!-- Content -->
                <div class="container px-md-3 px-sm-0">
                    <!--Grid row-->
                    <div class="row wow fadeIn">
                        <!--Grid column-->
                        <div class="col-md-12 mb-4 white-text text-center wow fadeIn">
                            <h3 class="display-3 font-weight-bold white-text mb-0 pt-md-5 pt-5">InfoKP Solutions</h3>
                            <hr class="hr-light my-4 w-75">
                            <h4 class="subtext-header mt-2 mb-4">A leading software and web applications providers.</h4>
                            <a href="#contact" class="btn btn-rounded btn-outline-white">
                                <i class="fa fa-home"></i> Reach Out to Us
                            </a>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </div>
                <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
        </div>
        <!-- Full Page Intro -->
    </header>
    <!--Main Navigation-->