<?php  
	require_once('db_connect.php');
	if (!empty($_POST)) {

		$emailID  = mysql_escape_string($_POST['email']);
		$password = md5(mysql_escape_string($_POST['password']));
		$registerUser = "SELECT * FROM `users` 
						WHERE `email`  = '$emailID' 
						AND `password` = '$password'
						";
		$query  = mysqli_query($connection,$registerUser);
		echo "<pre>";
		$resultData = mysqli_fetch_object($query);
		if ($resultData) {
			session_start();
			$_SESSION['name']   = $resultData->name; 
			$_SESSION['email']  = $resultData->email; 
			$_SESSION['phone']  = $resultData->phone; 
			$_SESSION['id'] 	= $resultData->id; 
			$_SESSION['profile']= $resultData->profile; 
			$_SESSION['logged'] = TRUE; 
			header("location:index.php?action=loged");
		}
		else
		{
			header("location:index.php?action=error");
		}

	}

?>