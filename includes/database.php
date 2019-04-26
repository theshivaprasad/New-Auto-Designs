<?php
	$servername = "localhost";
	$username = "elliot";
	$password = "password";
	$dbname = "project_autoz";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
?>
 	 