<?php
include 'include/connection.php';

if(isset($_POST["submit"])){
	$email=$_POST['email'];
	$pwd=$_POST["pwd"];
	$res=mysqli_query($con,"SELECT * FROM users WHERE email='$email' AND password='$pwd';");	
	if(mysqli_num_rows($res)){
		echo "Welcome User";
	}else{
		echo "Wrong UserName or Password";
	}
}else{
?>

<form action="index.php" method="post">
	<input type="text" name="email" placeholder="Email Address" />
	<input type="password" name="pwd" placeholder="Password" />
	<input type="submit" name="submit" />
</form>
<?php
}
?>