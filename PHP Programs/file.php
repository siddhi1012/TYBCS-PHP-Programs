<?php
$filename=$_GET['t1'];
$fp=fopen($filename,'r');
$fs=filesize($filename);
echo fread($fp,$fs);
echo "<br>file size is".$fs








?>