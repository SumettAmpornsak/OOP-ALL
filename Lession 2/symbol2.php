<?php
$width = 30; // ความกว้างของรูปภาพ
$height = 30; // ความยาวของรูปภาพ

for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo "<img src='https://www.pngall.com/wp-content/uploads/4/Black-Heart-Symbol-PNG-Clipart.png' width='$width' height='$height' alt='image' />";
    }
    echo "<br>";
}
?>