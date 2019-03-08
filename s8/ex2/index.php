<?php
include 'include/connection.php';

if(!isset($_COOKIE['counter'])){
	setcookie("counter","counted",time()+10,"/");
	$year=date("Y");
	$month=date("m");
	$day=date("d");
	mysqli_query($con,"INSERT INTO siteview(year,month,day)VALUES('$year','$month','$day');")or die(mysqli_error($con));
	echo "New view</br>";
}else{
	echo "Allready Counted</br>";
}
$res=mysqli_query($con,"SELECT year FROM siteview WHERE 1;");
if(mysqli_num_rows($res)){
	echo mysqli_num_rows($res);
}else{
	echo 0;
}
?>