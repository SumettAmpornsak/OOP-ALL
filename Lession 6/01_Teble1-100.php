<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sumett Ampornsak">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">
    <title>Table 1-100</title>
    <style>
        body {
            font-family: 'Mitr', sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
<h1>ตาราง 1-100</h1>
    <table>
        <?php
        $rowCount = 10;
        $colCount = 10;
        $cellValue = 1;

        for ($i = 1; $i <= $rowCount; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $colCount; $j++) {
                echo "<td>" . $cellValue++ . "</td>";
            }
            echo "</tr>";
        }

        ?>
    </table>
    
</body>
</html>