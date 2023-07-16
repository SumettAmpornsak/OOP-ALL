<?php
        // กำหนดค่าให้กับตัวแปร
        $pro =  "A"; //การส่งเสริมการขาย
        $times  = 50; //จำนวนครั้งที่ใช้โทรศัพท์
        $min = 220; //จำนวนครั้งที่ใช้โทรศัพท์
        $cal = 1.5;
 
        // สร้างโครงสร้างการทำงานตามเงื่อนไข if เพื่อคำนวณค่าใช้จ่ายที่เรียกเก็บ
        if ($pro == 'A') {
            $cost = $min * 1.50; // คิดค่าใช้โทรศัพท์เป็นนาทีละ 1.50 บาท
        }   elseif ($pro != 'A') {
            $cost = $times * 3; // คิดค่าใช้โทรศัพท์เป็นครั้งละ 3 บาท
        }   else {
            $cost = 0; // กรณีไม่ตรงกับเงื่อนไขที่กำหนด
        }
        
        // // แสดงผลข้อความ
        //     echo "ท่านใช้รายการส่งเสริมการขาย $pro คิดค่าใช้โทรศัพท์เป็นนาที ๆ ละ $cal บาท","<br>"; 
        //     echo "ท่านใช้โทรศัพท์  $times ครั้ง $min นาที","<br>";
        //     echo "รวมค่าใช้จ่าย $cost บาท";
        

        //แสดงผลตาราง
            echo "<table>";
            echo "<tr><td>ท่านใช้รายการส่งเสริมการขาย $pro</td><td>คิดค่าใช้โทรศัพท์เป็นนาที ๆ ละ</td><td>$cal บาท</td></tr>";
            echo "<tr><td>ท่านใช้โทรศัพท์</td><td></td><td>$times ครั้ง</td></tr>";
            echo "<tr><td> </td><td></td><td>$min นาที</td></tr>";
            echo "<tr><td>รวมค่าใช้จ่าย</td><td></td><td>$cost บาท</td></tr>";
            echo "</table>";


            
?>