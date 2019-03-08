<?php
/*
 			Prime numbers
*/
$checker =1;
$x = 13;
if($x>5){
	$p=$x/2;
}else{
	$p=$x;
}
$i =2;
$flage = 0;
while($i<$p){
	if(!($x%$i)){
		$flage = 1;
		break;
	}
	$i++;
	$checker++;
}
if($flage){
	echo "عدد اول نیست";
}else{
	echo "عدد اول است";
}
echo "</br>".$checker;

?>