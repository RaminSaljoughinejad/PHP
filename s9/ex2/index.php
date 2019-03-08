<html>
	<head>
		<title>Ajax</title>
		<script type="text/javascript">
			function myClick(){
				var num=document.getElementById("myP").innerHTML;
				num=parseInt(num)+1;
				document.getElementById("myP").innerHTML=num;
			}
		</script>
	</head>
	<body>
		<p id="myP">1</p>
		<button onclick="myClick();">Click me!</button>
	</body>
</html>