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

for($j=0;$j<$lenght;$j++){
	$min=$j;
	for($i=$j;$i<$lenght;$i++){
		if($numbers[$min]>$numbers[$i]){
			$min=$i;
		}
	}
	$temp = $numbers[$j];
	$numbers[$j]=$numbers[$min];
	$numbers[$min]=$temp;
}
echo "<table border='1'>";
echo "<tr>";
for($y=0;$y<$lenght;$y++){
	echo "<td>".$numbers[$y]."</td>";
}
echo "</tr>";
echo "</table>";
echo "</br>";
?>