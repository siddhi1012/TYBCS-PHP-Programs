<!DOCTYPE html>
<html>
    <body>
        <?php
        
        $file=fopen("emp.dat",'r');
        ?>
    
    
            <table border=1>
                <caption> List of Employee</caption>
<tr>
    <th> Emp code</th>
    <th> Emp Name</th>
    <th>Salary</th>
    <th>Designation</th>
    
</tr>
<?php
              while(!feof($file)) 
              { 
                  $line=fgets($file);
                  $rec=explode(" ",$line);
                  for($i=0;$i<sizeof($rec);$i++)
                  echo"<td>".$rec[$i]."</td>";
                  echo"<tr>";
                 
                } 
                  
                  ?>
                    </table>
                
            </body>
            </html>