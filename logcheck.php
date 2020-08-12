<?php
	
	session_start();
	
	if(isset($_POST['submit'])){


		$email 		= $_POST['email'];

		$password 	= $_POST['password'];





		if(empty($email) || empty($password)){
			echo "null submission found!\n";
			
			 
		}else{

			$connection = mysqli_connect('127.0.0.1', 'root', '', 'schoolmanagement'); 
	        $result = mysqli_query($connection, "SELECT COUNT(useremail) FROM userinfo WHERE useremail='".$email."' AND userpassword='".$password."'");
	        $data1 = mysqli_fetch_assoc($result);
	        //print_r($data1);echo "<br>";

	       
	        if ($data1['COUNT(useremail)'] == 1)
	        {
	        	//echo "connection established";
	        	$result2 = mysqli_query($connection, "SELECT username, useremail, usertype FROM userinfo WHERE useremail='".$email."' AND userpassword='".$password."'");

	        	$data2 = mysqli_fetch_assoc($result2);
	        	setcookie('status', 'Ok', time()+3600, '/');
	        	setcookie('uname', trim($data2['username']), time()+3600, '/' );
	        	setcookie('utype', trim($data2['usertype']), time()+3600, '/');
	        	setcookie('uemail', trim($data2['useremail']), time()+3600, '/');
	        	$_SESSION['uname'] = $data2['username'];
	        	$_SESSION['utype'] = $data2['usertype'];
	        	echo $_SESSION['name'];


	        	header('location: userlogin.php'); 

	        }
	        else
	        {

	        	header('location: home.php');
	        }


			//header('location: home.php'); 
		}	

	}else{
		//echo "invalid request";
		//header('location: login.php');
	}


	?>