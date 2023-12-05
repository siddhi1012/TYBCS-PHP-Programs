<?php
$sno=$_GET['sno'];
$sname=$_GET['sname'];
$marks=$_GET['marks']; 
 
$sno_s=preg_split("/,/",$sno) ;
$sname_s=preg_split("/,/",$sname);
$marks_s=preg_split("/,/",$marks);
echo "<table border=1>";
$sum=0;
$per=0;
$grade='';
 echo"<tr>";
   echo"<td>";echo"SNO"; echo"</td>";
  echo"<td>";echo"sname"; echo"</td>";
 echo"<td>";echo "marks"; echo"</td>";
echo"</tr>";
 for($i=0;$i<count($sno_s);$i++)
  {
   echo"<tr>";
   echo"<td>";echo$sno_s[$i]; echo"</td>";
  echo"<td>";echo$sname_s[$i]; echo"</td>";
 echo"<td>";echo$marks_s[$i]; echo"</td>";
echo"</tr>";
  $sum+=$marks_s[$i];
 }
$per=$sum/5;
 
if($per > 70 && $per <101) 
  $grade='O';
if($per > 60 && $per <70 ) 
  $grade='A';
if($per > 50 &&  $per <60 ) 
  $grade='B';

if($per > 40 && $per <50 ) 
  $grade='P';

if($per < 39) 
  $grade='F';


echo"<tr>";
   echo"<td>";echo"Total=>".$sum; echo"</td>";
  echo"<td>";echo"PER=>".$per; echo"</td>";
 echo"<td>"; echo"Grade=>".$grade; echo"</td>";
echo"</tr>";
echo "</table>";
 

?>
