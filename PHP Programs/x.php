<?php
$a=array('pen'=>15,'pencil'=>5,'rubber'=>3,'book'=>30);
$b=array('ira'=>15,'nia'=>57,'ria'=>3,'alia'=>30);
$union=array_merge($a,$b);
print_r(array_unique($union));
?>