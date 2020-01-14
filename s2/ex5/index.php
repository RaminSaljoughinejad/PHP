<?php

// This function searches inside the hird input for the first input, and if ot finds it- it replaces it with the second input.
$str="Hello, World!";

echo str_replace("World!","My name is Alireza",$str)."</br>";


echo $str."</br>";


$str=str_replace("World!","My name is Alireza",$str);


echo $str;

?>