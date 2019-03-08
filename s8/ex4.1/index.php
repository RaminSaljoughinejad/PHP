<?php
$con=mysqli_connect("localhost","root","","php");
if(isset($_REQUEST["error"])){
	switch($_REQUEST["error"]){
		case 1:
			echo "Please Enter Your email and Password"."</br></br>";
			break;
		case 2:
			echo "Your email or password is wrong"."</br></br>";
			break;
		default:
			break;
	}
}
if(isset($_COOKIE["email"])){
	$email=$_COOKIE["email"];
	$pwd=$_COOKIE["pwd"];
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
	}
}else{
	echo "no Cookie"."</br></br>";
}
?>
<form method="post" action="login.php">
	<input type="email" name="email" placeholder="Your Email" /></br>
	<input type="password" name="pwd" placeholder="Your Password" /></br>
	<span><input type="checkbox" value="1" name="remMe" />Remember me!</span></br>
	<input type="submit" name="login" value="Login" />
</form>