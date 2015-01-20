<?php

// setcookie('fontSize', 25 . 'px', time() + 60 * 30, '/');

setcookie('prefs[fontSize]', 25 . 'px');
setcookie('prefs[favoriteCategory]', 'news');
setcookie('prefs[screenWidth]', 1024 . 'px');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookies</title>
    <style>
        body { font-size: <?= $_COOKIE['fontSize']; ?> }
    </style>
</head>
<body>

    <?php
    if ( isset($_COOKIE['prefs']) ) { 
        foreach ($_COOKIE['prefs'] as $key => $val ) {
            echo '<li>' . htmlspecialchars($key) . ': ' . htmlspecialchars($val) . '</li>';
        }
    } 
    ?>

</body>
</html>