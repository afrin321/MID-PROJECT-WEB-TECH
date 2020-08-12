<?php
	
	session_start();
	
	if(isset($_POST['submit'])){

		$filedir = 'upload/'.$_FILES['userphoto']['name'];
		move_uploaded_file($_FILES['userphoto']['tmp_name'], $filedir);

		$name 		= $_POST['name']; 
		$email 		= $_POST['email'];
		$phoneNo 	= $_POST['phoneNo'];
		$password 	= $_POST['password'];
		$confirmPassword = $_POST['confirmPassword'];
		$gender 	= $_POST['gender'];
		$day 	= $_POST['day'];
		$month 	= $_POST['month'];
		$year 	= $_POST['year'];
		$type 	= $_POST['usertype'];
		
		$photo 	= $filedir;

				$con = mysqli_connect('127.0.0.1', 'root', '', 'schoolmanagement');
				$res = mysqli_query($con, "SELECT COUNT(useremail) FROM userinfo WHERE useremail='".$email."'");
				$dat = mysqli_fetch_assoc($res);

				//print_r($dat);




		if(empty($name) || empty($email) || empty($phoneNo) || empty($password) || empty($confirmPassword) || empty($gender) || empty($day) || empty($month) || empty($year) || empty($type) || empty($photo) ){
			echo "null submission found!\n";

			
		}
		elseif ($password != $confirmPassword) 
		{
			# code...
		}
		elseif(!is_numeric($phoneNo))
		{
				echo "invalid phone number!\n";
		}
		elseif (!ctype_alpha($name))
		{
				echo "name cannot contain numbers or other charecters!\n";
		}
		elseif ((!strpos($email, '@')) || ((!strpos($email, '.'))))
		{
				echo "not a valid email address!\n";				
		}
		elseif ($dat['COUNT(useremail)'] >= 1)
		{
					echo "email address already taken!";
		}
		elseif ((!is_numeric($day))||(!is_numeric($month))||(!is_numeric($year)))
		{
				echo "DOB has to be numeric!\n";
        }
		elseif (($day>31) || ($day<1)) 
		{
				echo "day is invalid\n";
		}
		elseif (($month>12) || ($month<1)) 
		{
				echo "invalid month field\n";
		}
		elseif (($year<1940) || ($year>2018))
		{
				echo "invalid year\n";
		}
		else{

			$connection = mysqli_connect('127.0.0.1', 'root', '', 'schoolmanagement'); 
	        $result = mysqli_query($connection, "INSERT INTO userinfo (username, useremail, userphoneno, userpassword, userconfirmpassword, usergender, dob_day, dob_month, dob_year, userphoto, usertype) VALUES ('".$name."', '".$email."', '".$phoneNo."', '".$password."', '".$confirmPassword."', '".$gender."', '".$day."', '".$month."', '".$year."', '".$photo."', '".$type."')");

			//echo "successful connection!";

			if ($type = "admin") {

				$getid = mysqli_query($con, "SELECT userid FROM userinfo WHERE useremail='".$email."'");
				$dat2 = mysqli_fetch_assoc($getid);
				$_SESSION['admin_id'] = $dat2['userid'];
				header('location: Organization.php');
			}
			else{
				header('location: home.php');

			}



			
		}	

	}else{
		//echo "invalid request";
		//header('location: login.php');
	}

			/*if ($password != $confirmPassword )
			{
				echo "passwords did not match!\n";
			}
			if (!is_numeric($phoneNo))
			{
				echo "invalid phone number!\n";
			}
			if (!ctype_alpha($name))
			{
				echo "name cannot contain numbers or other charecters!\n";
			}
			if ((!strpos($email, '@')) || ((!strpos($email, '.'))))
			{
				echo "not a valid email address!\n";				
			}

			    $con = mysqli_connect('127.0.0.1', 'root', '', 'schoolmanagement');
				$res = mysqli_query($con, "SELECT COUNT(useremail) FROM userinfo WHERE useremail='".$email."'");
				$dat = mysqli_fetch_assoc($res);
				print_r($dat);

			if ($dat['COUNT(useremail)'] >= 1)
			{
					echo "email address already taken!";
			}
			if ((!is_numeric($day))||(!is_numeric($month))||(!is_numeric($year)))
			{
				echo "DOB has to be numeric!\n";

				if (($day>31) || ($day<1)) 
			{
				echo "day is invalid\n";
			}
			if (($month>12) || ($month<1)) 
			{
				echo "invalid month field\n";
			}
			if (($year<1940) || ($year>2018))
			{
				echo "invalid year\n";
			}
			}  */


	?>