<?php

	require 'connection.php';
	$id = $_REQUEST['id'];
	$username = $_POST['username'];
	$email = $_POST['email'];

	$update_query = "UPDATE user SET username ='$username',email = '$email' WHERE id = '$id'";
	$result = mysqli_query($con,$update_query);

	if ($result > 0) {
		$response['error'] = "200";
		$response['message'] = "User Update Success";
	} 
	else {
		$response['error'] = "400";
		$response['message'] = "User Update Failed";
	}

	echo json_encode($response);

?>