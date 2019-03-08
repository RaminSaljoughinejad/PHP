<?php
$numbers=array(15,24,1,2,9,5,6,3,20,28,2);
$lenght=count($numbers);

for($x=0;$x<$lenght;$x++){
	if($x%2){
		echo $numbers[$x]."    ";
	}
}

?>