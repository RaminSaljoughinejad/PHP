<?php
include "include/connection.php";
$FN=$_POST['fName'];
$LN=$_POST['lName'];
$email=$_POST['email'];
$pwd=$_POST['password'];

mysqli_query($con,"INSERT INTO users(fName,lName,email,password)VALUES('$FN','$LN','$email','$pwd');");


?>