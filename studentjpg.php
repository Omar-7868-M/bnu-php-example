<?php

header("Content-type: image/jpeg");
include_once 'database.php';

$sql = "SELECT image FROM student Where id=" . $_GET['id'] .";";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$jpg = $row["image"];

?>
