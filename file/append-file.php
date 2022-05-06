<?php

$filename = getcwd() . "\\file\\data\\file3.txt";
$fp = fopen($filename, "a");
fwrite($fp, "TaJ\n");
fwrite($fp, "Julekha\n");
fwrite($fp, "robin\n");

fclose($fp);
