<?php
$servername = "localhost";
$dbname = "cw2 oss";
$username = "root";
$password = "";

	//  replace mysqllogin and mysqlpassword with your own
	$conn = new mysqli("localhost", "root", "", "cw2 oss");

	$conn = new mysqli($servername, $username, $password, $dbname);

	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
	}

?>
