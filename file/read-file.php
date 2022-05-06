<?php

$filename = "t:\\php\\file\\data\\file1.txt";
if (is_readable($filename)) {
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

    // file
    $data = file($filename);
    print_r($data);


    // file_get_content
    $data = file_get_contents($filename);
    echo $data;
}
