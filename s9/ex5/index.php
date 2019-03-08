
<html>
	<head>
		<title>Ajax</title>
		<script type="text/javascript">
			function runajax(){
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
		        xmlhttp.open("GET","anotherpage.php",true);
		        xmlhttp.send();
			}
		</script>
	</head>
	<body>
		<p id="myP">Hello if you can see me, it means that u ain't clicked on the buttom.</p>
		<button onclick="runajax();">Click me!</button>
	</body>
</html>