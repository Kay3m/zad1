<?php
define("log", "Klaudia Miktiuk, port: ".$_SERVER['SERVER_PORT']."data: ".date('d/F/o g i A'));

error_log("PHP log:".log);

$fp = fopen("logfile.txt","w");
fwrite($fp,log);
fclose($fp);


// pobranie adresu IP klienta
$ip = $_SERVER['REMOTE_ADDR'];
  
echo "Client's IP address is: $ip <br>";
  
// ustalenie daty, czasu i strefy na podstawie adresu IP
$sys_timestamp = strtotime(exec("date"));

$ipInfo = file_get_contents('http://ip-api.com/json/' . $ip);
$ipInfo = json_decode($ipInfo);
$timezone = $ipInfo->timezone;
date_default_timezone_set($timezone);
echo "Timezone: ".date_default_timezone_get();
echo "<br>Date".date('Y/m/d H:i:s');
?>
