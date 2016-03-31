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
<div id="headwrapper" >
		<div id="img-logo">
			<img src="<?php base_url();?>assets/images/logo.png" alt="logo" class="img-responsive">
		</div>
		<div class="collapse navbar-collapse bs-example">
		    <ul class="nav nav-pills">
		        <li class="dropdown pull-right">
		            <a href="#" data-toggle="dropdown" class="dropdown-toggle" style="color:white;">Choose Langauge<b class="caret"></b></a>
		            <ul class="dropdown-menu">
		                <li><a href="#">Khmer</a></li>
		                <li><a href="#">English</a></li>
		            </ul>
		        </li>
		    </ul>
	</div>
</div>
</body>
</html>