<?php
/*
  									Sessions

A session is a way to store information (in variables) to be used across multiple pages.
		 Unlike a cookie, the information is not stored on the users computer.
*/

session_start();
if(isset($_SESSION['user'])){
	echo "Hello, ".$_SESSION['user'];
}else{
	$_SESSION['user']="hojat";	
	echo "You are just loged in"; 
}




?>