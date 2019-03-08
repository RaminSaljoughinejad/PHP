<?php
/*
 			Prime numbers
*/
$y=2;
while($y<100){
$x=2;
$z=0;
while($x<$y){
	if($y%$x){
	}else{
		$z++;
	}
	$x++;
}
if($z){
}else{
	echo $y."</br>";
}
$y++;
}

?>