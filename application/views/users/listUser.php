
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
	<title>List Users</title>
	<link rel="icon" href="<?php base_url();?>assets/images/favicon.png" type="image/png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #F1EEE9;">
	<table border="0" width="100%" cellspacing="0" cellpadding="0" height="20" class="table">
		<tr>
			<th>User ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Username</th>
			<th>Password</th>
			<th>Email</th>
			<th>Address</th>
			<th>Status</th>
		</tr>
		<tbody>
		
			<?php if(isset($query)){foreach($query as $user){ ?>
			<tr>
				    <td><?php echo $user->userid; ?></td>
                    <td><?php echo $user->firstname; ?></td>
                    <td><?php echo $user->lastname; ?></td>
                    <td><?php echo $user->username; ?></td>
                    <td><?php echo $user->password; ?></td>
                    <td><?php echo $user->email; ?></td>
                    <td><?php echo $user->address; ?></td>
                    <td><?php echo $user->status; ?></td>
                    <td>
                        <a href='<?php echo base_url('conLogin/deleteConUser/'.$user->userid);?>' title="Delete" onclick="return confirm('Do you want to delete it?')"><i class="glyphicon glyphicon-remove text-danger"></i></a>
                        &nbsp;&nbsp;
                        <a href="<?php echo base_url('conLogin/editConUser/'.$user->userid); ?>" title='Edit'><i class="glyphicon glyphicon-edit"></i></a>
                    </td>
			</tr>
			<?php }}?>
		</tbody>
		
<!-- // 			foreach($query as $row) -->
<!-- // 			{ -->
<!-- // 				echo "<tr>"; -->
<!-- // 				echo "<td>".$row->userid."</td>"; -->
<!-- // 				echo "<td>".$row->firstname."</td>"; -->
<!-- // 				echo "<td>".$row->lastname."</td>"; -->
<!-- // 				echo "<td>".$row->username."</td>"; -->
<!-- // 				echo "<td>".$row->password."</td>"; -->
<!-- // 				echo "<td>".$row->email."</td>"; -->
<!-- // 				echo "<td>".$row->address."</td>"; -->
<!-- // 				echo "<td>".$row->status."</td>"; -->
<!-- // 				echo "<td>"."<a href='deleteConUser'>Delete</a>"."</td>"; -->
<!-- // 			} -->
<!-- // 		 -->
	
	</table>
</body>
</html>