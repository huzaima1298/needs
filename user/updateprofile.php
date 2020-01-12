<?php  

require_once('../db_connect.php');

if (!empty($_POST['updateprofile'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$cnic = $_POST['cnic'];
	$phone = $_POST['phone'];
	$userid  = $_POST['user_id'];
	$picturename = $_FILES['picture']['name'];
	$picturetemp = $_FILES['picture']['tmp_name'];
	$picname = '';
	if (!empty($picturename)) {
		$picname = $picturename;
		move_uploaded_file($picturetemp,'img/'.$picname);
	}
	else
	{
		$picname = "profile.jpg";
	}

	$insertPostData = "UPDATE `users` SET `name`='$name',
					  `email`='$email',`phone`='$phone',
					  `cnic`='$cnic',`profile`='$picname'
					   WHERE `id`= '$userid'";
	$executeQuery   = mysqli_query($connection,$insertPostData);
	if ($executeQuery) {
		header("location:dashboard.php?success=Profile Updated Successfully");
		exit;
	}
	else
	{
		header("location:dashboard.php?failed=Profile Updation Failed");
		exit;
	}
}

?>