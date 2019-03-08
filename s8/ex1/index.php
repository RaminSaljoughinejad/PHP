<?php
/*
 						         	Cookie
 	    A cookie is a small file that the server embeds on the user's computer.
   		      Each time the same computer requests a page with a browser
                          it will send the cookie too.
  You wont be able to use the cookie the first time u set it u have to reload the page
 		    setcookie(name, value, expire, path, domain, secure, httponly);
*/
if(isset($_COOKIE['color'])){
	echo $_COOKIE['color'];
}else{
	setcookie("color","green",time()+10,"/");
	echo "Cookie created";
}





?>