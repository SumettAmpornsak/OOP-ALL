<?php
//สร้างอาร์เรย์ชนิดหลายมิติเพื่อเก็บข้อมูลรายการสินค้า
$products = array(
    array("รหัสสินค้า" => "8852222610888", "ชื่อสินค้า" => "Freshy toothpaste", "ขนาด" => "100cc", "ราคา" => 43.50),
    array("รหัสสินค้า" => "8852222710999", "ชื่อสินค้า" => "Freshy toothpaste", "ขนาด" => "200cc", "ราคา" => 65.00),
    array("รหัสสินค้า" => "8852222888000", "ชื่อสินค้า" => "Freshy toothbrush", "ขนาด" => "S", "ราคา" => 56.00)
);

// แสดงผลรายการอาร์เรย์สองมิติในตาราง
echo "<table border='10'>";
echo "<tr><th> รหัสสินค้า</th><th> ชื่อสินค้า</th><th>ขนาด</th><th>ราคา</th><th>ภาษีมูลค่าเพิ่ม</th><th>ราคารวม(รวมภาษีมูลค่าเพิ่ม)</th></tr>";

// คำนวณและแสดงผลรายการสินค้าและภาษีมูลค่าเพิ่ม
foreach ($products as $product) {
    echo "<tr>";
    echo "<td>" . $product['รหัสสินค้า'] . "</td>";
    echo "<td>" . $product['ชื่อสินค้า'] . "</td>";
    echo "<td>" . $product['ขนาด'] . "</td>";
    echo "<td>" . $product['ราคา'] . "</td>";

    // คำนวณภาษีมูลค่าเพิ่ม 7%
    $vat = $product['ราคา'] * 0.07;
    echo "<td>" . $vat . "</td>";

    // คำนวณราคารวมรวมภาษีมูลค่าเพิ่มและแสดงผล
    $totalPrice = $product['ราคา'] + $vat;
    echo "<td>" . $totalPrice . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
