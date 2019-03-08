<?php
$con=mysqli_connect("localhost","root","","php");
mysqli_set_charset($con,"utf8");
$res=mysqli_query($con,"SELECT * FROM province WHERE 1;");
?>
<html>
	<head>
		<title>Ajax</title>
		<script type="text/javascript">
			function schange(prov){
				var num=prov
				if (window.XMLHttpRequest) {
		            // code for IE7+, Firefox, Chrome, Opera, Safari
		        xmlhttp = new XMLHttpRequest();
		        } else {
		            // code for IE6, IE5
		            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		        }
		        xmlhttp.onreadystatechange = function() {
		            if (this.readyState == 4 && this.status == 200) {
		                document.getElementById("myP").innerHTML = this.responseText;
		            }
		        };
		        xmlhttp.open("POST","anotherpage.php?num="+num,true);
		        xmlhttp.send();
			}
		</script>
	</head>
	<body>
		<select onchange="schange(this.value);">
			<option>Select</option>
			<?php
			while($row=mysqli_fetch_array($res)){
			?>
			<option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
			<?php
			}
			?>
		</select>
		<div id="myP">
		<select disabled="disabled">
			<option>Select</option>
		</select>
		</div>
	</body>
</html>