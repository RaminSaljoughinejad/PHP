<?php
//				Sort Array in Ascending Order - sort()

$numbers=array(15,24,1,2,9,5,6,3,20,28,2);

sort($numbers);


$lenght=count($numbers);
for($y=0;$y<$lenght;$y++){
	echo $numbers[$y]."  ";
}


?>