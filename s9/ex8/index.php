<html>
	<head>
		<title>Ajax</title>
		<script type="text/javascript">
			function chemail(email){
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
		        xmlhttp.open("POST","anotherpage.php?email="+email,true);
		        xmlhttp.send();
			}
		</script>
	</head>
	<body>
		<span id="valid"> </span></br>
		<input type="text" placeholder="Email" onkeyup="chemail(this.value)" />
	</body>
</html>