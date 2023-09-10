<?php
    $fp = fopen ("Webboard.txt","r");
    while (!feof($fp)) {
        $rec = fgets($fp,999);
        echo $rec."<br>";
    }