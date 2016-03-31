
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

   		<?php echo form_open('conLogin/performConEditUser'); ?>
		<div class="form-group">
			<div id="signin-title">
				Edit User
			</div>
			<?php echo validation_errors(); ?>
			
			<label for="userid">User ID</label>
	   	 	<input type="text" name="userid" class="form-control" id="userid" value="<?php echo $users[0]->userid;?>"/>
	   	 	<label for="firstname">First Name</label>
		    <input type="text" name="fname" class="form-control" id="fname" value="<?php echo $users[0]->firstname;?>">
		    <label for="lastname">Last Name</label>
	   	 	<input type="text" name="lname" class="form-control" id="lname" value="<?php echo $users[0]->lastname;?>">
	   	 	<label for="username">User Name</label>
		    <input type="text" name="username" class="form-control" id="username" value="<?php echo $users[0]->username;?>">
		    <label for="password">Password</label>
		    <input type="password" name="password" class="form-control" id="password" value="<?php echo $users[0]->password;?>">
		    <label for="email">Email</label>
		    <input type="email" name="email" class="form-control" id="email" value="<?php echo $users[0]->email;?>">
		    <label for="address">Address</label>
		    <input type="text" name="address" class="form-control" id="address" value="<?php echo $users[0]->address;?>">
		    <label for="status">Status</label>
		    <input type="number" name="status" class="form-control" id="status" value="<?php echo $users[0]->status;?>">
	   	 </div>
		 <div class="form-group">
		 	<input type="submit" class="btn btn-primary" value="Update" onclick="return confirm('Do you want to update?')">
		 	<input type="submit" class="btn btn-primary" value="Back" onclick="return confirm('Do you want to back?')">
		 </div>

		 <div class="form-group"> 	
		 </div>
</body>
</html>