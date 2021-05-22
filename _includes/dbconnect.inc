<?php
$servername = "localhost";
$dbname = "cw2";
$username = "pma";
$password = "blank";;

	//  replace mysqllogin and mysqlpassword with your own
	$conn = mysqli_connect("localhost", "cw2", "pma", "blank");

	$conn = new mysqli($servername, $username, $password);

	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
	}

?>
