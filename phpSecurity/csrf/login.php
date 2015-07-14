<?php

require 'functions.php';
require 'csrf.php';

$csrf = new csrf();

// Check token
if ($csrf->check_token($csrf->get_token_from_url()) == FALSE) {
    die('You cannot log in');
}

$_SESSION['loggedin'] = TRUE;
header('location: index.php');