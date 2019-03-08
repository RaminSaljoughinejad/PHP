<body dir="rtl">
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
  array("Benz",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );

echo $cars[0][0]."------------ تعداد در انبار: ".$cars[0][1].", فروخته شده: ".$cars[0][2].".<br><br>";
echo $cars[1][0]."----------- تعداد در انبار: ".$cars[1][1].", فروخته شده: ".$cars[1][2].".<br><br>";
echo $cars[2][0]."------------- تعداد در انبار: ".$cars[2][1].", فروخته شده: ".$cars[2][2].".<br><br>";
echo $cars[3][0]."---- تعداد در انبار: ".$cars[3][1].", فروخته شده: ".$cars[3][2].".<br><br>";
?>
</body>