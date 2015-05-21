<?php

require 'functions.php';

$_SESSION['loggedin'] = TRUE;
header('location: index.php');