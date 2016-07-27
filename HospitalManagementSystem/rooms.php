<?php
 $con=@mysql_connect("localhost","root","123456") or die(mysql_error());
$db=@mysql_select_db("hms",$con)or die(mysql_error());
$str="select count(rno) as c from rooms where status=1";
$res=mysql_query($str);
$ans=mysql_fetch_assoc($res);
$ans=$ans['c'];
$total =10;
$r=$total-$ans;
ECHO '</br><a href="serv.php">ADMIN PAGE</a>&nbsp;&nbsp;<a href="service.php">LOGOUT</a></</br>';
echo '</br><h4>TOTAL ROOMS = 10 &nbsp; &nbsp; ALLOTTED ROOMS = '.$ans.'&nbsp; &nbsp; UNALLOTTED ROOMS = '.$r.'</br></br>';
echo '<h4><a href="roomdel.php">DISCHARGE</a> A PATIENT</h4></br></br>';
echo '<!DOCTYPE html>
						<HTML>
		<HEAD><TITLE>ROOMS PAGE</TITLE>
		
		</HEAD>
		<BODY>
		<h4>ALLOTTED ROOM DETAILS</h4>
		<TABLE WIDTH="50%" BORDER="2" CELLPADDING="5" >
	     <TR VALIGN="top"> 
	     <TD> <b>ROOM NO.</b></TD>
		 <TD> <b>PATIENT ID</b></TD>
		 <TD> <b>PATIENT NAME</b></TD>
		
		 </TR>';
		
	   $str="select * from rooms where status=1";
	   $queryexec=mysql_query($str) or die(mysql_error());
	   
	   while($ans = mysql_fetch_assoc($queryexec))
	   {
		 echo '<TR><TD><b>';
		 echo $ans['rno'];
		 echo '</b></TD><TD><b>';
		 echo $ans['rpid'];
		 echo '</b></TD><TD><b>';
		 echo $ans['rpname'];
		 echo '</b></TD></TR>';
		 
	   } 
	   
	     echo '</table></br></br>';
		 
		 ECHO'<h4>UNALLOTTED ROOM DETAILS</h4>
		<TABLE  BORDER="2" CELLPADDING="5" >
	     <TR VALIGN="top"> 
	     <TD> <b>ROOM NO.</b></TD>
		 </TR>';
		 
	   $str="select rno from rooms where status=0";
	   $queryexec=mysql_query($str) or die(mysql_error());
	   
	   while($ans = mysql_fetch_assoc($queryexec))
	   {
		  echo '<TR><TD><b>';
		 echo $ans['rno'];
		 echo '</b></TD></tr>';
		 
	   }
			 
	echo '</body></html>';
						
?>