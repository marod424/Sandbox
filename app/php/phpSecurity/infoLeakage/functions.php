<?php

// Detect env
$path = dirname(__FILE__);

switch ($path) {
    case 'D:\projects\Sandbox\phpSecurity\infoLeakage':
        $env = 'development';
        break;
        // other servers
    default:
        $env = 'production';
        break;
}

define('C_ENVIRONMENT', $env);

// Set error reporting
switch (C_ENVIRONMENT) {
    case 'development':
        error_reporting(-1);
        break;
    default:
        error_reporting(0);
        break;
}

// Environment specific debugging
function dump ($msg) {
    switch (C_ENVIRONMENT) {
        case 'development':
            var_dump($msg);
            break;
        default:
            break;
    } 
}