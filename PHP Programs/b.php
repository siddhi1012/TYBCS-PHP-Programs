<?php
$name=$_GET['name'];
$cname=$_GET['cname'];
$gname=$_GET['gname']; 

function disp($gname="Welcome",$name="Rohit",$cname="Law College"){
echo $gname.','.$name.' '.$cname."<br>";

}
 disp($gname,$name,$cname);
 disp($gname,$name);
 disp($gname);
disp();

?>
