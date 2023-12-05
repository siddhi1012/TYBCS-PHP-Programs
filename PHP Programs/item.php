<!DOCTYPE html>
<html>
    <body>
        <?php
        
        $file=fopen("item.dat",'r');
        ?>
    
    
            <table border=1>
                <caption> List of Items</caption>
<tr>
    <th> item no</th>
    <th> item name</th>
    <th>unit sold</th>
    <th>rate</th>
    
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