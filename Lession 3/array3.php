<?php

    $grade = array(array("Somchai",75,"B")
    ,array("Somsri",89,"A")
    ,array("Somsuay",65,"C")
    ,array("Somsuk",45,"E"));
  //แสดงผลตาราง
    echo "<table border=1>";
    echo "<tr><th>Name</th><th>Mark</th><th>Grade</th></tr>";
    
    for($i=0;$i<4;$i++){

        echo "<tr>
        <td>",$grade[$i] [0],"</td>
        <td>",$grade[$i] [1],"</td>
        <td>",$grade[$i] [2],"</td>
        </tr>";
    }
        echo "</table>";


?> 


