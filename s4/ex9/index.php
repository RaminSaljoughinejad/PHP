<?php
//			Arrays
//			In PHP, there are three types of arrays:
//		   		1- Indexed arrays - Arrays with a numeric index
//		    	2- Associative arrays - Arrays with named keys
//		   		3- Twodimensional arrays - Arrays containing one or more arrays
/////////////////////////////////////////////////////////////////////////////////////
//			PHP Twodimensional Arrays
$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );

for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}

?>