<?php
session_start();
$con=mysqli_connect("localhost","root","","php");
if(isset($_POST["login"])){
	$email=$_POST["email"];
	$pwd=md5($_POST["pwd"]);
	$res=mysqli_query($con,"SELECT * FROM users WHERE email='$email' AND password='$pwd';");
	if(mysqli_num_rows($res)){
		$_SESSION["email"]=$email;
		$_SESSION["pwd"]=$pwd;
		if($_POST["remMe"]){
			setcookie("email",$email,time()+10,"/");
			setcookie("pwd",$pwd,time()+10,"/");	
		}
		header("Location: welcome.php");
		exit();
	}else{
		header("Location: index.php?error=2;");
	}
}else{
	header("Location: index.php?error=1;");
	exit();	
}
?>