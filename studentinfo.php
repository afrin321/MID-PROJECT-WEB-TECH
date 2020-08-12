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
	<h3><a href="userlogin.php">Home |</a><a href="classinfo.php">  Class  |</a><a href="studentinfo.php">  Students  |</a><a href="teacher.php">  Teachers  |</a><a href="joinlist.php">  Join List</a></h3>
	<fieldset>
		<legend>Select Student</legend>
		<form>
			<table>
				<tr>
					<td> 
						Class: <select>
							<option></option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>


						</select>
						
					</td>
				</tr>
				
				<tr>
					<td>
						Session: <select name="session">
							<option></option>
						<option value="2019-2020">2019-2020</option>
						<option value="2020-2021">2020-2021</option>
						
					</td>
				</tr>
				<tr>
					<td>
						Student Name: <input type="text" name="">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="" value="Open Class List">
						<input type="submit" name="" value="Open Student Profile">
					</td>
					
				</tr>






				
			</table>

		</form>
	</fieldset>



</body>
</html>