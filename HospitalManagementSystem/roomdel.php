<?php
 $con=@mysql_connect("localhost","root","123456") or die(mysql_error());
$db=@mysql_select_db("hms",$con)or die(mysql_error());
if(isset($_POST['submit']))
{
	$rno=$_POST['roomno'];
    $st="select status from rooms where rno='$rno'";
	$re=mysql_query($st,$con);
	$ans = mysql_fetch_assoc($re);
	if($ans['status']==0) {echo'</br>ROOM IS ALREADY AVAILABLE';}
	else {
	$str="update rooms set status=0,rpid=0,rpname=' ' where rno='$rno'";
	$res=mysql_query($str,$con);
    echo '</br>ROOM NO. '.$rno.' NOW AVAILABLE';
	}
}

?>

<html>
<body></br></br></br>ROOM No. TO BE VACATED&nbsp;&nbsp;
<form method="post">
<input type='text' name="roomno" >
</br></br>
<input type='submit' name='submit' value='VACATE' >
</br></br>
<a href='rooms.php'>ROOMS PAGE</a>
</form>
</body>
</html>
