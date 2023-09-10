<?php
    $mark = array (24,83,45,98,12);
    for($i=0;$i<5;$i++)
        echo $mark[$i]." ";
        echo "<br>";

    sort($mark);
    for($i=0;$i<5;$i++)
        echo $mark[$i]." ";
        echo "<br>";
    
    rsort($mark);
    for($i=0;$i<5;$i++)
        echo $mark[$i]." ";
        echo "<br>";
    
?>