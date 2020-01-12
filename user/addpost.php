<?php  

require_once('../db_connect.php');

if (!empty($_POST['savepost'])) {
	$title = $_POST['title'];
	$departure = $_POST['departure'];
	$arrival = $_POST['arrival'];
	$date = $_POST['date'];
	$visit = $_POST['visit'];
	$userid  = $_POST['user_id'];
	$insertPostData = "INSERT INTO `service` (`id`,`title`,`d_city`,`a_city`,`visit`,`day`,`user_id`,`status`)
					   VALUES ('','$title','$departure','$arrival','$visit','$date','$userid','0')
					  ";
	$executeQuery   = mysqli_query($connection,$insertPostData);
	if ($executeQuery) {
		header("location:dashboard.php?success=Post Added Successfully");
		exit;
	}
	else
	{
		header("location:dashboard.php?failed=Post Added Successfully");
		exit;
	}
}

?>