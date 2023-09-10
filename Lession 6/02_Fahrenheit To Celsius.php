<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sumett Ampornsak">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">
    <title>Fahrenheit To Celsius</title>
    <style>
        body {
            font-family: 'Mitr', sans-serif;
            background-color: #f0f0f0;
            text-align: center;
        }
        h1 {
            font-size: 50px;
            color: blue;
        }
        form {
            background-color: #fff;
            padding: 20px; /* ปรับค่า Padding เป็น 20px */
            border-radius: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            display: inline-block;
        }

        input[type="text"] {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
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
        
    </style>
</head>
<body>
    <h1>Fahrenheit To Celsius</h1>
    <h2>แปลงค่าองศาฟาเรนไฮต์เป็นองศาเซลเซียส</h2>
    <form method="post" action=""><h2>กรอกค่าองศาฟาเรนไฮต์: </h2><input type="text" name="fahrenheit">
    <br><br>
    <input type="submit" name="submit" value="แปลงค่า">
    </form>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // รับค่าองศาฟาเรนไฮต์จากฟอร์ม
        $fahrenheit = $_POST["fahrenheit"];

        // สูตรแปลงองศาฟาเรนไฮต์เป็นองศาเซลเซียส
        $celsius = ($fahrenheit - 32) * 5 / 9;

         // ตรวจสอบค่าที่กรอกและกำหนดสีตามเงื่อนไข
         $fahrenheitColor = "";
         $celsiusColor = "";
 
         if ($celsius < 0) {
             $celsiusColor = "blue";
         } elseif ($celsius >= 0 && $celsius <= 100) {
             $celsiusColor = "green";
         } else {
             $celsiusColor = "red";
         }
 
         // ใช้ number_format เพื่อจัดรูปแบบเป็นทศนิยม 2 ตำแหน่งสำหรับค่าองศาเซลเซียส
         $celsiusFormatted = number_format($celsius, 2);
 
         // แสดงค่าองศาทั้งค่าองศาฟาเรนไฮต์และเซลเซียส พร้อมสีตามเงื่อนไข
         echo "<h2 style='color: $fahrenheitColor;'>องศาฟาเรนไฮต์: $fahrenheit °F</h2>";
         echo "<h2 style='color: $celsiusColor;'>องศาเซลเซียส: $celsiusFormatted °C</h2>";
     }
     ?>

</body>
</html>