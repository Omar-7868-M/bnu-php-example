<?php

$sql1="INSERT INTO `student` (`studentid`, `password`, `dob`, `firstname`, `lastname`, `house`, `town`, `county`, `country`, `postcode`) VALUES('21905762', 'PasswordmapofthesoulBE', '12-9-1994', 'Kim', 'Nam-joon', '23 Victoria Road', 'High Wycombe', 'Bucks', 'UK', 'HP11 1RT');";

$sql2="INSERT INTO`student` (`studentid`, `password`, `dob`, `firstname`, `lastname`, `house`, `town`, `county`, `country`, `postcode`) VALUES('21905763', 'PasswordmapofthesoulBE', '04-12-1992', 'Kim', 'Seok-jin', '25 Victoria Road', 'High Wycombe', 'Bucks', 'UK', 'HP11 1RT');";

$sql3="INSERT INTO`student` (`studentid`, `password`, `dob`, `firstname`, `lastname`, `house`, `town`, `county`, `country`, `postcode`) VALUES('21905764', 'PasswordmapofthesoulBE', '09-03-1993', 'Min', 'Yoon-gi', '27 Victoria Road', 'High Wycombe', 'Bucks', 'UK', 'HP11 1RT');";

$sql4="INSERT INTO `student` (`studentid`, `password`, `dob`, `firstname`, `lastname`, `house`, `town`, `county`, `country`, `postcode`) VALUES('21905765', 'PasswordmapofthesoulBE', '13-10-1995', 'Park', 'Ji-min', '29 Victoria Road', 'High Wycombe', 'Bucks', 'UK', 'HP11 1RT');";

$sql5="INSERT INTO `student` (`studentid`, `password`, `dob`, `firstname`, `lastname`, `house`, `town`, `county`, `country`, `postcode`) VALUES('21905766', 'PasswordmapofthesoulBE', '30-12-95', 'Kim', 'Tae-hung', '31 Victoria Road', 'High Wycombe', 'Bucks', 'UK', 'HP11 1RT');";

$sql6="INSERT INTO `student` (`studentid`, `password`, `dob`, `firstname`, `lastname`, `house`, `town`, `county`, `country`, `postcode`) VALUES('21905767', 'PasswordmapofthesoulBE', '01-09-1997', 'Jeon', 'Jung-kook', '31 Victoria Road', 'High Wycombe', 'Bucks', 'UK', 'HP11 1RT');";
if ($conn->query($sql1) === TRUE){
	
	echo "New record created<br/>";
	} else{
	echo "Error: " .$sql1."<br/>" . $conn->error;
	}
if ($conn->query($sql2) === TRUE){
	echo "New record created<br/>";
}
else{
	echo "Error: " .$sql2."<br/>" . $conn->error;
}
if ($conn->query($sql3) === TRUE){
	echo "New record created<br/>";
}
else{
	echo "Error: " .$sql3."<br/>" . $conn->error;
}
if ($conn->query($sql3) === TRUE){
	echo "New record created<br/>";
}
else{
	echo "Error: " .$sql3."<br/>" . $conn->error;
}
if ($conn->query($sql4) === TRUE){
	echo "New record created<br/>";
}
else{
	echo "Error: " .$sql4."<br/>" . $conn->error;
}
if ($conn->query($sql5) === TRUE){
	echo "New record created<br/>";
}
else{
	echo "Error: " .$sql5."<br/>" . $conn->error;
}
if ($conn->query($sql6) === TRUE){
	echo "New record created<br/>";
}
else{
	echo "Error: " .$sql6."<br/>" . $conn->error;
}
?>