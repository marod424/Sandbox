<?php

function connect() {
    return new PDO('mysql:host=localhost;dbname=php_security', 'matthew', 'Billatrust2419', array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    );
}