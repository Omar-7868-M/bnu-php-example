<!DOCTYPE html>
<html>
<head>

<titile>
Student Records Table 
</title>

</head>

<body>
<form method ="post" action="">
   <table align = 'center' border ='1' class = "bordered">
    <thead>

<tr> 
    <th> <input type = "checkbox" id = "checkAl"> Select all</th>
    <th>Student ID</th>
    <th>Password</th>
    <th>Date of Birth</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>House</th>
    <th>Town</th>
    <th>County</th>
    <th>Country</th>
    <th>Postcode</th>
    <th>Image</th>
</tr>
</thead>

<?php

$u = 0;

while($row = mysqli_fetch_array($result))
{
 ?>
    <tr>

      <td align ="center" border ="1"><input type ="checkbox" id ="checkItem" name ="check[]" value ="<?php echo $row ["StudentID"]; ?>"/></td>
      <td> <?php echo $row["StudentID"]; ?> </td>
      <td> <?php echo $row["Password"]; ?> </td>
      <td> <?php echo $row["DOB"]; ?> </td>
      <td> <?php echo $row["FirstName"]; ?> </td>
      <td> <?php echo $row["LastName"]; ?> </td>
      <td> <?php echo $row["House"]; ?> </td>
      <td> <?php echo $row["Town"]; ?> </td>
      <td> <?php echo $row["County"]; ?> </td>
      <td> <?php echo $row["Country"]; ?> </td>
      <td> <?php echo $row["PostCode"]; ?> </td>
      <td> <?php echo "<img src = 'studentjpg.php?id =" . $row[id]. "'height ='100'"?></td>
    
    </tr>

<?php $u++; 
}
?>

</table>
<button type ="submit" class ="btn btn-success" name ="save"> Delete</button>

</form>
</body>
</html>
