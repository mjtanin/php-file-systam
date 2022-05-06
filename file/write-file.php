<?php
$filename = getcwd() . "\\file\\data\\file2.txt";
if (is_writable($filename)) {
    $fp = fopen($filename, "w");

    fwrite($fp, "ranu\n");
    fwrite($fp, "tanvir\n");
    fwrite($fp, "jui\n");
    fwrite($fp, "tanin\n");
    fwrite($fp, "sabina\n");
    fwrite($fp, "bablu\n");
    fwrite($fp, "shakawat\n");

    fclose($fp);
}
