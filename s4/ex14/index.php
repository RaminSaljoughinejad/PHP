<?php
$numbers=array(15,24,1,2,9,5,6,3,20,28,2);
$lenght=count($numbers);

$sum=0;
for($i=0;$i<$lenght;$i++){
	$sum+=$numbers[$i];
}
echo $sum;
?>