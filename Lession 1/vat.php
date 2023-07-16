<?php
	$price = 50;  //"ราคาต่อหน่วย : บาท";
	$qty =10; //"จำนวน : ชิ้น";
	 
	
	$vat = 7;
	
	$total = ($price * $qty);
	$vatamount =($total * $vat /100); 
	$priceExcludevat = $total - $vatamount;
	
	echo "สินค้า"," ",$qty," ชิ้น" ,"<br>" ;
	echo "ชิ้นละ " , " ",$price," บาท" ,"<br>" ;
	echo "รวม", " ",$total," บาท" ,"<br>" ;
	echo "ภาษีมูลค่าเพิ่ม", " ",$vatamount," บาท" ,"<br>" ;
	echo "ราคาสินค้าที่ไม่รวมภาษีมูลค่าเพิ่ม ", " ",$priceExcludevat," บาท" ,"<br>" ;
	
	
	
	
?>
