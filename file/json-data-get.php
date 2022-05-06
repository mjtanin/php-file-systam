<?php 
$filename = getcwd() . "\\file\\data\\json-data.txt";
$json_data = file_get_contents($filename);
$data = json_decode($json_data, true);
print_r($data);
