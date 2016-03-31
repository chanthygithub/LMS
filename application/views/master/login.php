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
	<title>Login to Application</title>
	<link rel="icon" href="<?php base_url();?>assets/images/favicon.png" type="image/png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #F1EEE9;">
		<form action="<?php echo base_url('admin/dologin'); ?>" method="post">
			<div class="form-group">
				<div id="signin-title">
					ចូលរួមជាមួយពួកយើង
				</div>
				<?php echo validation_errors(); ?>
				<label for="username">ឈ្មោះគណនី</label>
				<input type="text" name="username" class="form-control" id="username" placeholder="ឈ្មោះគណនី">
				<label for="password">លេខសំងាត់</label>
				<input type="password" name="pass" class="form-control" id="pass" placeholder="លេខសំងាត់">
			 </div>
			 <div class="form-group">
				<input type="submit" class="btn btn-primary" value="ចូលគណនី">
				<a href="createUser">តើអ្នកមានគណនីហើយឬនៅ?</a>
			 </div>
			 <div class="form-group"> 	
			 </div>
		</form>

</body>
</html>