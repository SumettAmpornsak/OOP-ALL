<?php
    $mark = array ("Jack"=>65,"Tim"=>55,"Liz"=>85,"Anna"=>60,"Jim"=>70);

    foreach($mark as $key=>$value) //เรียงจาก Key
        echo $key," ",$value,"<br>";
        echo "<br>";

    asort($mark); //เรียงเลขจากน้อยไปมาก
    foreach($mark as $key=>$value)
        echo $key," ",$value,"<br>";
        echo "<br>";

    arsort($mark); //เรียงเลขจากมากไปน้อย
    foreach($mark as $key=>$value)
        echo $key," ",$value,"<br>";
        echo "<br>";
    
    ksort($mark); //เรียงตัวอักษรหน้าไปหลัง
    foreach($mark as $key=>$value)
        echo $key," ",$value,"<br>";
        echo "<br>";

    krsort($mark); //เรียงตัวอักษรหลังไปหน้า
    foreach($mark as $key=>$value)
        echo $key," ",$value,"<br>";
        echo "<br>";
        
?>