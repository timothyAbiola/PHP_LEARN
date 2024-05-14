<?php
$file = './data.php';
$handle = fopen($file, 'r');
// $content = fread($handle, filesize($file));
$hold = fgets($handle);
echo $hold;
// fwrite($handle, "welcome \n");
// echo $content;
fclose($handle);
// unlink($file);
//     $fp = 'data.php';
//    fwrite($fp, 'welcome to my webpage');
//    echo 'written successful';
?>