<?php
$a=$_GET['no1'];
$b=$_GET['no2'];
$ch=$_GET['op'];
switch($ch)
{
case 1: mod($a,$b);
break;

case 2: power($a,$b);
break;

case 3: sum($a);
break;

case 4: factorial($b);
break;


}
function mod($a,$b)
{
$c=$a%$b;
echo"mod of the two number $c" ;
}

function power($a,$b)
{
 $c=pow($a,$b);
 echo "power of first number raised to second $c";
}
function sum ($a)
{
$sum=0;
for($i=0; $i<=$a; $i++)
{
    $sum=$sum+$i;
}
echo "sum of n number $sum ";
}
function factorial($b)
{

$fact=1;
for($i=$b; $i>=1; $i--)
{
$fact=$fact*$i;


}
echo "factorial of $b is". $fact;
}
?>