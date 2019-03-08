<?php
function sendError(){
	echo "Error: please contact Support."."</br>";
}

for($i=0;$i<10;$i++){
echo $i."- ";	
sendError();
}

?>