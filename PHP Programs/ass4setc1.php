<?php
$a=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
echo "Associative array : Ascending order sort by value <br>";
asort($a);
foreach($a as $y=>$y_value)
{echo "Age of ".$y." is : ".$y_value."<br>";
}
echo "Associative array : Ascending order sort by Key <br>";
ksort($a);
foreach($a as $y=>$y_value)
{
    echo "Age of ".$y." is : ".$y_value."<br>";
}
echo "Associative array : Descending order sorting by Value<br>";
arsort($a);
foreach($a as $y=>$y_value)
{
    echo "Age of ".$y." is : ".$y_value."<br>";
}
echo "Associative array : Descending order sorting by Key<br>";
krsort($a);
foreach($a as $y=>$y_value)
{
    echo "Age of ".$y." is : ".$y_value."<br>";
}
?>