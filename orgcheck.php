<?php
	
	session_start();
	
	if(isset($_POST['osubmit'])){

		$oname 		= $_POST['oname']; //echo $oname;
		$ophone1 		= $_POST['ophone1'];
		$ophone2 	= $_POST['ophone2'];
		$oemail 	= $_POST['oemail'];
		$oaddress = $_POST['oaddress'];
		$owebsite 	= $_POST['owebsite'];
		$opc 	= $_POST['opc'];
		$ocity 	= $_POST['ocity'];
		$ologo 	= $_FILES['ologo']['tmp_name'];
		$org_admin = $_SESSION['admin_id']; //echo $org_admin;

		if(empty($oname) || empty($oemail) || empty($ophone1) || empty($ophone2) || empty($oaddress) || empty($owebsite) || empty($opc) || empty($ocity) || empty($ologo) ){
			echo "null submission found!\n";

			
		}
		elseif (!(strpos($oemail, '@')) || !(strpos($oemail, '.com'))) {
			echo "not a valid email address!\n";
		}
		elseif (!(is_numeric($ophone1)) || !(is_numeric($ophone2))) {
			echo "phone number is invalid!\n";
		}
		else
		{
			//echo "here";

			$oc = mysqli_connect('127.0.0.1', 'root', '', 'schoolmanagement'); 
	        $or = mysqli_query($oc, "INSERT INTO organizationinfo (org_name, org_phone_1, org_phone_2, org_email, org_address, org_website, org_postalcode, org_city, org_logo, org_admin_id) VALUES ('".$oname."', '".$ophone1."', '".$ophone2."', '".$oemail."', '".$oaddress."', '".$owebsite."', '".$opc."', '".$ocity."', '".$ologo."', '".$org_admin."')");

	        header('location: home.php');
	    }


	        /* if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// Perform a query, check for error
if (!mysqli_query($oc, $or)) {
  echo("Error description: " . mysqli_error($oc));
}

mysqli_close($oc);

	        //echo "success";
		} */

	}
	else{
		echo "invalid request";
	}
	?>