<?php 
session_start();
?>




<!DOCTYPE html>
<html>
<head>
	<title>ABC Online School Login</title>
	<h1 align="Center">ABC Online School Login Page</h1>
</head>
<body>
	<fieldset form="login_form" >
		<legend><h2>Login</h2></legend>

		<form method="post" action="logcheck.php" value="login_form">
			<table>
				<tr>
					<td>
						<h3>Email:  </h3>   		
						<input type="text" name="email"> </br>
					</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<h3>Password:  </h3>   <input type="password" name="password"> </br>
						
						<a href=""><h4>Forgot password?</h4></a> </br>
					</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td align="right">
						<input type="reset" name="reset" value="Reset"> 
						<input align="right" type="submit" name="submit" value="Submit"> </br>
					</td>
				</tr>
				
			</table>
		</form>


		

	</fieldset>
	Do not have an account? <a href="register.php">Register here</a>.

</body>
</html>