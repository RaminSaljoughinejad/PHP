<?php
//			Arrays
//			In PHP, there are three types of arrays:
//		   		1- Indexed arrays - Arrays with a numeric index
//		    	2- Associative arrays - Arrays with named keys
//		   		3- Multidimensional arrays - Arrays containing one or more arrays
/////////////////////////////////////////////////////////////////////////////////////
//			PHP Indexed Arrays

$cars = array("Volvo", "BMW", "Toyota");
/*
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
*/

for($x=0;$x<3;$x++){
	echo $cars[$x]."</br>";
}


?>