<?php

// // local.php?file=123_log.php
// $file = isset($_GET['file']) ? $_GET['file'] : NULL;

// if ($file === NULL) {
//     die('Invalid filename');
// }

// include '../logs/' . $file;

// local.php?file=123_log
$pattern = '/^[0-9]+_log$/';
$file = isset($_GET['file']) ? $_GET['file'] : NULL;

if (!preg_match($pattern, $file)) {
    die('File could not be found');
}

$filename = '../logs/' . $file . '.php';

if (file_exists($filename) && is_file($filename)) {
    include $filename;
} else {
    die('File could not be located'); 
}