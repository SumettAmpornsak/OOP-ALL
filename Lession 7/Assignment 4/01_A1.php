<?php
/* function ที่มีการคำนวณหาปริมาตรทรงกระบอก*/
    function Cylindrical($radius,$height){
        $volume  = (22/7) *$radius*$radius*$height;
        return $volume;
    }

    echo Cylindrical(3,7)."<br>";
    echo Cylindrical(7,3)."<br>";
    echo "<br>";

?>