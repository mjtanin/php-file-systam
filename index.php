<?php

$filename = "t:\\php\\data\\file1.txt";
$fp = fopen($filename, 'r');

while ($line = fgets($fp)) {
    echo $line;
}

// rewind($fp);
fseek($fp, 8);

while ($line = fgets($fp)) {
    echo $line;
}

fclose($fp);

$data = file($filename);
print_r($data);
