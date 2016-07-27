<?php
$con=@mysql_connect("localhost","root","123456") or die(mysql_error());
$db=@mysql_select_db("hms",$con)or die(mysql_error());

	 
			echo '<!DOCTYPE html>
						<HTML>
		<HEAD><TITLE> Login</TITLE>
		
		</HEAD>
		<BODY>
		<h2>Welcome Doctor Rishikesh</h2>
		
	<h4> Appointment Details
		</h4>
		
		<TABLE WIDTH="75%" BORDER="2" CELLPADDING="5" ALIGN=CENTER>
	     <TR VALIGN="top"> 
	     <TD> <b>Appointment No.</b></TD>
		 <TD> <b>Appointment Date</b></TD>
		 <TD> <b>Appointment Time</b></TD>
	     <TD> <b>Patient ID</b></TD>
		 <TD> <b>Patient Name</b></TD>
		 <TD> <b>Age</b></TD>
		 <TD> <b>Gender</b></TD>
		 </TR>';
	   $str="select * from patients,appointments where patients.pid=appointments.pid";
	   $queryexec=mysql_query($str) or die(mysql_error());
	   $ans = mysql_fetch_assoc($queryexec);
	   while($ans = mysql_fetch_assoc($queryexec))
	   {
	 
		 echo '<TR><TD><a href="prescription.html"><b>';
		 echo $ans['appid'];
		 echo '</b></a></TD><TD><b>';
		 echo date("d-m-Y");
		 echo '</b></TD><TD><b>';
		 $d=mktime($ans['h'],$ans['m'], 54, 8, 12, 2014);
         echo date("h:i", $d);
		 echo '</b></TD><TD><b>';
		 echo $ans['pid'];
		 echo '</b></TD><TD><b>';
		 echo $ans['name'];
		 echo '</b></TD><TD><b>';
		 echo $ans['age'];
		 echo '</b></TD><TD><b>';
		 echo $ans['gender']; 
		  echo '</b></TD></TR>';
	   } 
	   echo '</table></br></body></html>';
	 
	
	
	
?>
<html>
<body>
<p><a href='doclogin.php'><b>LOGOUT</b></a></p>
</body>
</html>