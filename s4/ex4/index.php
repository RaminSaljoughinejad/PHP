<head>
    <style>
        .myTable td:hover{
            background-color:white!important;
            color:black!important;
        }
        .myTable button{
            width:100%;
            height:100%;
            border: none;
            background-color: transparent;
        }
    </style>
    <script type="text/javascript">
        function pusher(x){
            document.getElementById("myDiv").innerHTML=x;
        }
    </script>
</head>
<?php
//	Multiplication Table
////////////////////////////////////////
echo "<table class='myTable' border='1' style='border-collapse:collapse;width:350px;text-align:center;height:350px;background-color:blue;color:white;'>";
for($i=1;$i<=10;$i++){
    echo "<tr>";
    for($j=1;$j<=10;$j++){
        if($i%2){
            if(!(($i*$j)%2)){
                echo "<td  style='background-color:red;'><button onclick='pusher(this.value);' value='".$i*$j."'>".$i*$j."</button></td>";
            }else{
                echo "<td><button onclick='pusher(this.value);' value='".$i*$j."'>".$i*$j."</button></td>";
            }
        }else{
            if($j%2){
                echo "<td  style='background-color:red;'><button onclick='pusher(this.value);' value='".$i*$j."'>".$i*$j."</button></td>";
            }else{
                echo "<td><button onclick='pusher(this.value);' value='".$i*$j."'>".$i*$j."</button></td>";
            }
        }
    }
    echo "</tr>";
}
echo "</table>";
?>
<div id="myDiv">hello</div>