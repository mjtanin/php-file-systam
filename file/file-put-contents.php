<?php

$filename = getcwd() . "\\file\\data\\file1.txt";
if (is_writable($filename)) {
    file_put_contents($filename, ["tanin\n", "robin\n", "mithun\n"], FILE_APPEND | LOCK_EX);
}
