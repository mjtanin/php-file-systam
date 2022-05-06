<?php

$filename = getcwd() . "\\file\\data\\file4.txt";
$serialize_data = file_get_contents($filename);
$data = unserialize($serialize_data);
print_r($data);
