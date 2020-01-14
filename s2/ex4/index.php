<?php
// this function seeks a given string inside another and returns the starting index.
$str="Hello World, we are getting to know more about the strings functions.";
echo "First output: <br>";
echo strpos($str,"World");
echo "<br><br>";

echo "Second output: <br>";
$myInput = "Simin";
echo strpos($str,$myInput);

echo "<br><br>";
echo "Third output: <br>";
// this function also works on numbers. The first input automatically converts to a string but the second input doesn't (You need to convert it yourself).
$number = 123456;
$x=3;
echo strpos($number,"$x");

?>