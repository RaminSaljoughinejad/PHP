<?php
//	Multiplication Table
////////////////////////////////////////
echo "<table border='1' style='text-align:center;border-collapse:collapse;width:250px;height:250px;'>";
for($i=1;$i<=10;$i++){
	echo "<tr>";
	for($j=1;$j<=10;$j++){
		if($j%2){
			if($i%2){	
				echo "<td style='background-color:red;color:white;'>".($i*$j)."</td>";
			}else{
				echo "<td style='background-color:blue;color:white;'>".($i*$j)."</td>";
			}		
		}else{
			if($i%2){
				echo "<td style='background-color:blue;color:white;'>".($i*$j)."</td>";
			}else{
				echo "<td style='background-color:red;color:white;'>".($i*$j)."</td>";
			}
		}
	}
	echo "</tr>";
}
echo "</table>";
?>
