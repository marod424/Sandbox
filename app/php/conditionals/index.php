<?php 

$month = 'February';

// if($month == 'January') {
//  echo 'It is Jan!';
// } elseif($month == 'February') {
//  echo 'It is Feb!';
// } else {
//  echo 'Not the right month!';
// }

// switch($month) {
//     case 'January':
//         echo 'It is Jan!';
//         break;
//     case 'February':
//         echo 'It is Feb!';
//         break;
//     default:
//         echo 'Not the right month!';
// }

$months = array(
    'January'  => 'It is Jan',
    'February' => 'It is February',
    'March'    => 'It is March'
);

echo isset($months[$month]) ? $months[$month] : 'Not the right month!';