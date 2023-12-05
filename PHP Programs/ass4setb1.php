<?php
$a=array(1,2,3,4,5,6);
echo "Actual array is <br>";
foreach($a as $x)
{
    echo"$x";
}
echo"<br>";
$insert="*";
array_splice($a,2,0,$insert);
echo"After inserting '*' in array <br>";
foreach($a as $x)
{
    echo $x;
}
echo"<br>";


?>