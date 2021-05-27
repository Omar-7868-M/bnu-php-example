<?php
   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");
   // check logged in
   if (isset($_SESSION['id'])) {
     echo template("templates/partials/header.php");
     echo template("templates/partials/nav.php");
<html>

<h2> Student Details</h2>

<form enctype ="multipart/form-data" action ="savestudent.php" method ="post">

Student ID:
<input type ="number" name ="numid" size ="15" class ="form-control" />
</br></br>

Password:
<input type ="text" name ="txtpassword" size ="20" class ="form-control"/>
</br></br>

Date of Birth:
<input type ="date" name ="dob" size ="20" class ="form-control"/>
</br></br>

First Name:
<input type ="text" name ="txtfirstname" size ="20" class ="form-control"/>
</br></br>

Last Name:
<input type ="text" name ="txtlastname" size ="20" class ="form-control"/>
</br></br>

House:
<input type ="text" name ="txthouse" size ="20" class ="form-control"/>
</br></br>

Town:
<input type ="text" name ="txttown" size ="20" class ="form-control"/>
</br></br>

County:
<input type ="text" name ="txtcounty" size ="20" class ="form-control"/>
</br></br>

Country:
<input type ="text" name ="txtcountry" size ="20" class ="form-control"/>
</br></br>

PostCode:
<input type ="text" name ="txtpostcode" size ="20" class ="form-control"/>
</br></br>

Password:
<input name="password" type="password" required/>
</br></br>

Student Image:
<input type ="file" name ="studentimage" accept = "image/jpeg" class ="form-control"/>
</br></br>

<input type ="submit" class = "btn btn-default" value ="Save"/>

</form>
</html>

$data['content'] .= '</form>';

if(isset($_POST['btncreate'])){
  
  $ID = mysqli_real_escape_string($conn, $_POST['txtID']);
  $fname = mysqli_real_escape_string($conn, $_POST['txtfname']);
  $lname = mysqli_real_escape_string($conn, $_POST['txtlname']);
  $dateofbirth = mysqli_real_escape_string($conn, $_POST['dateofbirth']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $firstline = mysqli_real_escape_string($conn, $_POST['txtfirstline']);
  $house = mysqli_real_escape_string($conn, $_POST['txthouse']);
  $town = mysqli_real_escape_string($conn, $_POST['txttown']);
  $county = mysqli_real_escape_string($conn, $_POST['txtcounty']);
  $country = mysqli_real_escape_string($conn, $_POST['txtcountry']);
  $postcode = mysqli_real_escape_string($conn, $_POST['txtpostcode']);

$sql = "INSERT INTO 'student'('studentid', 'password', 'dob', 'firstname', 'lastname', 'house', 'town', 'county', 'country', 'postcode')" VALUES ('21905761', '123', '26/12/99', 'Ji-Min', 'Park', '55', 'chesham', 'bucks', 'United Kingdom', 'BP5 2PA';

$sql1 = "INSERT INTO 'student'('studentid', 'password', 'dob', 'firstname', 'lastname', 'house', 'town', 'county', 'country', 'postcode')" VALUES ('21905762', '121', '26/11/98', 'Ho-Seok', 'Jung', '2', 'chesham', 'bucks', 'United Kingdom', 'TP5 2JH)';

$sql2 = "INSERT INTO 'student'('studentid', 'password', 'dob', 'firstname', 'lastname', 'house', 'town', 'county', 'country', 'postcode')" VALUES ('21905763', '122', '16/11/97', 'Yoon-Gi', 'Min', '3', 'High Wycombe', 'bucks', 'United Kingdom', 'SU5 2GA)';

$sql3 = "INSERT INTO 'student'('studentid', 'password', 'dob', 'firstname', 'lastname', 'house', 'town', 'county', 'country', 'postcode')" VALUES ('21905732', '124', '16/11/96', 'Taehyung', 'v', '7', 'High Wycombe', 'bucks', 'United Kingdom', 'HP5 2BP)';

$sql4 = "INSERT INTO 'student'('studentid', 'password', 'dob', 'firstname', 'lastname', 'house', 'town', 'county', 'country', 'postcode')" VALUES ('21905542', '126', '16/1/90', 'Nam-Joon', 'Kim', '1', 'chesham', 'bucks', 'United Kingdom', 'HP5 2RM)';

$sql5 = "INSERT INTO 'student'('studentid', 'password', 'dob', 'firstname', 'lastname', 'house', 'town', 'county', 'country', 'postcode')" VALUES ('2190552', '127', '16/1/93', 'Jung', 'Kook', '5', 'chesham', 'bucks', 'United Kingdom', 'HP5 2JK)';

if ($conn->query($sql1) = TRUE) 
{
  echo "NEW RECORD CREATED SUCCESSFULY"</br>;
}
else 
{
  echo "ERROR" . $sql1 "</br>" . $conn->error;
}
if ($conn->query($sql2) = TRUE)
{
  echo "NEW RECORD CREATED SUCCESSFULY"</br>;
}
else 
{
  echo "ERROR" . $sql2 "</br>" . $conn->error;
}
if ($conn->query($sql3) = TRUE)
{
  echo "NEW RECORD CREATED SUCCESSFULY"</br>;
}
else 
{
  echo "ERROR" . $sql3 "</br>" . $conn->error;
}
if ($conn->query($sql4) = TRUE)
{
  echo "NEW RECORD CREATED SUCCESSFULY"</br>;
}
else 
{
  echo "ERROR" . $sql4 "</br>" . $conn->error;
}
if ($conn->query($sql5) = TRUE)
{
  echo "NEW RECORD CREATED SUCCESSFULY"</br>;
}
else 
{
  echo "ERROR" . $sql5 "</br>" . $conn->error;
}
  
  $hashedpass = password_hash($password, PASSWORD_DEFAULT);
  
  $idcheck = mysqli_query($conn, "SELECT studentid FROM student WHERE studentid = $ID"); //validation To prevent double entry

  $count = mysqli_num_rows($idcheck);
  if($count>0)
  {
     echo "<H3>Error: Unfortunately, there is already a student with this ID.</H3>";
  }

  else

  {
    $result = mysqli_query($conn, " INSERT INTO student(studentid,password,dob,firstname,lastname,
      house,town,county,country,postcode) VALUES
('$ID','$hashedpass', '$dateofbirth', '$fname', '$lname', '$firstline', '$town', '$county', '$country', '$postcode');");

      echo "<H3>Success: A new user has been created!</H3>";

  }
  
  }

   echo template("templates/default.php", $data); 

  }

  else 
  
  {   

   header("Location: index.php");

  }
  
  echo template("templates/partials/footer.php");
  ?>
