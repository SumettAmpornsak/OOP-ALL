<?php
	$base = 25; //ฐาน
	$height = 40; // ความสูง

		define("UNIT" , "เซนติเมตร");
		
	echo "สามเหลี่ยมฐาน ",$base ," ", UNIT ,"ความสูง" ,$height,"", UNIT ,"<br>";
	echo "มีพื้นที่เป็น", " ", 0.5* ($base*$height) ," "," ตาราง",UNIT;
	
?>