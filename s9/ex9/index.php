<html>
	<head>
		<title>Ajax</title>
		<script type="text/javascript">
			function chemail(pass){
				var first=document.getElementById("first").value;
				if (window.XMLHttpRequest) {
		            // code for IE7+, Firefox, Chrome, Opera, Safari
		        xmlhttp = new XMLHttpRequest();
		        } else {
		            // code for IE6, IE5
		            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		        }
		        xmlhttp.onreadystatechange = function() {
		            if (this.readyState == 4 && this.status == 200) {
		                document.getElementById("valid").innerHTML = this.responseText;
		            }
		        };
		        xmlhttp.open("POST","second.php?pass="+pass+"&passs="+first,true);
		        xmlhttp.send();
			}
		</script>
	</head>
	<body>
		<span id="valid"> </span></br>
		<input type="text" placeholder="password" id="first" />
		<input type="text" placeholder="password" onkeyup="chemail(this.value)" />
	</body>
</html>