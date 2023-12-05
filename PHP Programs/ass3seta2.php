<?php
$a=$_GET['str1'];
$ch=$_GET['op'];


switch($ch)
{
    case 1:length($a);
    break;
    case 2:countv($a);
    break;
    case 3:lowercase($a);
    break;
    case 4:pad($a);
    break;
    case 5:whitespace($a);
    break;  
    case 6:reverse($a);
    break;      
       
}
function length($a)
{
$str="$a";
$str_length=0;
while(@$str[$str_length]!=NULL)
{
  $str_length++;

}
echo"Total String Length=".$str_length;
}

function countv($a)
{
 strtolower($a);
 $vowels=array('a','e','i','o','u');
 $len=strlen($a);
 $num=0;
 for($i=0;$i<$len;$i++)
 {
if(in_array($a [$i],$vowels))
{
    $num++;
}
 }
 echo"Number of Vowels=".$num;
}

function lowercase($a)
{
    strtolower($a);
    $c=ucwords($a);
    echo "The Given String in Title=".$c
     ;
}

function pad($a)
{
    $c=str_pad($a,20,"*",STR_PAD_BOTH);
    echo"Padding in Both Sides ->".$c;
}

function whitespace($a)
{
$c=trim($a);
echo"Remove the WhiteSpaces=".$c;
}

function reverse($a)
{
    $c=strrev($a);
    echo"The reverse String=".$c;
}
?>