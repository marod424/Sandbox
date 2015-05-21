<?php 
// eval is evil
$var = 1;
$newvalue = isset($_GET['id']) ? $_GET['id'] : 0;
eval('$var = ' . $newvalue . ';');
echo $var;