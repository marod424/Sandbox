<?php
// $password = 'secret';
// echo md5($password);

// // Rainbow Table
// // contains pre-calculated hashes of potential passwords
// $rainbow = array(
//     md5('secret') => 'secret',
//     md5('welcome') => 'welcome',
//     md5('w3lc0m3') => 'w3lc0m3',
// );

// look for 3rd party hashing libraries (e.g. using Packagist)

require '../vendor/autoload.php';
$password = 'hknB7sW4%L*!';

// cost is for number of rounds the algorithm goes through
// try to optimize
$hash = password_hash($password, PASSWORD_DEFAULT, array('cost' => 10)); 
echo "<p>$hash</p>";

var_dump(password_verify($password, $hash));

// ----------------------------
// use SSL certificates (https)
// ----------------------------
// domain needs unique ip address
// need to buy and install certificate