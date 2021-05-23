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
<input type ="date" name ="dobd" size ="20" class ="form-control"/>
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

Student Image:
<input type ="file" name ="studentimage" accept = "image/jpeg" class ="form-control"/>
</br></br>

<input type ="submit" class = "btn btn-default" value ="Save"/>

</form>
</html>
