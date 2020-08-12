<?php
session_start();





?>




<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	User: <?php echo $_COOKIE['uname'] ?> </br>
	User Type: <?php echo $_COOKIE['utype'] ?>
	

</head>
<body>
	<h2></h2>
	<h3><a href="userlogin.php">Home |</a><a href="classinfo.php">  Class  |</a><a href="studentinfo.php">  Students  |</a><a href="">  Teachers  |</a><a href="">  Join List</a></h3>
	<fieldset>
		<legend>Select Teacher </legend>
		<form>
			<table>
				<tr>
					<td>
						Teacher Name: <input type="text" name="">

					</td>
				</tr>
				<tr>
					<td>
						Teacher Email: <input type="text" name="">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="" value="Search">
						<input type="submit" name="" value="Pay"> 
					</td>
				</tr>






				
			</table>

		</form>
	</fieldset>



</body>
</html>