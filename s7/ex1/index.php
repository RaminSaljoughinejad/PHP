<?php
$error=1;
$error_msg="";
include "includes/connection.php";
if(isset($_POST['submit'])){
	$fname=mysqli_real_escape_string($con,$_POST['fname']);
	$lname=mysqli_real_escape_string($con,$_POST['lname']);
	$email=filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	$password=$_POST['password'];
	$repassword=$_POST['repassword'];
	$image=$_FILES['image']['name'];
	$tmp_name=$_FILES['image']['tmp_name'];
	$image_size=$_FILES['image']['size'];
	if(strlen($fname)<3){
		$error=0;
		$error_msg="Your first name is less than 3 charecters";
	}elseif(strlen($lname)<3){
		$error=0;
		$error_msg="Your last name is less than 3 charecters";
	}elseif($password!==$repassword){
		$error=0;
		$error_msg="Passwords are not match";
	}elseif(strlen($password)<8){
		$error=0;
		$error_msg="Passwords needs to be at least 8 charecters";
	}elseif(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
		$error=0;
		$error_msg="Please Enter a valid Email";
	}elseif($image_size>2097152){
		$error=0;
		$error_msg="You file is too large. max size 2Mb";
	}else{
		$res=mysqli_query($con,"SELECT id FROM users WHERE email LIKE '$email'");
		if(mysqli_num_rows($res)){
			$error=0;
			$error_msg="User With this email already Exist";
		}else{
		$password=md5($password);
		$image_exp=explode(".", $image);
		$my_exp=$image_exp['1'];
		if($my_exp=='PNG' || $my_exp=='png' || $my_exp=='JPG' || $my_exp=='jpg'){
		$image=rand(0,10000).rand(0,10000).rand(0,10000).time();
		$myQuery="INSERT INTO `users`(`fName`, `lName`, `email`, `password`, `fileName`) VALUES ('$fname','$lname','$email','$password','$image')";
		mysqli_query($con,$myQuery)or die(mysqli_error($con));
		if(!mysqli_error($con)){
			move_uploaded_file($tmp_name, "uploads/$image".".".$my_exp);
			echo "Done.";
		}
		}else{
			$error=0;
			$error_msg="You can only upload 'jpg' or 'png' images";
		}
		}
	}
	
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Registration form</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
		<div id="wrapper">
		</br>
		<?php
		if(!$error){
			echo "<p>$error_msg</p></br>";
		}
		?>
		<form action="index.php" method="post" enctype="multipart/form-data">
			<input name="fname" type="text" placeholder="First name" /></br></br>
			<input name="lname" type="text" placeholder="Last name" /></br></br>
			<input name="email" type="email" placeholder="Email" /></br></br>
			<input name="password" type="password" placeholder="Password" /></br></br>
			<input name="repassword" type="password" placeholder="Re-enter Password" /></br></br>
			<lable>Please upload an image for ur profile( it's needed ).</lable></br></br>
			<input type="file" name="image" /></br></br>
			<input type="submit" value="Submit" name="submit" />
		</form>
	</br></br>
		</div>
	</body>
</html>