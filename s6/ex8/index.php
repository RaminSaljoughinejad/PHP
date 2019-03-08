<?php
include "include/connection.php";

$FN="Armin";
$LN="Saljoughinejad";
$email="A.S@icloud.com";
$pwd="159753";

mysqli_query($con,"INSERT INTO users(fName,lName,email,password)VALUES('$FN','$LN','$email','$pwd');");


?>