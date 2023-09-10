<?php
$subject = $_GET["subject"];
$comm = $_GET["comm"];
$email = $_GET["email"]; 

$all = $subject . "\t" . $comm . "\t" . $email . "\n";

$fp = fopen ("Webboard.txt","a");
fwrite($fp,$all);
fclose($fp);
echo "** SAVE **",$all;
?>
