<html>
	<head>
		<title>Ajax</title>
		<script type="text/javascript">
			function myClick(pluse){
				var num=document.getElementById("myP").innerHTML;
				num=parseInt(num)+pluse;
				document.getElementById("myP").innerHTML=num;
			}
		</script>
	</head>
	<body>
		<p id="myP">1</p>
		<button onclick="myClick(1);">+1</button>
		<button onclick="myClick(2);">+2</button>
		<button onclick="myClick(3);">+3</button>
	</body>
</html>