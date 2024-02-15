<?php

	require 'connection.php';
	$id = $_POST['id'];

	$deleteuser = mysqli_query($con,"DELETE from user WHERE id = '$id'");

	if ($deleteuser > 0) {
		$response['error'] = "200";
		$response['message'] = "Account deleted";
	}
	else {
		$response['error'] = "400";
		$response['message'] = "Account does not deleted";
	}

	echo json_encode($response);

?>