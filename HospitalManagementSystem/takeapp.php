<?php
$con=@mysql_connect("localhost","root","123456") or die(mysql_error());
$db=@mysql_select_db("hms",$con)or die(mysql_error());


$pid=$_POST['id'];

$str="select appid,h,m from appointments where appid =(select max(appid) from appointments)";
$result=mysql_query($str,$con);

if(!$result )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_assoc($result))
{
    $appid=$row['appid'];
	$h=$row['h'];
	$m=$row['m'];
} 
$appid++;
$m+=15;
if($m===60) { $h++; $m=0;}

$str="insert into appointments values('$appid','$pid','$h','$m',1)";
$res=mysql_query($str)or die(mysql_error());
if($res>0)
{
	echo "Patient Id       : " . $pid."<br>"."Appointment No.       : ".$appid."<br>";
	echo "Appointment Date : " . date("d-m-Y") . "<br>";
	$d=mktime($h, $m , 54, 8, 12, 2014);
	echo "Appointment Time : " .date("h:i", $d). "<br>";
}
mysql_close($con);
?> 

<html>
<br>
<body>

<a href="patient.html"><b>Patients page</b></a>
</body>
</html>

