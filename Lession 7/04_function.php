<?php
/* function ที่ดึงค่าจากตัวแปรธรรมดา */
    function greeting($n,$m){
        echo "<h2>Welcome $n To NPRU </h2>";
        echo "<h2>You Are $m member </h2>";
        echo "<h1>****************</h1>";
    }

    $name="Sumett Ampornsak";
    $member="Gold";
        greeting($name,$member);

    $name="Somchai Jaidee";
    $member="Titanium";
        greeting($name,$member);
        echo "<br>";

    /* function ที่มีการคำนวน */
    function circle($r){
        $area = (22/7)*$r*$r;
        return $area;
    }
    echo circle(7)."<br>";
    echo circle(10)."<br>";
    echo circle(14)."<br>";
    echo "<br>";

    /* function ที่มีการคำนวน Vat */
    function product($vat){
        $total = ($vat/100)*7;
    
    echo "สินค้าราคา".$vat."บาท"."<br>";
    echo "ภาษีมูลค่าเพิ่ม".$total."บาท"."<br>";
    echo "สินค้ารวมภาษีมูลค่าเพิ่ม".$total + $vat ."บาท"."<br>";
}
product(150);
product(200);
echo "<br>";

    /* function ที่มีการคำนวนราคาสินค้าและส่วนลด*/
    function calc($amount,$disc){
        $total = $amount *(100-$disc)/100;
        
    echo "ราคาสินค้า".$amount."บาท"."<br>";
    echo "ส่วนลด".$disc."บาท"."<br>";
    echo "ส่วนลดที่ได้รับ".$amount - $total."บาท"."<br>";
    echo "ราคาสินค้าสุทธิ".$total."บาท"."<br>";
}
calc(2500,5);
calc(15000,10);
echo "<br>";
?>