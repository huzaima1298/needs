<?php  
	
	require_once('db_connect.php');

	if (!empty($_POST)) {

		$fullname = mysql_escape_string($_POST['name']);	
		$emailID  = mysql_escape_string($_POST['email']);
		$phoneNO  = mysql_escape_string($_POST['phone']);
		$cnicNO   = mysql_escape_string($_POST['cnic']);
		$password = md5(mysql_escape_string($_POST['password']));

		$registerUser = "INSERT INTO `users` SET 
						`name`     = '$fullname', 
						`email`    = '$emailID',
						`phone`	   = '$phoneNO',
						`cnic`     = '$cnicNO',
						`password` = '$password',
						`is_active`= '1'
						";
		$query  = mysqli_query($connection,$registerUser);

		if ($query) {
			header("location:index.php?action=registered");
			exit;
		}
		else
		{
			header("location:index.php?action=error");
		}

	}

?>