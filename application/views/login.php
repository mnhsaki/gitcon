<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Log in</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/square/blue.css">

	<style type="text/css">
		.login-box,
		.register-box {
			width: 360px;
			margin: 0 auto;
			padding-top: 10%;
		}

	</style>
</head>

<body class="hold-transition login-page">
	<div class="login-box">

		<div class="login-box-body">
			<div style="" class="header">
				<img class="img-responsive" width="220px" style="margin: 0 auto;" src="http://www.iatlbd.com/wp-content/uploads/2016/08/iat-logo-small-1.jpg">

			</div>
			<p class="login-box-msg">Welcom to IAT Inventory Mangment System</p>

			<div style="text-align: center;font-weight:bold;padding-bottom: 5px;">Please Login!!!</div>
			<form action="<?php echo site_url('welcome');?>" method="post">
				<div class="form-group has-feedback">
					<input value="admin@admin.com" type="email" name="email" class="form-control" placeholder="Email">
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input value="admin" type="password" name="password" class="form-control" placeholder="Password">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="row">
					<div class="col-xs-8">
                    <div class="form-group">
								<div id="select_box">
									<label>Role<sup>*</sup></label>
									<select required="" id="role_id" class="form-control " style="width: 100%;" name="rolr_id" tabindex="-1" aria-hidden="true">
										<option value="">Select Role</option>
                                                                                <option value="" selected="">Admin</option>
										<option value="">Accounts</option>
										<option value="">Sales Manager</option>
										<option value="">Sales Mane</option>
										<option value="">Store Manager</option>
									</select>
								</div>
							</div>
					</div>
					<div class="col-xs-4">
						<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<script src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
	<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
