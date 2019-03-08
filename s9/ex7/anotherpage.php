<?php
$con=mysqli_connect("localhost","root","","php");
mysqli_set_charset($con,"utf8");
$whichstate=$_REQUEST['num'];
$res=mysqli_query($con,"SELECT * FROM city WHERE province_id LIKE '$whichstate';");
?>

<select>
	<?php
	while ($row=mysqli_fetch_array($res)){
	?>
	<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
	<?php
	}
	?>
</select>