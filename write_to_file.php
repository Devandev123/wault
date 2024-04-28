<?php
$data = $_GET['data'];
$file = fopen("C:\Users\Devajith S\Desktop\Wault\Local DB\Dynamic\Fingerprint.txt", "w") or die("Unable to open file!");
fwrite($file, $data);
fclose($file);

// Delay clearing file contents for 5 seconds
sleep(10);

// Clear file contents
$file = fopen("C:\Users\Devajith S\Desktop\Wault\Local DB\Dynamic\Fingerprint.txt", "w") or die("Unable to open file!");
fwrite($file, "");
fclose($file);
?>
