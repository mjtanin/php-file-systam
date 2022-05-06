<?php
$filename = getcwd() . "\\file\\data\\students.txt";
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

/*$fp = fopen($filename, 'w');
foreach ($students as $student) {
    fputcsv($fp, $student);
}
fclose($fp);*/


$fp = fopen($filename, 'r');
while ($student = fgetcsv($fp)) {
    printf("Name: %s %s, Age: %s \n", $student[0], $student[1], $student[2]);
}
fclose($fp);


/*
$new_student = array(
    'fname' => 'TaJ',
    'lname' => 'Ahmed',
    'age'   => '1d'
);

$fp = fopen($filename, 'a');
fputcsv($fp, $new_student);
fclose($fp);
*/
