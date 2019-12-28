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
	<title><?php echo $title; ?></title>
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Open+Sans:400,700,800|Roboto:400,700,900" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/select2/dist/css/select2.min.css'); ?>">
	<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
	<script src="<?php echo base_url('assets/DataTables/js/jquery.dataTables.min'); ?>"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url('home/dashboard'); ?>">Inventory Management</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo base_url('home/dashboard'); ?>">Home</a></li>
      <li><a href="<?php echo base_url('home'); ?>">Items List (all items)</a></li>
      <li><a href="<?php echo base_url('home/laptops'); ?>">Items List (laptops)</a></li>
      <li><a href="<?php echo base_url('home/add_items'); ?>">Add Items</a></li>
      <li><a href="<?php echo base_url('home/users_list'); ?>">Users</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <?php if(!$this->session->userdata('username')): ?>
        <li><a href="javascript:void(0)"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <?php else: ?>
        <li><a href="<?php echo base_url('login/logout'); ?>"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      <?php endif; ?>
    </ul>
  </div>
</nav>