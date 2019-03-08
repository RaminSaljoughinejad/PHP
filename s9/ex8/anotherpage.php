<?php
$con=mysqli_connect("localhost","root","","php");
mysqli_set_charset($con,"utf8");
$chckemail=$_REQUEST['email'];
$res=mysqli_query($con,"SELECT * FROM users WHERE email LIKE '$chckemail';");
if(mysqli_num_rows($res)){
	echo "Email is not valid. Use another Email.";
}else{
	echo "Email is valid.";
}
?>