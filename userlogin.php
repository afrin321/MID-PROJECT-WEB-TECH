<?php
session_start();



?>




<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	User: <?php echo ucfirst($_COOKIE['uname']); ?> </br>
	User Type: <?php echo ucfirst($_COOKIE['utype']);
	 ?>
	

</head>
<body>
	<h2>WELCOME <?php echo ucfirst($_COOKIE['uname']) ?>!</h2>
	<h3><a href="">Home |</a><a href="classinfo.php">  Class  |</a><a href="studentinfo.php">  Students  |</a><a href="teacher.php">  Teachers  |</a><a href="joinlist.php">  Join List</a></h3>

	<fieldset>
		<legend>User Information</legend>
		<table>
			<tr>
				<td>
					<ul>
						<li><a href="userprofile.php">User Profile</a></li>
						<li><a href="">Edit Profile</a></li>
						<li><a href="">Change Password</a></li>
						<li><a href="">Organization Profile</a></li>
						<li><a href="notice.php">Notices</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</td>
			</tr>

		</table>
	</fieldset>



</body>
</html>