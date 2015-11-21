<?php

// function say_hello($name = 'buddy') {
//     return "Hi there $name!";
// }

// echo say_hello('Thomas');
// echo say_hello();

// $arr = array(
//     "name" => "Joe", 
//     "age" => 40,
//     "occupation" => "teacher"
// );

// function pp($value) {
//     echo '<pre>';
//     print_r($value);
//     echo '</pre>';
// }

// pp($arr);

$people = array(
    array("name" => "Greg", "age" => 17, "occupation" => "student"),
    array("name" => "Bill", "age" => 37, "occupation" => "janitor"),
    array("name" => "Jones", "age" => 1, "occupation" => "maid")
);

// function array_pluck($toPluck, $arr) {
//     $ret = array();

//     foreach($arr as $item) {
//         $ret[] = $item[$toPluck];
//     }

//     return $ret;
// }

function array_pluck($toPluck, $arr) {
    return array_map(function($item) use($toPluck) {
        return $item[$toPluck];
    }, $arr);
}

$jobs = array_pluck('occupation', $people);
// print_r($jobs);

foreach($jobs as $job) {
    echo $job.'<br/>';
}