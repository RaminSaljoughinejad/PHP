<html>
	<head>
		<title>Ajax</title>
		<script type="text/javascript">
			function myClick(newinp,act){
				var num=document.getElementById("myP").innerHTML;
				num=parseInt(num);
				if(act=="+"){
					num=num+newinp;
				}else{
					num=num-newinp;
				}
				document.getElementById("myP").innerHTML=num;
			}
		</script>
	</head>
	<body>
		<p id="myP">1</p>
		<button onclick="myClick(1,'+');">+1</button>
		<button onclick="myClick(1,'-');">-1</button>
	</body>
</html>