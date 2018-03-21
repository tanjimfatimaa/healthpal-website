<?php
	$server = "localhost";
	$username = "";
	$password = "";

	$conn = new mysqli($server, $username, $password);

	if (!$conn)
		die("Conenction Failed: " . mysqli_connect_error());

	echo "Connected Successfully"; 