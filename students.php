<?php

include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");



// check logged in
if (isset($_SESSION['id'])) {

   echo template("templates/partials/header.php");
   echo template("templates/partials/nav.php");

   // Build SQL statment that selects a student's modules
   $sql = "SELECT studentid,dob,firstname,lastname,house,town,county,country,postcode FROM student;";

   $result = mysqli_query($conn,$sql);

   $data['content'] .= '<form method="post">';
   $data['content'] .= "<table border='1'>";
   $data['content'] .= "<tr><th colspan='10' align='center'><h2>Students</h2></th></tr>";
   $data['content'] .= "<tr><th>Student ID</th><th>DOB</th><th>First Name</th><th>Last Name</th><th>House</th><th>Town</th>
   <th>County</th><th>Country</th><th>Postcode</th><th>Select</th></tr>";

   while($row = mysqli_fetch_assoc($result)) {
      //echo "'$row[firstname]'&nbsp;'$row[lastname]'&nbsp;'$row[dob]'</br>";
    // prepare page content
     $data['content'] .= "<form action='_includes/delete.php' method='POST'><table border='1' >";
     $data['content'] .= "<tr><th colspan='6' text-align='center'>  students  </th></tr>";
     $data['content'] .= "<tr><th>Photo</th><th>FirstName</th><th>Lastname</th><th>dob</th><th>House</th><th>Town</th><th>County</th><th>Country</th><th>Postcode</th><th>select</th></tr>";
     // Display the modules within the html table
     while($row = mysqli_fetch_array($result)) {
      $data['content'] .= "<tr><td><img src='_includes/uploads/$row[picture]'  style='width:50px;height:50px;'></td>"; 
        $data['content'] .= "<td> $row[firstname] </td><td> $row[lastname] </td>";
        $data['content'] .= "<td> $row[dob] </td><td> $row[house]</td><td> $row[town]</td><td> $row[county] </td> <td> $row[country] </td><td> $row[postcode] </td><td><input type='checkbox' name='StudentID[]'  value='$row[studentid]'></td></tr>";
     }
     $data['content'] .= "</table>  <div><input type='submit' name='Delete' value='Delete'></div></form>";
      }
      // render the template
   echo template("templates/default.php", $data);

} else {
   header("Location: index.php");
}

echo template("templates/partials/footer.php");

mysqli_close($conn);
?>
