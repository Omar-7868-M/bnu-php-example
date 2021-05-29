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




<?php
   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");
   // check logged in
   if (isset($_SESSION['id'])) {
     echo template("templates/partials/header.php");
     echo template("templates/partials/nav.php");


















     
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
