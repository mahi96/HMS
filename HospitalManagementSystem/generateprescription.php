<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '123456';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
$id=$_POST['id'];
$medicine=$_POST['medicine'];
$diagnosis=$_POST['diagnosis'];
$instructions=$_POST['instructions'];
//$doc_name=$_POST['doc_name'];
$b;
mysql_select_db('hms');
$str="insert into prescription  values('$id','MAH0001','Rishikesh','$medicine','$diagnosis','$instructions')";
$res=@mysql_query($str)or die(mysql_error());
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$sql="SELECT * FROM patients WHERE patients.pid='$id'"; 

$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
//$row = mysql_fetch_array($retval, MYSQL_ASSOC);

while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
	$b=$row['name'];
	echo "<big><b>PRESCRIPTION : </b></big><br><br><br>";
	echo "<b>Doctor Details : </b></br></br>";
	echo "DOCTOR ID : MAH0001  <br><br> ".
         "DOCTOR NAME 	: RISHIKESH <br><br> ";
	echo "<b>Patient Details : </b><br></br>";
    echo "PATIENT ID : {$row['pid']}  <br><br> ".
         "NAME 		 : {$row['name']} <br><br> ".
         "AGE		 : {$row['age']} <br><br> ".
         "GENDER	 : {$row['gender']} <br><br> ".
         "MOBILE	 : {$row['mobile']} <br><br> ".
        
         "-------------------------------------------<br>";
 
echo "MEDICINE : $medicine <br><br>".
	 "DIAGNOSIS : $diagnosis <br><br>".	
	 "ADDITIONAL INSTRUCTIONS : $instructions <br><br>".
	 "-------------------------------------------<br><br>";	

}


if(isset($_POST['sub']))
{
  $str="SELECT * FROM rooms where status=0";
  $queryexec=mysql_query($str) or die(mysql_error());
	   $res=mysql_num_rows($queryexec);
	   
	   if($res>0)
	   {
		   $row1 = mysql_fetch_assoc($queryexec);
		   $a=$row1['rno'];
		   $str="update rooms set rpname='$b' where rno='$a'";
		   $res=@mysql_query($str)or die(mysql_error());
		   $str="update rooms set status=1 where rno='$a'";
		   $res=@mysql_query($str)or die(mysql_error());
		   $str="update rooms set rpid='$id' where rno='$a'";
		   $res=@mysql_query($str)or die(mysql_error());
		   echo"ROOM NO ALLOTED : ".$row1['rno'];  
	   }
       else
	   {
		   echo "No vacant room";
	   }
}      
mysql_close($conn);
?>
<html>
</br>
</br>
<input type="button" onclick="window.print();" value="Print Prescription"/><br><br>
<a href="doclog.php"><b>DOCTOR MAIN PAGE</b></a>
</html>
