<?php
$numbers=array(15,24,1,2,9,5,6,3,20,28,2);
$lenght=count($numbers);

echo "<table border='1'>";
echo "<tr>";
for($y=0;$y<$lenght;$y++){
	echo "<td>".$numbers[$y]."</td>";
}
echo "</tr>";
echo "</table>";
echo "</br>";

$f1=4;
$f2=9;

$temp=$numbers[$f1];
$numbers[$f1]=$numbers[$f2];
$numbers[$f2]=$temp;

echo "<table border='1'>";
echo "<tr>";
for($y=0;$y<$lenght;$y++){
	echo "<td>".$numbers[$y]."</td>";
}
echo "</tr>";
echo "</table>";
?>