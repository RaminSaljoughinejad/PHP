<?php
session_start();
if(isset($_SESSION["email"])){
	$email=$_SESSION["email"];
	echo "Welcome, $email";
}else{
	header("Location: index.php?error=3");
}
?>
