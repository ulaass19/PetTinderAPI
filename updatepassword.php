<?php

	require 'connection.php';
	$current = md5($_POST['current']);
	$new = md5($_POST['new']);
	$email = $_POST['email'];

	$checkUser = "SELECT * from user WHERE email = '$email' and password = '$current'";
	$result = mysqli_query($con,$checkUser);

	if ($result->num_rows > 0) {
		

		$updatePass = mysqli_query($con,"UPDATE user SET password = '$new' WHERE email = '$email' ");

		if ($updatePass > 0) {
			$response['error'] = "200";
			$response['message'] = "Password Update Success";
		}
		else {
			$response['error'] = "400";
			$response['message'] = "Password Update failed";
		}


	} 

	else {

		$response['error'] = "600";
		$response['message'] = "User does not exist";

	}


	echo json_encode($response);

?>