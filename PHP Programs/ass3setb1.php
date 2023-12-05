<?php
$a=$_GET['str1'];
$b=$_GET['str2'];
$ch=$_GET['op'];
switch($ch)
{
    case 1:$c=strpos($a,$b);
          if($c!=0)
          echo "String '$b' Not present at the start of large String '$a' ";
          else
          echo "String '$b' Present at the start of large String '$a' ";
    break;
    case 2: $c= strpos("$a","$b");
    echo "position of '$a' in '$b' is :".$c ;
    break;

    case 3: $c= strcmp($a,$b);
    if($c==0)
    echo "both string are equal";
    else
    echo "both string are not equal";
    break;
    }
