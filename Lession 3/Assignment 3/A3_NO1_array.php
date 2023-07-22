<?php
// สร้างอาร์เรย์เพื่อเก็บข้อมูลสินค้าและราคา
$products = array(
    array("ชื่อสินค้า" => "Coke", "ราคา" => 15),
    array("ชื่อสินค้า" => "Pepsi", "ราคา" => 14),
    array("ชื่อสินค้า" => "Lays", "ราคา" => 35),
    array("ชื่อสินค้า" => "Fanta", "ราคา" => 15),
    array("ชื่อสินค้า" => "Sprite", "ราคา" => 15),
    array("ชื่อสินค้า" => "Oishi", "ราคา" => 20),
    array("ชื่อสินค้า" => "Vitamilk", "ราคา" => 12),
    array("ชื่อสินค้า" => "Lactasoy", "ราคา" => 12)
);

// แสดงผลรายการอาร์เรย์สองมิติในตาราง
    echo "<table border='10'>";
    echo "<tr><th>ชื่อสินค้า</th><th>ราคา</th></tr>";


// แสดงผลข้อมูลทั้งหมดในอาร์เรย์
foreach ($products as $product) {
    echo "<tr>";
    echo "<td>" . $product['ชื่อสินค้า'] . "</td>";
    echo "<td>" . $product['ราคา'] . "</td>";
    echo "</tr>";
}
    echo "</table>";
?>