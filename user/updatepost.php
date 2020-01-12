<?php  

require_once('../db_connect.php');

if (!empty($_POST['updatepost'])) {
	$title = $_POST['title'];
	$departure = $_POST['departure'];
	$arrival = $_POST['arrival'];
	$date = $_POST['date'];
	$post = $_POST['postid'];
	$status = $_POST['status'];
	$visit = $_POST['visit'];
	$userid  = $_POST['user_id'];
	$insertPostData = "UPDATE `service` SET `title`='$title',`d_city`='$departure',`a_city`='$arrival',
					  `visit`='$visit',`day`='$date',`status`='$status' WHERE `id` = '$post'";
	$executeQuery   = mysqli_query($connection,$insertPostData);
	if ($executeQuery) {
		header("location:dashboard.php?success=Post Updated Successfully");
		exit;
	}
	else
	{
		header("location:dashboard.php?failed=Post Updated Successfully");
		exit;
	}
}

?>