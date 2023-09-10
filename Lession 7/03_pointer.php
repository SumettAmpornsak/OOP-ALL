<?php
    $product = array ("Video","Tv","Telephone","DVD");

    for($i=0;$i<4;$i++)
        echo  $product[$i]." ";
        echo "<br>";

    echo current($product),"<br>"; //ตั้งต้น
    echo next($product),"<br>";// ถัดไป
    echo end($product),"<br>"; // ตัวสุดท้าย
    echo prev($product),"<br>";// ก่อนตัวสุดท้าย
    echo reset($product),"<br>"; // เริ่มใหม่
?>