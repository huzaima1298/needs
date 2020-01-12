<?php  
	
	require_once('db_connect.php');


		$rating = mysql_escape_string($_POST['rating']);	
		$serviceuser  = mysql_escape_string($_POST['serviceuser']);
		$currentuser  = mysql_escape_string($_POST['currentuser']);

		$registerUser = "INSERT INTO `rating` SET 
						`rating`     = '$rating', 
						`service_user` = '$serviceuser',
						`user_id`= '$currentuser'
						";
		$query  = mysqli_query($connection,$registerUser);

		if ($query) {
			echo "1";
		}
		else
		{
			echo "1";
		}


?>