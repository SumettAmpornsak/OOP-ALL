<?php
// กำหนดค่าให้กับตัวแปร $acctype และ $amount
$acctype = 'Y';
$amount = 2500000;

// สร้างโครงสร้างการตรวจสอบเงื่อนไขด้วย switch
switch ($acctype) {
    case 'S':
        if ($amount < 1000000) {
            $interest_rate = 1.5;
        } else {
            $interest_rate = 1.75;
        }
        break;
    case '3':
        $interest_rate = 2;
        break;
    case '6':
        $interest_rate = 2.25;
        break;
    case 'Y':
        $interest_rate = 2.5;
        break;
    default:
        // กรณีไม่ตรงกับเงื่อนไขที่กำหนด
        echo "ไม่พบประเภทบัญชีเงินฝากที่ถูกต้อง";
        exit; // ออกจากโปรแกรม
}

// แสดงผลข้อความ
echo "ท่านจะได้รับอัตราดอกเบี้ยร้อยละ $interest_rate";
?>