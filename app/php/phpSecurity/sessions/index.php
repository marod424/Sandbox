<?php

session_start();
$_SESSION['username'] = 'Marod';
$_SESSION['loggedin'] = TRUE;
$_SESSION['role'] = 'admin';

echo '<pre>';

// sessions basically consist of 3 components:
var_dump(session_id());
var_dump(session_get_cookie_params());
var_dump($_SESSION);

// php.ini for session garbage collection

// Use well renown session library

// session id rotating (e.g. every 5 min)
session_regenerate_id();

// in php.ini: session.use_only_cookies = 1
session_destroy();
session_unset();