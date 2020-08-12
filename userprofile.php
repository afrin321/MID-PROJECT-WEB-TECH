<?php
session_start();

$con = mysqli_connect('127.0.0.1', 'root', '', 'schoolmanagement');
$res = mysqli_query($con, "SELECT * FROM userinfo WHERE useremail= '".$_COOKIE['uemail']."'");
$dat = mysqli_fetch_assoc($res); 



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
	<h3><a href="userlogin.php">Home |</a><a href="classinfo.php">  Class  |</a><a href="studentinfo.php">  Students  |</a><a href="teacher.php">  Teachers  |</a><a href="joinlist.php">  Join List</a></h3>

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
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</td>
			</tr>

		</table>
	</fieldset>
	<fieldset>
		<legend>User Profile</legend>
		<table border="1" width="70%" cellpadding="0" cellspacing="0">
			<tr>
				<td>
					Name: <?php echo $dat['username']; ?>
				</td>
				<td rowspan="5" colspan="2">

				    Profile picture: </br>


					<?php echo "<img src=\""; ?> <?php echo $dat['userphoto']; ?> <?php echo "\" width=\"200\" height=\"200\">"; ?> 

					
				</td>
				
			</tr>
			<tr>
				<td>
					Email: <?php echo $dat['useremail']; ?>
				</td>
				
				
			</tr>
			<tr>
				<td>
					Phone No.: <?php echo $dat['userphoneno']; ?>
				</td>
				
				
			</tr>
			<tr>
				<td>
					Gender: <?php echo ucfirst($dat['usergender']); ?>
				</td>
				
				
			</tr>
			<tr>
				<td>
					Date of Birth: <?php echo $dat['dob_day']."/".$dat['dob_month']."/".$dat['dob_year']; ?>
				</td>
				
				
			</tr>
			<tr>
				<td>
					User Type: <?php  echo ucfirst($dat['usertype']); ?>
				</td>
				<td colspan="2">


					
				</td>
				
			</tr>
		</table>

	</fieldset>




</body>
</html>