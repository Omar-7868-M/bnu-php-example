<?php
include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");

//$sql = "INSERT INTO 'student'('studentid', 'password', 'dob', 'firstname', 'lastname', 'house', 'town', 'county', 'country', 'postcode')" VALUES ('21905761', '123', '26/12/99', 'Ji-Min', 'Park', '55', 'chesham', 'bucks', 'United Kingdom', 'BP5 2PA');

//$sql1 = "INSERT INTO 'student'('studentid', 'password', 'dob', 'firstname', 'lastname', 'house', 'town', 'county', 'country', 'postcode')" VALUES ('21905762', '121', '26/11/98', 'Ho-Seok', 'Jung', '2', 'chesham', 'bucks', 'United Kingdom', 'TP5 2JH');

//$sql2 = "INSERT INTO 'student'('studentid', 'password', 'dob', 'firstname', 'lastname', 'house', 'town', 'county', 'country', 'postcode')" VALUES ('21905763', '122', '16/11/97', 'Yoon-Gi', 'Min', '3', 'High Wycombe', 'bucks', 'United Kingdom', 'SU5 2GA');

//$sql3 = "INSERT INTO 'student'('studentid', 'password', 'dob', 'firstname', 'lastname', 'house', 'town', 'county', 'country', 'postcode')" VALUES ('21905732', '124', '16/11/96', 'Taehyung', 'v', '7', 'High Wycombe', 'bucks', 'United Kingdom', 'HP5 2BP');

//$sql4 = "INSERT INTO 'student'('studentid', 'password', 'dob', 'firstname', 'lastname', 'house', 'town', 'county', 'country', 'postcode')" VALUES ('21905542', '126', '16/1/90', 'Nam-Joon', 'Kim', '1', 'chesham', 'bucks', 'United Kingdom', 'HP5 2RM');

//$sql5 = "INSERT INTO 'student'('studentid', 'password', 'dob', 'firstname', 'lastname', 'house', 'town', 'county', 'country', 'postcode')" VALUES ('2190552', '127', '16/1/93', 'Jung', 'Kook', '5', 'chesham', 'bucks', 'United Kingdom', 'HP5 2JK');

if ($conn->query($sql1) === TRUE) 
{
  echo "NEW RECORD CREATED SUCCESSFULY";
}
else 
{
  echo "ERROR" . $sql1 . $conn->error;
}
if ($conn->query($sql2) === TRUE)
{
  echo "NEW RECORD CREATED SUCCESSFULY";
}
else 
{
  echo "ERROR" . $sql2 . $conn->error;
}
if ($conn->query($sql3) === TRUE)
{
  echo "NEW RECORD CREATED SUCCESSFULY";
}
else 
{
  echo "ERROR" . $sql3 . $conn->error;
}
if ($conn->query($sql4) === TRUE)
{
  echo "NEW RECORD CREATED SUCCESSFULY";
}
else 
{
  echo "ERROR" . $sql4 . $conn->error;
}
if ($conn->query($sql5) === TRUE)
{
  echo "NEW RECORD CREATED SUCCESSFULY";
}
else 
{
  echo "ERROR" . $sql5 . $conn->error;
}