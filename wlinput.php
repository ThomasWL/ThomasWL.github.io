<?php
switch ($_SERVER['HTTP_ORIGIN']) {
    case 'https://thomaswl.github.io': case 'https://thomaswl.github.io':
    header('Access-Control-Allow-Origin: '.$_SERVER['HTTP_ORIGIN']);
    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    header('Access-Control-Max-Age: 1000');
    header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
    break;
}
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