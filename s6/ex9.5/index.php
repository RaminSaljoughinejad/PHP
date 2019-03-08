<?php
include 'include/connection.php';

$res=mysqli_query($con,"SELECT * FROM users WHERE 1;");
echo "<table border='1'>";
	echo "<tr>";
	echo "<td>"."First Name"."</td>";
	echo "<td>"."Last Name"."</td>";
	echo "<td>"."Email"."</td>";
	echo "<td>"."Password"."</td>";
	echo "</tr>";
while($row=mysqli_fetch_array($res)){
	echo "<tr>";
	echo "<td>".$row['fName']."</td>";
	echo "<td>".$row['lName']."</td>";
	echo "<td>".$row['email']."</td>";
	echo "<td>".$row['password']."</td>";
	echo "</tr>";
}
echo "</table>";
?>