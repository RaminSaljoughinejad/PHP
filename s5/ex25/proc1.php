<?php
if(isset($_POST['which'])){
	switch($_POST['which']){
	case "*":
		echo $_POST['number1']*$_POST['number2'];
		break;
	case "+":
		echo $_POST['number1']+$_POST['number2'];
		break;
	case "/":
		echo $_POST['number1']/$_POST['number2'];
		break;
	case "-":
		echo $_POST['number1']-$_POST['number2'];
		break;
	}
}else{
	echo "You need to submit the form first ";
	echo "Click <a href='index.php'>HERE</a> to get back to form.";
}
?>