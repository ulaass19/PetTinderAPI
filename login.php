<?php

	require 'connection.php';
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$loginQuery = "SELECT id,username,email from user WHERE email = '$email' and password = '$password'";
	$checkQuery = mysqli_query($con,$loginQuery);

	if (mysqli_num_rows($checkQuery)>0) {

		while ($row = $checkQuery -> fetch_assoc()) {
			$response['user'] = $row ;
		}

		$response['error'] = "200";
		$response['message'] = "Login success";
	} 
	else {

		$response['error'] = "400";
		$response['message'] = "Login failed";

	}

	echo json_encode($response);

?>