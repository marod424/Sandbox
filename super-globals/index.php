<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Super Globals</title>
</head>
<body>
    <h1>Super Globals</h1>
    <?php

    if (isset($_GET['job']) ) {
        echo htmlspecialchars($_GET['job']);
    } else {
        echo 'Redirect';
    }

    ?>

    <a href="about.php?name=joe">About</a>
</body>
</html>