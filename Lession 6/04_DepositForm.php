<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sumett Ampornsak">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">
    <title>Deposit_Form</title>
    <style>
        body {
            font-family: 'Mitr', sans-serif;
            background-color: #f0f0f0;
            text-align: center;
        }
        h1 {
            font-size: 50px;
            margin-bottom: 20px;
        }
        p{
            font-size: 20px;
        }
        form {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 20px;
            padding: 50px;
            width: 600px;
            margin: 0 auto;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            display: inline-block;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 30px;
            border: 3px solid #ccc;
            border-radius: 40px;
        }
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 30px;
            border: 3px solid #ccc;
            border-radius: 40px;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 20px 35px;
            border-radius: 50px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 0 auto; /* นำตารางมาอยู่ตรงกลาง */
        }


        table,
        th,
        td {
            border: 10px solid white;
        }

        th,
        td {
            padding: 5px;
            text-align: left;
        }

        th {
            background-color: white;
        }
    </style>
</head>
<body>
    <h1>ระบบเปิดบัญชีเงินฝาก</h1>
    <form method="post" action="">
        <label for="accountNumber">เลขที่บัญชี</label>
        <input type="text" name="accountNumber" id="accountNumber" required>

        <label for="firstName">ชื่อ</label>
        <input type="text" name="firstName" id="firstName" required>

        <label for="lastName">นามสกุล</label>
        <input type="text" name="lastName" id="lastName" required>

        <label for="nationalId">รหัสประชาชน</label>
        <input type="text" name="nationalId" id="nationalId" required>

        <label for="accountType">ประเภทบัญชี</label>
        <select name="accountType" id="accountType" required>
            <option value="บัญชีเงินฝากออมทรัพย์">บัญชีเงินฝากออมทรัพย์</option>
            <option value="บัญชีเงินฝากกระแสรายวัน">บัญชีเงินฝากกระแสรายวัน</option>
            <option value="บัญชีเงินฝากประจำ">บัญชีเงินฝากประจำ</option>
        </select>

        <label for="initialDeposit">จำนวนเงินที่เปิดบัญชี (บาท)</label>
        <input type="number" name="initialDeposit" id="initialDeposit" required>

        <input type="submit" name="submit" value="ยืนยันการเปิดบัญชี">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $accountNumber = $_POST["accountNumber"];
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $nationalId = $_POST["nationalId"];
        $accountType = $_POST["accountType"];
        $initialDeposit = $_POST["initialDeposit"];

        echo "<h2>ข้อมูลการเปิดบัญชีที่รับค่าจากฟอร์ม</h2>";
        echo "<table border='1' cellpadding='10'>";
        echo "<tr><th>รายการ</th><th>ข้อมูล</th></tr>";
        echo "<tr><td>เลขที่บัญชี</td><td>$accountNumber</td></tr>";
        echo "<tr><td>ชื่อ</td><td>$firstName</td></tr>";
        echo "<tr><td>นามสกุล</td><td>$lastName</td></tr>";
        echo "<tr><td>รหัสประชาชน</td><td>$nationalId</td></tr>";
        echo "<tr><td>ประเภทบัญชี</td><td>$accountType</td></tr>";
        echo "<tr><td>จำนวนเงินที่เปิดบัญชี</td><td>$initialDeposit บาท</td></tr>";
        echo "</table>";
    }
    ?>
</body>
</html>
