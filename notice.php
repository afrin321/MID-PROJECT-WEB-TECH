<?php 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Notice</title>
	User: <?php echo ucfirst($_COOKIE['uname']); ?> </br>
	User Type: <?php echo ucfirst($_COOKIE['utype']);
	 ?>
</head>
<body>
	<fieldset>
		<legend>Notice</legend>
		<form method="post" action="notice.php">
			<table>
				<tr>
					<td>
						Guardian Name: <input type="text" name="gname">
					</td>
				</tr>
				<tr>
					<td>
						Subject: <input type="text" name="gsub">

					</td>
				</tr>
				<tr>
					<td>
						Notice: <input type="text" name="notice">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="submit" value="Submit">
					</td>
				</tr>
			</table>
		</form>
	</fieldset>
	<fieldset>
		<legend>View Notice</legend>
		<form action="notice.php" method="post">
			<table>
				<tr>
					<td>
						Guardian Name: <input type="text" name="gname">
					</td>
				</tr>
				<tr>
					<td>
						Subject: <input type="text" name="gsub">

					</td>
				</tr>
				
				<tr>
					<td>
						<input type="submit" name="view" value="Submit">
					</td>
				</tr>
				
			</table>
		</form>
	</fieldset>

</body>
</html>


<?php 
if(isset($_POST['submit'])){

		$gname 		= $_POST['gname'];
		$gsub 		= $_POST['gsub'];
		$notice	= $_POST['notice'];

		if(empty($gname) || empty($gsub) || empty($notice) ){
			echo "null submission found!";
		}else{
			
			$file = fopen('user.txt', 'a');
			$user = $gname."|".$gsub."|".$notice."\n";
			fwrite($file, $user);
			fclose($file);


			

			//header('location: login.php');
		}
		}	


		if(isset($_POST['view'])){

		$gname 		= $_POST['gname'];
		$gsub 		= $_POST['gsub'];
		//$notice	= $_POST['notice'];

		if(empty($gname) || empty($gsub) ){
			echo "null submission found!";
		}else{
			
			$file  = fopen('user.txt', 'r');
			while(!feof($file)){
				$data = fgets($file);
				$user = explode('|', $data);
				if($gname == trim($user[0]) && $gsub == trim($user[1])){

				echo "<fieldset>";
				echo "<table>";
				echo "<tr>";
				echo "<td>";
				echo "Guardian Name: ".$user[0];
				echo "</td></br>";
				echo "<td>";
				echo "Subject: ".$user[1];
				echo "</td></br>";
				echo "<td>";
				echo "Notice: ".$user[2];
				echo "</td></br>";
				echo "</tr>";
				echo "</table>";
				echo "</fieldset>";
					


				}


			

			//header('location: login.php');
		}
		}


}

?>