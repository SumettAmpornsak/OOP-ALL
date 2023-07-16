<html
	<head>
	</head>
		<body>
			<h1> Nakhorn Pathom  Rajabhat University </h1>
			<?php
			$fname="Sumett"; // ชื่อจริง
			$lname="Ampornsak"; // นามสกุล
			/*
			This Is LastName
			*/
			define("WELCOME","ยินดีต้อนรับ");
			define("AYEAR","สู่ปีการศึกษา");
			define("N",2566);
				echo "<h2 style='color:	#00cc00'> Welcome $fname $lname to NPRU </h2>";
				echo WELCOME," ",$fname," ",$lname," ",AYEAR," ",N;
			?>
	</body>
</html>