<?php
if(isset($_POST['which'])){
	if(empty($_POST['number1'])){
		echo "You need to enter a number.";
	}elseif(empty($_POST['number2'])){
		echo "You need to enter a number.";
	}else{
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
	}
}else{
	echo "You need to submit the form first ";
	echo "Click <a href='index.php'>HERE</a> to get back to form.";
}
?>