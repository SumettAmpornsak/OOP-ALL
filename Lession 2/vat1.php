<?php
	$price = 50;  //"ราคาต่อหน่วย : บาท";
	$qty =10; //"จำนวน : ชิ้น";
	 
	
	$vatRate = 7;
	
	$subtotal = ($price * $qty);
	$vat =($subtotal * $vatRate  /100); 
	$priceExcludevat = $subtotal - $vat;
	

    //แสดงผล
    echo "<table>";
    echo "<tr><td>สินค้า</td><td>$qty</td><td>ชิ้น</td></tr>";
    echo "<tr><td>ชิ้นละ</td><td>$price</td><td>บาท</td></tr>";
    echo "<tr><td>รวม</td><td>$subtotal</td><td>บาท</td></tr>";
    echo "<tr><td>ภาษีมูลค่าเพิ่ม</td><td>$vat</td><td>บาท</td></tr>";
    echo "<tr><td>ราคาสินค้าที่ไม่รวมภาษีมูลค่าเพิ่ม</td><td>$priceExcludevat</td><td>บาท</td></tr>";
    echo "</table>";

    

	// echo "สินค้า"," ",$qty," ชิ้น" ,"<br>" ;
	// echo "ชิ้นละ " , " ",$price," บาท" ,"<br>" ;
	// echo "รวม", " ",$subtotal," บาท" ,"<br>" ;
	// echo "ภาษีมูลค่าเพิ่ม", " ",$vat," บาท" ,"<br>" ;
	// echo "ราคาสินค้าที่ไม่รวมภาษีมูลค่าเพิ่ม ", " ",$priceExcludevat," บาท" ,"<br>" ;
	
	
	
	
?>
