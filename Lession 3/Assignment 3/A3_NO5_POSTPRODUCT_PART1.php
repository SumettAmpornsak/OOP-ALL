<!DOCTYPE html>
<html>
<head>
    <title>รายการสินค้าหนึ่งตำบลหนึ่งผลิตภัณฑ์จังหวัดนครปฐม</title>
    <style>
        /* CSS Style สำหรับปรับขนาดของ Label */
        label {
            display: inline-block; /* ให้ Label แสดงเป็น Block ตัวเองและไม่ค่อยต่อกัน */
            width: 100px; /* กำหนดความกว้างของ Label*/
            text-align: left; /* จัดให้ข้อความใน Label*/
            margin-right: 20px; /* กำหนดระยะห่างของ Label จากช่องกรอกข้อมูล */
        }
    </style>
    
</head>
<body>
    <h1>รายการสินค้าหนึ่งตำบลหนึ่งผลิตภัณฑ์จังหวัดนครปฐม</h1>
    <form action="A3_NO5_POSTPRODUCT_PART2.php" method="post">

        <label for="productCode">รหัสสินค้า:</label>
        <input type="text" name="productCode" required style="width: 200px;"><br>

        <label for="productName">ชื่อสินค้า:</label>
        <input type="text" name="productName" required style="width: 200px;"><br>

        <label for="productSize">ขนาด:</label>
        <input type="text" name="productSize" required style="width: 200px;"><br>

        <label for="productQuantity">จำนวนสินค้าที่มีอยู่:</label>
        <input type="number" name="productQuantity" required style="width: 200px;"><br>

        <label for="productUnit">หน่วยนับ:</label>
        <input type="text" name="productUnit" required style="width: 200px;"><br>

        <label for="costPrice">ราคาทุน:</label>
        <input type="number" step="0.01" name="costPrice" required style="width: 200px;"><br>

        <label for="sellingPrice">ราคาขาย:</label>
        <input type="number" step="0.01" name="sellingPrice" required style="width: 200px;"><br>
        <br>
        <input type="submit" value="บันทึกข้อมูล">
        <input type="reset" value="ล้างค่า">
        
    </form>
</body>
</html>
