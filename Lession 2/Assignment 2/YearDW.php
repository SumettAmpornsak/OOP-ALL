<?php
// กำหนดค่าให้กับตัวแปร $year ให้มีค่าเป็นปีปัจจุบัน (พ.ศ.)
$year = date('Y') + 543;

// แสดงผลค่าปีปัจจุบัน
echo "ปีปัจจุบัน (พ.ศ.): $year<br>";

// แสดงผลค่าปีปัจจุบันและย้อนหลังไป 9 ปี
$counter = 0;
do {
    echo $year - $counter;
    if ($counter < 9) {
        echo " "  . "<br>";
    }
    $counter++;
} while ($counter < 10);
?>