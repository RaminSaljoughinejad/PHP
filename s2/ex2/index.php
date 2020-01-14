<?php
// This function returns the number of words in a given sentence.
$str="Ali lives in Nework City!";

echo $str;
echo " --- ";
echo str_word_count($str);

echo "</br>";
echo "Mina lives with her sisters!"." --- ";
echo str_word_count("Mina lives with her two sisters!");

echo "<br>";

// Unlike strlen() this function does not work on numbers.
$x=12;
echo str_word_count($x);
?>