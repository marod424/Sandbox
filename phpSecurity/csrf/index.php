<?php

require 'functions.php';

if (!empty($_SESSION['loggedin']) && $_SESSION['loggedin'] === TRUE) {
    $account = isset($_GET['account']) ? (int) $_GET['account'] : 0;
    $amount = isset($_GET['amount']) ? (int) $_GET['amount'] : 0;

    if ($account > 0 && $amount > 0) {
        // Transfer
        $filename = 'transfers.txt';
        $data = file_get_contents($filename);
        $msg = "A transfer of {$amount} has been made to account {$account}";
        $data .= $msg;
        file_put_contents($filename, $data);
        echo $msg;
    } else {
        echo 'No transfer could be made';
    }
} else {
    echo 'You need to login man!';
}