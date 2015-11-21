<?php

$arr = array('Matt', 'Flint', 'Tom', 'Rick');
// $arr = array(
//     'ceo'       => 'Flint',
//     'manager'   => 'Tom',
//     'developer' => 'Rick',
//     'me' => 'Matt'
// );

// foreach($arr as $title => $name) {
//     echo "<li><strong>$title</strong> - $name</li>";
// }

// for($i = 0; $i < count($arr); $i++) {
//     echo "<li>$arr[$i]</li>";
// }

$i = 0;
while($i < count($arr)) {
    echo "<li>$arr[$i]</li>";
    $i++;
}