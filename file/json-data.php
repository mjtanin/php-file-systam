<?php
$filename = getcwd() . "\\file\\data\\json-data.txt";
$students = array(
    array(
        "fname" => "Tanin",
        "lname" => "Ahmed",
        "age"   => 26
    ),
    array(
        "fname" => "Jui",
        "lname" => "Ahmed",
        "age"   => 20
    ),
    array(
        "fname" => "Tanvir",
        "lname" => "Ahmed",
        "age"   => 21
    ),
);

$data = json_encode($students);
file_put_contents($filename, $data, LOCK_EX);
