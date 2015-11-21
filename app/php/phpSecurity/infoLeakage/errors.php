<?php

require 'functions.php';

include 'foo.txt';

// ------------------------------------------
// for a production server,
// errors to error log rather than to screen:
// edit php.ini
// ------------------------------------------
// display_errors = Off
// display_startup_errors = Off
// error_reporting = E_ALL & ~E_DEPRECATED
// html_errors = Off
// log_errors = On

// alternatively, if using Apache, can add an .htaccess 

// Login
// mrod@foo.com
// echo 'We could not find that user'; // BAD: tells too much
// echo 'This combination of email and password does not exist'; // BETTER: more ambiguous

$array = array();
dump($array);

// Server Headers
// -----------------
// Apache httpd.conf
// -----------------
// ServerTokens Prod
// ServerSignature Off
// -------
// php.ini
// -------
// expose_php = Off