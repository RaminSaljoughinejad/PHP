<?php
$numbers=array(15,24,1,2,9,5,6,3,20,28);
$lenght=count($numbers);

$look=19;
$flag=0;

for($i=0;$i<$lenght;$i++){
 	if($numbers[$i]==$look){
 		echo $i;
		$flag =1;
		break;
 	}
}
if(!$flag){
	echo -1;
}

?>