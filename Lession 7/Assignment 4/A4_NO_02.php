<?php

function multiplicationTable($number) {
    for ($i = 1; $i <= 24; $i++) {
        $result = $number * $i;
        echo "$number x $i = $result <br>";;
    }
}

multiplicationTable(10); 
?>
