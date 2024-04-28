<?php
$file_path = 'C:\Users\Devajith S\Desktop\Wault\Local DB\Dynamic\Fingerprint.txt'; // Update with the path to your text file

if (file_exists($file_path)) {
    $file_content = file_get_contents($file_path);
    echo $file_content;
} else {
    echo "File not found";
}
?>
