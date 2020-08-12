<?php
session_destroy();

setcookie('status', 'Ok', time()-3600, '/');
	        	setcookie('uname', trim($data2['username']), time()-3600, '/' );
	        	setcookie('utype', trim($data2['usertype']), time()-3600, '/');
	        	setcookie('uemail', trim($data2['useremail']), time()-3600, '/');

	        	header('location: home.php');

?>