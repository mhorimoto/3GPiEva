<?php
$lt = time();     // Local Time from EPOC
$c = $_POST['C']; // Count Number
$m = $_POST['M']; // MAC Address
$t = $_POST['T']; // TOD
$rt = $_POST['P']; // Remote Time from EPOC
$st = $lt - $rt;

$fp = fopen("/var/www/m3ri/logs/3GPiEva.log","a");
fprintf($fp,"%s,%s,%d,%d\n",$t,$m,$c,$st);
fclose($fp);

header('Content-type: application/json');
echo json_encode("OK");

exit;


?>
