<?php
$servername = "localhost";
<<<<<<< HEAD
$dbname = "cw2 oss";
=======
$dbname = "cw2 oss";
>>>>>>> a3fabcfbe9b8b50b7836d1a5dd04505fc726735a
$username = "root";
$password = "";

	//  replace mysqllogin and mysqlpassword with your own
<<<<<<< HEAD
	$conn = new mysqli("localhost", "root", "", "cw2 oss");
=======
	$conn = new mysqli("localhost", "root", "", "cw2 oss");
>>>>>>> a3fabcfbe9b8b50b7836d1a5dd04505fc726735a

	$conn = new mysqli($servername, $username, $password, $dbname);

	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
	}

?>
