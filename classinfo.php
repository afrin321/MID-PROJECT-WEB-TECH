<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	User: <?php echo $_SESSION['uname'] ?> </br>
	User Type: <?php echo $_SESSION['utype'] ?>
	

</head>
<body>
	<h2></h2>
	<h3><a href="userlogin.php">Home |</a><a href="classinfo.php">  Class  |</a><a href="studentinfo.php">  Students  |</a><a href="teacher.php">  Teachers  |</a><a href="joinlist.php">  Join List</a></h3>

	<fieldset>
		<legend>Class</legend>
		<form method="post" action="classinfo.php">
			<table>
				<tr>
					<td>
						Class: <select name="class">
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
						Section: <input type="text" name="section">
					</td>
				</tr>
				<tr>
					<td>
						Subject: <input type="text" name="subject">
					</td>
				</tr>
				
				<tr>
					<td>
						<input type="submit" name="create" value="Create"> <input type="submit" name="open" value="Open"> <input type="submit" name="delete" value="Delete">
					</td>
				</tr>
			</table> 
		</form>
	</fieldset>
	<FIELDSET>
		<legend>Add Student</legend>
		<form>
			<table>
				<tr>
					<td>
						Student Name: <input type="text" name="">
					</td>
				</tr>
				<tr>
					<td>
						Student Email: <input type="text" name="">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="" value="Add">
						<input type="submit" name="" value="Remove">
					</td>
				</tr>
			</table>
		</form>
	</FIELDSET>
		<FIELDSET>
		<legend>Add Student</legend>
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
						<input type="submit" name="" value="Add">
						<input type="submit" name="" value="Remove">
					</td>
				</tr>
			</table>
		</form>
	</FIELDSET>

	<?php 
	if (isset($_POST['create'])){

		$connection = mysqli_connect('127.0.0.1', 'root', '', 'schoolmanagement'); 
		$q = mysqli_query($connection, "SELECT * FROM userinfo WHERE useremail='".$_COOKIE['uemail']."'");
		$d = mysqli_fetch_assoc($q);
		//print_r($d);
		$r = mysqli_query($connection, "SELECT * FROM organizationinfo WHERE org_admin_id='".$d['userid']."'");
		$d2 = mysqli_fetch_assoc($r); 
		//print_r($d2);
	    $result = mysqli_query($connection, "INSERT INTO class (class, section, session, subject, orgid) VALUES ('".$_POST['class']."', '".$_POST['session']."', '".$_POST['section']."', '".$_POST['subject']."', '".$d2['organizationid']."')");

	}

	?>



	






</body>
</html>