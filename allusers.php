<?php

	require 'connection.php';
	
	$users = "SELECT username,email from user";
	$result = mysqli_query($con,$users);

	if (mysqli_num_rows($result)>0) {
		while ($row = $result -> fetch_assoc()) {
			$response['user'] [] = $row ;
		}
	}

	else {
		$response['error'] = "400";
	}

	echo json_encode($response);

?>