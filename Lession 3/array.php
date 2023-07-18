<?php
    $name=array("Somchai","Somsri","Somsuay","Somsuk");


        for($i=0;$i<4;$i++)
            echo $name[$i]," ";
            echo "are NPRU students.<br>";


    $mark=array(75,46,98,63,86,73,90,23,53,87);
    $sum=0;
        for($j=0;$j<10;$j++){
            echo "คะแนนของนักศึกษาคนที่",$j+1,"เท่ากับ", $mark[$j], "<br>";
            $sum+=$mark[$j];
        }
            echo "คะแนนรวมของนักศึกษา $j คน เป็น $sum คะแนน", "<br>";

    $avg=$sum/$j;

            echo "คะแนนเฉลี่ยของนักศึกษาห้องนี้เป็น $avg" ;

    



?>