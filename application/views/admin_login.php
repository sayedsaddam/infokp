<?php
/* Filename: admin_login.php
*  Location: views/admin_login.php
*  Author: Saddam
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login | Inventory Management</title>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta name="og:card" content="" />
	<meta name="og:description" content="" />
	<meta name="og:title" content="" />
	<meta name="og:image" content="" />
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Open+Sans:400,700,800|Roboto:400,700,900" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
	<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
</head>
<body>
	<section class="secLogin">
	<div class="container">
		<div class="loginWhite">
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-8">
					<form action="<?php echo base_url('Login/admin_login'); ?>" method="post">
						<div class="rightLoginMain">
							<div class="aligmentWrap">
								<h3 style="margin-bottom: 4px;">Admin Login</h3>
								<small>Enter your Username & Password to proceed.</small>
								<div class="loginInput">
									<input name="username" type="text" class="form-control" placeholder="Enter your username here..." required><br>
									<input name="password" type="password" class="form-control" placeholder="Enter your password here..." required>
								</div>
								<div class="loginInput">
									<button type="submit" class="btn btn-block">
										Login
									</button>
								</div>
								<?php if($failed = $this->session->flashdata('login_error')): ?>
								<div class="alert alert-danger alert-dismissable text-center">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<p><?php echo $failed; // Login attempt failed. ?></p>
								</div>
								<?php endif; ?>
								<?php if($logged_out = $this->session->flashdata('logged_out')): ?>
								<div class="alert alert-danger alert-dismissable text-center">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<p><?php echo $logged_out; // Logout successful. ?></p>
								</div>
								<?php endif; ?>
								<?php if($success = $this->session->flashdata('success')): ?>
								<div class="alert alert-success">
									<?php echo $success; // Password change. ?>
								</div>
								<?php endif; ?>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
	</div>
</section>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
</body>
</html>