<?php
// กำหนดค่าให้กับตัวแปร $year ให้มีค่าเป็นปีปัจจุบัน (พ.ศ.)
$year = date('Y') + 543;

// แสดงผลค่าปีปัจจุบัน
echo "ปีปัจจุบัน (พ.ศ.): $year<br>";

// แสดงผลค่าปีปัจจุบันและย้อนหลังไป 9 ปี
for ($counter = 0; $counter < 10; $counter++) {
    echo $year - $counter;
    if ($counter < 9) {
        echo " "  . "<br>";
    }
}
?>