<?php
    $fp = fopen ("Webboard.txt","r");
    while (!feof($fp)) {
        $rec = fgetcsv($fp,999,"\t");
        echo $rec[0]."<br>";
        echo $rec[1]."<br>";
        echo $rec[2]."<hr>";

    }
    fclose($fp);
?>