<?php
if (isset($_POST['wlinp'])) {$wlinp = $_POST['wlinp']; }
if (isset($_POST['wlname'])) {$wlname = $_POST['wlname']; }

$file = "wllog.txt";
$lines = count(file($file));

if ($lines == "10") {
	$fp = fopen('wllog.txt', 'r+');
	ftruncate($fp, 0);
	fclose($fp);
	} 


$fp = fopen('wllog.txt', 'a');
fwrite($fp, $_POST['wlname'].",".date("H:i:s")."> ".$_POST['wlinp']."\n");
fclose($fp);

echo "все ок";
?>