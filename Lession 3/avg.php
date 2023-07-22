<?php

    $month = array("January"=>31,"February"=>28,"March"=>31,"April"=>30,"May"=>31,"June"=>30,"July"=>31,"August"=>31,"September"=>30,"October"=>31,"November"=>30,"December"=>31);

    $allday=0;
    foreach($month as $key => $value){
        echo "เดือน ",$key," มี ";
        echo $value," วัน","<br>";
        $allday += $value;
        
    }
$avgdays = $allday / count($month);

        echo "รวมทั้งปี ",$allday," วัน","<br>";
        echo "เฉลี่ยจำนวน ",round($avgdays,2)," วัน","<br>";
    ?> 


