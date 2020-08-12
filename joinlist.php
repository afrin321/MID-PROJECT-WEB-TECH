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
	
	<h3><a href="userlogin.php">Home |</a><a href="classinfo.php">  Class  |</a><a href="studentinfo.php">  Students  |</a><a href="teacher.php">  Teachers  |</a><a href="joinlist.php">  Join List</a></h3>

	<fieldset>
		<legend>Student Join List</legend>
		<table>
			<?php 

			{
				mysqli_fetch_assoc($d);
				
			}




			?>
		</table>
	</fieldset>





</body>
</html>