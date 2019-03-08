<?php
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
?>