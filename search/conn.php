<?php
	$conn = mysqli_connect('localhost', 'admin111', 'admin111', 'reservasi') or die(mysqli_error());
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>