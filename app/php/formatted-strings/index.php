<?php

$name = "Matt";
$age = 26;

// printf("My name is %s and I am %d", $name, $age);

// $greeting = sprintf("My name is %s and I am %d", $name, $age);
// echo $greeting;

// $posted = sprintf("This post was made on %s %s, %d", 'June', '7th', '2012');
// echo $posted;

// $results = sscanf("June 7th, 2012", "%s %[^,], %d");
// print_r($results);

// list($month, $day, $year) = sscanf("June 7th, 2012", "%s %[^,], %d");
// echo $month . ' ' . $day . ', '. $year;

$results = sscanf("June 7th, 2012", "%s %[^,], %d", $month, $day, $year);
echo $month . ' ' . $day . ', '. $year;