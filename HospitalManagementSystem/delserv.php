<?php

	$con=@mysql_connect("localhost","root","123456") or die(mysql_error());
$db=@mysql_select_db("hms",$con)or die(mysql_error());

	$str="delete from appointments where d=1";
	$res=mysql_query($str) or die(mysql_error());
	if($res>0)
    { echo 'APPOINTMENS DELETED FOR '.date("d-m-Y"); }	

?>
<html>
<body>
</br></br>
<a href="serv.php">ADMIN PAGE</a>&nbsp;&nbsp;<a href="service.php">LOGOUT </a>

</body>
</html>