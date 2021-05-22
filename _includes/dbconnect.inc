<?php
$servername = "localhost";
$dbname = "cw2";
$username = "pma";
$password = "";

	//  replace mysqllogin and mysqlpassword with your own
	$conn = new mysqli("localhost", "pma", "", "cw2");

	$conn = new mysqli($servername, $username, $password, $dbname);

	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
	}

?>
