<?php
//				Sort Array in Descending Order - rsort()

$numbers=array(15,24,1,2,9,5,6,3,20,28,2);

rsort($numbers);


$lenght=count($numbers);
for($y=0;$y<$lenght;$y++){
	echo $numbers[$y]."  ";
}


?>