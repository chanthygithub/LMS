
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<?php echo link_tag('assets/bootstrap/css/bootstrap.css');?>
<?php echo link_tag('assets/bootstrap/js/bootstrap.js');?>
<?php echo link_tag('assets/bootstrap/js/bootstrap.min.js');?>
<?php echo link_tag('assets/js/bootbox.min.js');?>
<?php echo link_tag('assets/js/jquery.pers-brow.js');?>
<?php echo link_tag('assets/bootstrap/js/jquery.min.js');?>
<?php echo link_tag('assets/bootstrap/css/bootstrap.theme.min.css');?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Create New Account</title>
	<link rel="icon" href="<?php base_url();?>assets/images/favicon.png" type="image/png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #F1EEE9;">
   		<?php echo form_open('conLogin/performCreateUser'); ?>
		<div class="form-group">
			<div id="signin-title">
				Create New Account:
			</div>
			<?php echo validation_errors(); ?>
			<label for="userid">User ID</label>
	   	 	<input type="text" name="userid" class="form-control" id="userid" placeholder="User id">
	   	 	<label for="firstname">First Name</label>
		    <input type="text" name="fname" class="form-control" id="fname" placeholder="First name">
		    <label for="lastname">Last Name</label>
	   	 	<input type="text" name="lname" class="form-control" id="lname" placeholder="Last name">
	   	 	<label for="username">User Name</label>
		    <input type="text" name="username" class="form-control" id="username" placeholder="User name">
		    <label for="password">Password</label>
		    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
		    <label for="email">Email</label>
		    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
		    <label for="address">Address</label>
		    <input type="text" name="address" class="form-control" id="address" placeholder="Address">
		    <label for="status">Status</label>
		    <input type="number" name="status" class="form-control" id="status" placeholder="Status">
<!-- 		    <label for="status">Status</label> -->
<!-- 		    <select class="form-control input-sm" name="status"> -->
<!-- 		    	<option value="1">1</option>	 -->
<!-- 		    	<option value="2">0</option> -->
<!-- 		    </select> -->
	   	 </div>
		 <div class="form-group">
		 	<input type="submit" class="btn btn-primary" value="Create">
		 	<a href="performlogin">Did you have account already?</a>
		 </div>
		 <div class="form-group"> 	
		 </div>
</body>
</html>