<?php 
session_start(); 

if (isset($_SESSION['banned']) && $_SESSION['banned'] == TRUE) {
    header('location: banned.php');
}

// validate
$array = array('google.com', 'yahoo.com', 'bing.com');
if (in_array($_POST['host'], $array) == FALSE) {
    // Ban the user
    $_SESSION['banned'] = TRUE;
    header('location: banned.php');
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OS Injection</title>
</head>
<body>
    
    <h1>DNS Lookup</h1>
    <form action="#" method="post">
        <select name="host" id="host">
            <option value="google.com">google.com</option>
            <option value="yahoo.com">yahoo.com</option>
            <option value="bing.com">bing.com</option>
        </select>
        <input type="submit" />
    </form>

    <?php

    if (isset($_POST['host']) && in_array($_POST['host'], $array)) {
        echo '<pre>';
        
        // unless you absolutely have to, do not use this kind of code
        system('nslookup ' . $_POST['host']);
    }
    ?>

</body>
</html>