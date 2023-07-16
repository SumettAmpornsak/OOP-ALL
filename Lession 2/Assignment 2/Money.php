<?php
$acctype = 'S';  // ประเภทบัญชีเงินฝาก (S, 3, 6, Y)
$amount = 1000000;  // จำนวนเงินฝาก


// สร้างโครงสร้างการทำงานตามเงื่อนไข
if ($acctype === 'S' && $amount < 1000000) {
    $interestRate = 1.5;
} elseif ($acctype === 'S' && $amount >= 1000000) {
    $interestRate = 1.75;
} elseif ($acctype === '3') {
    $interestRate = 2;
} elseif ($acctype === '6') {
    $interestRate = 2.25;
} elseif ($acctype === 'Y') {
    $interestRate = 2.5;
} else {
    // กรณีไม่ตรงกับเงื่อนไขที่กำหนด
    echo "ไม่พบประเภทบัญชีเงินฝากที่ถูกต้อง";
    exit; // ออกจากโปรแกรม
}

// แสดงผลข้อความ
echo "ท่านจะได้รับอัตราดอกเบี้ยร้อยละ $interestRate";

?>