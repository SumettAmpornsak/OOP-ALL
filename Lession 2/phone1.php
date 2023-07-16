<?php
        // กำหนดค่าให้กับตัวแปร
        $pro =  "A"; //การส่งเสริมการขาย
        $times  = 50; //จำนวนครั้งที่ใช้โทรศัพท์
        $min = 220; //จำนวนครั้งที่ใช้โทรศัพท์
        
        
 
        // สร้างโครงสร้างการทำงานตามเงื่อนไข if เพื่อคำนวณค่าใช้จ่ายที่เรียกเก็บ
        switch ($pro) {
            case 'A':
            $result = $min * 1.5;
            $unit = "นาที";
            $per = 1.5;
            break;

            default:
            $result = $time * 3;
            $unit = "ครั้ง";
            $per = 3;
        }

        //แสดงผลตาราง
            echo "<table>";
            echo "<tr><td>ท่านใช้รายการส่งเสริมการขาย $pro</td><td>คิดค่าใช้โทรศัพท์เป็น$unit ๆ ละ</td><td>$per บาท</td></tr>";
            echo "<tr><td>ท่านใช้โทรศัพท์</td><td></td><td>$times ครั้ง</td></tr>";
            echo "<tr><td> </td><td></td><td>$min $unit</td></tr>";
            echo "<tr><td>รวมค่าใช้จ่าย</td><td></td><td>$result บาท</td></tr>";
            echo "</table>";


            
?>