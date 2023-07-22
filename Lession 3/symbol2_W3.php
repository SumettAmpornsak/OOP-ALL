<?php
$width = 20; // ความกว้างของรูปภาพ
$height = 20; // ความยาวของรูปภาพ

for ($i = 1; $i <= 40; $i++) {
    for ($j = 1; $j <= 40; $j++) {
        echo "<img src='SYM_PIC/images02.png' width='$width' height='$height' alt='image' />";
        
    }
    echo "<br>";
}
?>