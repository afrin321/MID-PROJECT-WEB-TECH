<?php 
session_start();

//echo $_SESSION['admin_id'];
?>



<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
		<title>ABC Online Registration</title>
	<h1>ABC Online Registration</h1>
    <h3><a href="home.php">Home  |  </a>  <a href="home.php">Login  |  </a>  <a href="register.php">Registration </a></h3>
</head>
<body>
	<fieldset>
    <legend><b>ORGANIZATION REGISTRATION</b></legend>
	<form action="orgcheck.php" method="post" enctype="multipart/form-data" name="reg_main">
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Organization Name</td>
				<td>:</td>
				<td><input name="oname" type="text"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Contact No.</td>
				<td>:</td>
				<td>
					<input name="ophone1" type="text"> (Phone number 1)
					
				</td>
				<td><input name="ophone2" type="text"> (Phone number 2)</td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input name="oemail" type="text"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Address</td>
				<td>:</td>
				<td><input name="oaddress" type="text"></td>
				<td></td>
			</tr>
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Website</td>
				<td>:</td>
				<td><input name="owebsite" type="text"></td>
				<td></td>
			</tr>
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Postal Code</td>
				<td>:</td>
				<td><input name="opc" type="text"></td>
				<td></td>
			</tr>
			<tr><td colspan="4"><hr/></td></tr>		
			<tr>
				<td>City</td>
				<td>:</td>
				<td><input name="ocity" type="text"></td>
				<td></td>
			</tr>
			
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Organization Logo</legend>    
						<input type="file" name="ologo">
					</fieldset>
				</td>
				<td></td>
			</tr>
			<tr><td colspan="4"><hr/></td></tr>

		</table>
		<hr/>
		<input type="submit" value="Submit" name="osubmit" >
		<input type="reset">
	</form>
</fieldset>

</body>
</html>