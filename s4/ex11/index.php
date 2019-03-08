<?php
$numbers=array(15,24,1,2,9,5,6,3,20,28,2);
$lenght=count($numbers);

$total_places=0;
$y=2;
for($x=0;$x<$lenght;$x++){
	if($numbers[$x]==$y){
		echo "The number found in cell ".$x."</br>";
		$total_places++;
	}
}
echo "The number u entered were found in the array for ".$total_places." time/times";

?>