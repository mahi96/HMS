<?php
$con=@mysql_connect("localhost","root","123456") or die(mysql_error());
$db=@mysql_select_db("hms",$con)or die(mysql_error());

 echo '<h1>Welcome Admin</h1></br>';
	   echo '<html>
<body>
</br></br>
<form method="post" action="delserv.php">
<input type="submit" name="submit" value="DELETE APPOINTMENS" />
</form>
<form method="post" action="rooms.php">
<input type="submit" name="sub"    value="ROOMS" />
</form>
</br></br>
<a href="service.php">';
echo 'LOGOUT';
echo '</a> </body> </html>';
	      
	
		
?>
