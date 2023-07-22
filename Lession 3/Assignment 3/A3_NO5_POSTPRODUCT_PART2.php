<!DOCTYPE html>
<html>
<head>
    <title>ผลการบันทึกข้อมูลสินค้า</title>
</head>
<body>
    <?php
    // ตรวจสอบว่ามีการส่งข้อมูลมาจากฟอร์มหรือไม่
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // รับค่าที่ส่งมาจากฟอร์ม
    $productCode = $_POST["productCode"];
    $productName = $_POST["productName"];
    $productSize = $_POST["productSize"];
    $productQuantity = $_POST["productQuantity"];
    $productUnit = $_POST["productUnit"];
    $costPrice = $_POST["costPrice"];
    $sellingPrice = $_POST["sellingPrice"];
    
    // แสดงผลลัพธ์ที่ได้รับจากฟอร์มในรูปแบบของตาราง
    echo "<table border='2'>";
    echo "<tr><td colspan='2'>รายการสินค้าหนึ่งตำบลหนึ่งผลิตภัณฑ์จังหวัดนครปฐม</td></tr>";
    echo "<tr><td>รหัส</td><td>$productCode</td></tr>";
    echo "<tr><td>ชื่อสินค้า</td><td>$productName</td></tr>";
    echo "<tr><td>ขนาด</td><td>$productSize </td></tr>";
    echo "<tr><td>จำนวนสินค้าที่มีอยู่</td><td>$productQuantity</td></tr>";
    echo "<tr><td>หน่วยนับ</td><td>$productUnit</td></tr>";
    echo "<tr><td>ราคาทุน</td><td>$costPrice บาท</td></tr>";
    echo "<tr><td>ราคาขาย</td><td>$sellingPrice บาท</td></tr>";
    echo "</table>";


    // เพิ่มปุ่มย้อนกลับ
    echo "<br>";
    echo "<input type='button' value='ย้อนกลับ' onclick='history.back()'>";
}

?>

</body>
</html>
