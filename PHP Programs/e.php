<?php
$r=explode(",",$_GET['r']);
$n=explode(",",$_GET['n']);
$s1=explode(",",$_GET['s1']);
$s2=explode(",",$_GET['s2']);
$s3=explode(",",$_GET['s3']);
$s4=explode(",",$_GET['s4']);
$s5=explode(",",$_GET['s5']);
echo"<table border=2>";
$c=count($r);
echo "<tr><th>rollno</th> <th>name</th> <th>s1</th> <th>s2</th> <th>s3</th> <th>s4</th> <th>s5</th>  <th>total</th> <th>per</th> <th>Grade</th><tr>";
for($i=0;$i<$c;$i++)
{
    $t=$s1[$i]+$s2[$i]+$s3[$i]+$s4[$i]+$s5[$i];
    $p=$t/5;
if($p > 70 && $p <101) 
$grade='O';
if($p > 60 && $p <70 ) 
  $grade='A';
if($p > 50 &&  $p <60 ) 
  $grade='B';

if($p > 40 && $p <50 ) 
  $grade='P';

if($p < 39) 
  $grade='F';

    echo "<tr><td>".$r[$i]. "</td><td>".$n[$i]. "</td><td>".$s1[$i]."</td><td>".$s2[$i]."</td><td>".$s3[$i].    "</td><td>\t\t" .$s4[$i]. "</td><td>" .$s5[$i]. "</td><td>".$t."</td><td>".$p."</td><td>".$grade."</td></tr>";
}
echo"</table>";
?>