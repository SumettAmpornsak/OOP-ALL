<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sumett Ampornsak">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">
    <title>Capital</title>
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
            font-size: 40px;
            color: white;
        }
        .container {
            max-width: 850px;
            margin: 0 auto;
            padding: 50px;
            background-color: gray;
            border-radius: 60px;
            box-shadow: 0 0 90px rgba(0, 0, 0, 0.2);
        }
        ul {
            list-style: none;
        }

    </style>
</head>
<body>
    <div class="container">
    <ul>
        <?php
            $capitals = array(
        'USA' => "Washington",
        'Great Britain' => "London",
        'New Zealand' => "Wellington",
        'Australia' => "Canberra",
        'Italy' => "Rome",
        'Canada' => "Ottawa");

        // แสดงค่าเมืองหลวงของแต่ละประเทศ
        foreach ($capitals as $country => $capital) {
        echo "Capital of $country is $capital.<br>";
        }
        
        ?>
    </ul>
</div>
</body>
</html>