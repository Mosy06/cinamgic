<?php	
	$con = mysqli_connect("localhost","root","usbw","cinemagic");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MYSQL: " . mysqli_connect_error();
		die();
	}else {
		// echo "Connected Successfuly";
	}
?>
